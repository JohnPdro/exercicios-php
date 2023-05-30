<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario == "ratorato@esgoto.com" && $senha == 123){
        header("location:painel.php");
    }else {
        header("location:usuario-invalido.php");
    }
?>