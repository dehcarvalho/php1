<?php
$nome = $_POST["nome"];

if(!empty($nome)){
    
    echo"<p>Bem vindo(a), " .$nome . "!</p";

} else {
    echo"<p>Erro: Por favor, preencha todos os campos.</p>";
    
}
?>