<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $media = ($nota1 + $nota2)/2;

    echo"<h2>Resultado média: ".$media."</h2>";
    if($media >=7){
        echo"<b>Aprovado!</b>";
    }elseif ($media >=5 && $media <7){
        echo"<b>Recuperação.</b>";
    }else{
        echo"<b>Reprovado.</b>";
    }
?>