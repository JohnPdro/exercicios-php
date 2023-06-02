<?php
  $numeros = array(1, 2, 5, 9, 10);

  for($i = 0; $i < 5 ; $i++){
    $soma = $soma + $numeros[$i];
  }

  $media = $soma / 5;

  echo $media;
?>