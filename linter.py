from typing import Iterator

from sublime import Region, enum

from SublimeLinter.lint import ComposerLinter
from SublimeLinter.lint.linter import LintMatch


class Rector(ComposerLinter):
    cmd = 'rector process ${file} --dry-run --no-progress-bar ${args}'

    defaults = {
        'selector': 'embedding.php'
    }

    def find_errors(self, output: str) -> Iterator[LintMatch]:
        output_lines = output.splitlines()
        matches = []

        for output_index, output_line in enumerate(output_lines):
            if output_line.startswith('-'):
                file_content = self.view.substr(Region(
                    0,
                    self.view.size()
                ))

                file_content_lines = file_content.splitlines()
                file_content_enumerate = enumerate(file_content_lines)

                for content_index, content_line in file_content_enumerate:
                    if content_line == output_line[1:]:
                        matches.append(LintMatch({
                            'line': content_index,
                            'message': output_lines[output_index + 1][1:]
                        }))

                        break

        return iter(matches)
