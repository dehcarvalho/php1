<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(!empty($nome)&& !empty($idade) && !empty($email) && !empty($senha)){
        echo"<h2>Cadastro realizado com sucesso!</h2>";
        echo"<p>Nome cadastrado: ".$nome."</p>";
        echo"<p>Idade cadastrado: ".$idade."</p>";
        echo"<p>E-mail cadastrado: ".$email."</p>";
    }else{
        echo"<p>Erro:Por favor, preencha todos os campos.</p>";
    }
?>