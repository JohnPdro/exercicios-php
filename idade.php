<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Você é maior de idade?</h1>
<form action="">
    
        <input type="number" nome="idade">
        <button type="submit" name="verificar">Verificar</button>
</form>

    <?php
        $idade = $_GET["idade"]; 
        if ($idade >= 18) {
            echo "Você é de maior";
        } else {
            echo "Você é de menor";
        }

    ?>

</body>

</html>