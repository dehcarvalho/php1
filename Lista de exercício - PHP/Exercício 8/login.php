<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario == "isabela" && $senha == "1234"){
        echo"<h3>Acesso permitido.</h3>";
        echo"<p>Seja bem vinda, ".$usuario."!</p>";
    }else{
        echo"<h3>Erro: Acesso negado.</h3>";
        echo"<p>Informação incorreta.</p>";
    }
?>