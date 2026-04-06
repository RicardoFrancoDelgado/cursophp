<?php
// podem ser redeclaradas
$nome = "Ricardo";
$sobrenome = "Franco";

// redeclaração de variáveis
$nome = "Fernando";
$sobrenome = "Pessoa";

// constantes são declaradas sem o $ e todas em maiúsculo
const PAIS = "Brasil";

$mensagem = "Muito prazer, $nome $sobrenome";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis e Constantes</title>
</head>

<body>
  <h1><?= $mensagem ?></h1>
  <p>Moro no país <?= PAIS ?></p>
</body>

</html>