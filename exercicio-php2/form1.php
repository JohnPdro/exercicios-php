<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
        <input type="submit" value="Enviar">
        <?php

        if(isset($_GET["nome"])){
        $nome = $_GET["nome"];
        echo "Olá," . $nome . "!";
        } else{
            $nome = "";
        }

        ?>
    </form>

</body>

</html>