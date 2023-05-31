<?php
  $idade = $_POST["idade"];
  $altura = $_POST["altura"];

  if($idade == "" || $altura == ""){
    echo"Ops!! Está faltando alguma informação.";
  } else{
    echo"A sua idade é " . $idade . " e sua altura é " . $altura;
  }
?>
