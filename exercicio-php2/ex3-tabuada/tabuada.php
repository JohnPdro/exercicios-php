<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Digite um número</label>
        <input type="number" name="numero" id="numero">
        <button type="submit">Ver tabuada</button>
    </form>
    <?php
        $numero = $_POST["numero"];

        for($cont = 0; $cont <= 10; $cont ++){
            echo $numero . " X " . $cont . " = " . $numero * $cont . "<br>";
        }
        
    ?>
</body>
</html>