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
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" placeholder="Digite sua altura em cm">
        <input type="submit" value="Enviar">

        <?php
        if (isset($_GET["idade"])) {
            $idade = $_GET["idade"];
            $altura = $_GET["altura"];
        }  else{
            $idade = "";
            $altura = "";
        }
        echo "<br><br>";
        if($idade == "" || $altura == ""){
            echo "Está faltando alguma informação verifique e tente novamente";
        } else{
            echo "Sua idade é " . $idade . " e sua altura é " . $altura . " !";
        }

        // // $idade = $_GET["idade"];
        // $altura = $_GET["altura"];
        // echo (($idade && $altura)) ? "Você tem $idade e $altura" : "Está faltando alguma informação, tente novamente!"
        ?>

    </form>
</body>

</html>