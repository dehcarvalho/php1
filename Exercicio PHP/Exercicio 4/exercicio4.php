<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$imc = ($peso / ($altura * $altura));

if ($imc < 18.5) {
      echo "<b>Abaixo do peso!</b>";
  } elseif ($imc = 18.5 && $imc < 24.9) {
      echo "<b>Peso ideal!</b>";
  } elseif ($imc = 25.0 && $imc < 29.9) {
    echo "<b>Sobrepeso</b>";
  } elseif ($imc = 30.0 && $imc < 34.9){
    echo "<b>Obesidade Grau I</b>";
  } elseif ($imc = 35.0 && $imc < 39.9){
    echo "<b>Obesidade Grau II</b>";
  } elseif ($imc > 40.0){
    echo "<b>Obesidade Grau III</b>";
  }
?>