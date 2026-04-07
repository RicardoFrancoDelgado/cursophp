<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalhando com strings</title>
</head>

<body>
  <h1>Trabalhando com strings</h1>
  <?php
  echo "PHP \u{1F418}"; // interpreta tudo o que está na string e exibe
  echo 'PHP \u{1F418}'; // exibe o conteúdo apenas

  // os dois interpretam tag html
  echo '<p>Paragrafo \u{1F418}</p>';
  echo "<p>Paragrafo \u{1F418}</p>";

  $nome = "Rodrigo";
  $sobrenome = "Nogueira";
  $warname = "Minotauro";
  echo "$nome \"$warname\" $sobrenome"; // contra barra vai escapar as aspas 

  $year = date("Y");
  echo "<p>$year</p>"

  ?>
</body>

</html>