<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Media aluno</title>
</head>
<body>
  <form action="" method="post">
    <label for="nota1">Nota em Português:</label>
    <input type="number" name="nota1" id="nota1">
    <label for="nota2">Nota em Matemática:</label>
    <input type="number" name="nota2" id="nota2">
    <label for="nota3">Nota em Artes:</label>
    <input type="number" name="nota3" id="nota3">
    <button type="submit">Calcular media</button>
  </form>

  <?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $soma = $nota1 + $nota2 + $nota3;
    echo $soma / 3;
  ?>
</body>
</html>