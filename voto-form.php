<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direito a voto</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Digite sua idade:</label>
        <input type="number" name="idade">
        <input type="submit" value="Verificar">

    </form>

    <?php
        if(isset($_POST["idade"])){
        $idade = $_POST["idade"];

        if($idade < 16 ){
            echo"Você ainda não pode votar";
        } elseif($idade > 15 && $idade <18){
            echo"Voto opcional";
        }else{
            echo"Voto obrigatorio";
        }
    }
    ?>
</body>
</html>