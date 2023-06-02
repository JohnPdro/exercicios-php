<?php
  $numero = $_POST["numero"];

  if($numero % 2 == 0){
    header("location:par.php");
  } else{
    header("location:impar.php");
  }
?>