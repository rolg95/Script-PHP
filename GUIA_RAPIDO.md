# Guia rápido de consulta

## Símbolos essenciais

```php
<?php                 // Inicia um bloco PHP.
$nome = 'Ana';        // Cria uma variável.
echo $nome;           // Exibe um valor.
$textoA . $textoB;    // Concatena textos.
```

## Decisões

```php
if ($idade >= 18) {
    echo 'Maior de idade';
} else {
    echo 'Menor de idade';
}
```

## Repetição

```php
foreach ($itens as $item) {
    echo $item;
}
```

## Função

```php
function somar(float $a, float $b): float
{
    return $a + $b;
}
```

## Receber formulário

```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
```

## Consultar banco com segurança

```php
$comando = $pdo->prepare('SELECT * FROM jogos WHERE id = :id');
$comando->execute(['id' => $id]);
$jogo = $comando->fetch();
```

## Regra de segurança para saída HTML

Use `htmlspecialchars()` ao exibir conteúdo que veio do usuário ou de fonte externa:

```php
echo htmlspecialchars($nome);
```

