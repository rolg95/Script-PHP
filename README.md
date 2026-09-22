# Kit de Comandos PHP

Prof. Rodolfo Gouveia
https://www.linkedin.com/in/rolg/

Coleção de exemplos pequenos, independentes e comentados para consulta durante as aulas.

Requisito recomendado: PHP 8.0 ou superior.

## Como executar

### Opção 1 — servidor interno do PHP

1. Abra o terminal nesta pasta.
2. Execute `php -S localhost:8000`.
3. Acesse `http://localhost:8000` no navegador.

### Opção 2 — XAMPP

1. Copie a pasta `kit_php_comandos` para `htdocs`.
2. Inicie o Apache.
3. Acesse `http://localhost/kit_php_comandos`.

## Organização

| Bloco | Conteúdo |
|---|---|
| 01 | Saída, comentários e mistura de PHP com HTML |
| 02 | Variáveis, constantes, tipos e conversões |
| 03 | Operadores aritméticos, comparação e lógica |
| 04 | `if`, `elseif`, ternário, `switch` e `match` |
| 05 | `for`, `while`, `do while` e `foreach` |
| 06 | Arrays indexados, associativos e multidimensionais |
| 07 | Funções, parâmetros, retorno e tipagem |
| 08 | Strings, números e datas |
| 09 | Formulários com GET e POST, filtros e upload |
| 10 | Leitura e escrita de arquivos |
| 11 | Sessões e cookies |
| 12 | JSON |
| 13 | Banco de dados com PDO |
| 14 | Inclusão de arquivos, tratamento de erros e redirecionamento |

## Observações importantes

- Os exemplos são bases de consulta, não sistemas completos.
- Dados recebidos do usuário são filtrados e escapados nos exemplos pertinentes.
- O exemplo de banco exige MySQL/MariaDB e deve ser configurado antes do uso.
- Nunca armazene senhas reais diretamente no código.
