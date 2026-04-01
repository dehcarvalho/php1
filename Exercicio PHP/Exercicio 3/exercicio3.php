<?php
//1. converter para °F
$temp = $_POST["temp"];

$conversao = ($temp * 1.8 + 32);

  echo "A Conversâo é: $conversao <br>";
?>