<?php
  $numero = $_POST["numero"];

  for ($i = 0; $i <= 10; $i++){
    echo $numero . " X " . $i . " = " . $numero * $i . "<br>";
  }
  ?>