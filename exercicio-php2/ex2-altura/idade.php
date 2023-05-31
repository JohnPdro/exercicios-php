<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="backend.php" method="post">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" placeholder="Digite sua altura em cm">
        <input type="submit" value="Enviar">

    </form>

    <?php
    $idade = $_POST["idade"];
    $altura = $_POST["altura"];

    if ($idade == "" || $altura == "") {
        echo "Ops!! Está faltando alguma informação.";
    } else {
        echo "A sua idade é " . $idade . " e sua altura é " . $altura;
    }
    ?>

</body>

</html>