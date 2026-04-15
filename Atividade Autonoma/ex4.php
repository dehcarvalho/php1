<?php
    $numero = $_POST["numero"];
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    echo "A soma de 1 até $numero é: $soma";
?>