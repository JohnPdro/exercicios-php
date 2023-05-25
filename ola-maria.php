<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
          $servidor = "localhost";
          $usuario_bd = "root";
          $senha_usuario = "";
          $banco_dados = "tarefas";

          $conexao = mysqli_connect($servidor, $usuario_bd, $senha_usuario, $banco_dados);


        $nome = 'Maria';
        echo "Olá, ". $nome . "!"; 
    ?>    

</body>
</html>