<?php
    $idade = $_POST["idade"];

    if($idade >= 18){
        echo"<h2>Resultado</h2>";
        echo"<p>Maior de idade</p>";
    }else{
        echo"<h2>Resultado</h2>";
        echo"<p>Menor de idade</p>";
    }
?>