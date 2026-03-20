from typing import Iterator

from sublime import Region

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
        current_line = 0
        in_diff = False

        for output_line in output_lines:
            # Detectar cuando empezamos un bloque diff
            if output_line.startswith('@@'):
                in_diff = True
                continue

            if not in_diff:
                continue

            # Saltar líneas vacías o de contexto en el diff
            if not output_line or output_line[0] == ' ':
                continue

            output_first_character = output_line[0:1]
            filtered_output_line = output_line[1:]

            if 'declare(strict_types=1);' in output_line:
                lines_to_add.setdefault(1, []).append(filtered_output_line)
                continue

            if output_first_character == '+' and not filtered_output_line:
                continue

            if output_first_character == '-':
                try:
                    current_line = file_lines.index(filtered_output_line) + 1
                    lines_to_remove[current_line] = filtered_output_line
                    lines_to_add.setdefault(current_line, [])
                except ValueError:
                    # La línea no se encontró exactamente, ignorar
                    continue

            if output_first_character == '+':
                # Si no tenemos una línea actual, buscar contexto
                if current_line == 0:
                    # Buscar la línea anterior en el archivo para determinar posición
                    for i, line in enumerate(file_lines, 1):
                        if filtered_output_line in line or line in filtered_output_line:
                            current_line = i
                            break

                if current_line > 0:
                    lines_to_add.setdefault(current_line, []).append(
                        filtered_output_line)

        # Procesar líneas eliminadas
        for line_number in lines_to_remove.keys():
            if lines_to_remove[line_number] == '':
                continue

            line_content = lines_to_remove[line_number]
            message = '\n'.join(lines_to_add.get(line_number, []))
            col = 0

            for char in line_content:
                if char == ' ' or char == '\t':
                    col += 1
                else:
                    break

            matches.append(LintMatch({
                'line': line_number - 1,
                'message': message or 'Delete this line',
                'col': col,
                'end_col': len(line_content)
            }))

        # Procesar líneas añadidas que no corresponden a eliminaciones
        for line_number in lines_to_add.keys():
            if line_number in lines_to_remove:
                continue

            if not lines_to_add[line_number]:
                continue

            # Para líneas añadidas sin eliminación, mostrar en la línea anterior
            display_line = max(0, line_number - 1)
            message = '\n'.join(lines_to_add[line_number])

            matches.append(LintMatch({
                'line': display_line,
                'message': f'Add: {message}',
                'col': 0,
                'end_col': len(file_lines[display_line]) if display_line < len(file_lines) else 0
            }))

        return iter(matches)
