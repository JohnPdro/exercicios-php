<?php
  $numero = $_POST["numero"] ?? "";

  $arrayNumero = explode("," , $numero);

  $soma = array_sum($arrayNumero);

  echo "A soma de todos os valore é $soma";
?>