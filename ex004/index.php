<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>

<body>
  <h1>Testando tipos primitivos</h1>

  <?php
  // strings
  $nome = "Ricardo";
  echo "<p>A cadeia de string tem como valor $nome</p>";
  var_dump($nome);

  // int ou integer
  $idade = 25;
  echo "<p>A idade tem valor $idade</p>";
  var_dump($idade);

  // float ou double
  $altura = 1.86;
  echo "<p>Altura tem valor $altura</p>";
  var_dump($altura);

  // bool ou booleano
  $casado = false;
  echo "<p>Valor da variável booleana $casado</p>";
  echo "<p>A variável booleano quando false assume valores falsy que podem ser, 0, null, vazio e etc</p>";
  var_dump($casado);

  // coerção de tipos
  $num = (int) 3e2; // assume o tipo integer
  echo "<p>Valor de variáveis de potência $num</p>";
  // é possível fazer coerção de tipo
  var_dump($num);

  // Tipo compostos (Array e Object)
  $notas = [10, 10, 10, 5, 7, 8];
  echo "<pre>";
  var_dump($notas);
  echo "</pre>";

  class Pessoa
  {
    private string $nome;
  }

  $p = new Pessoa;
  var_dump($p);
  ?>
</body>

</html>