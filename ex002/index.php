<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scripts PHP</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>

  <!-- Código do servidor -->
  <?php
  // date_default_timezone_set("America/Sao_Paulo");
  $data = "Hoje é dia " . date("d, M Y");
  $hora = "e a hora atual é: " . date("G:i:s");
  echo "<p>$data</p>";
  echo "<p>$hora</p>";
  ?>
</body>

</html>