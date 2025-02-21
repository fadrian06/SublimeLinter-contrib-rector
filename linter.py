from typing import Iterator

from sublime import Region, enum

from SublimeLinter.lint import ComposerLinter
from SublimeLinter.lint.linter import LintMatch


class Rector(ComposerLinter):
    cmd = 'rector process ${file} --dry-run --no-progress-bar ${args}'

    defaults = {
        'selector': 'embedding.php'
    }

    default_type = 'warning'

    def find_errors(self, output: str) -> Iterator[LintMatch]:
        file_content = self.view.substr(Region(0, self.view.size()))
        file_lines = file_content.splitlines()
        matches = []
        output_lines = output.splitlines()
        lines_to_remove = {}
        lines_to_add = {}
        file_line = 0

        for output_line in output_lines:
            output_first_character = output_line[0:1]
            filtered_output_line = output_line[1:]

            if (
                output_first_character != '+'
                and output_first_character != '-'
            ):
                continue

            if output_first_character == '-':
                file_line = file_lines.index(filtered_output_line) + 1
                lines_to_remove[file_line] = filtered_output_line
                lines_to_add.setdefault(file_line, [])

            if output_first_character == '+':
                lines_to_add[file_line].append(filtered_output_line)

        for line_number in lines_to_remove.keys():
            message = '\n'.join(lines_to_add[line_number])

            matches.append(LintMatch({
                'line': line_number - 1,
                'message': message,
            }))

        return iter(matches)
