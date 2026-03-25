//Aula dia 
<?php

//1. Receber os dados enviados pelo formulário
$nome = $_POST["nome"];
$email = $_POST["email"];

//2. Verificar se os campos não estão vazios
if(!empty($nome)&&!empty($email)){
    //3. Processar e exibir o resultado
    echo"<h2>Cadastro realizado com sucesso!</h2>";
    echo"<p>Bem vindo(a), " .$nome . "!</p";
    echo"<p>Seu nome é: " .$email . "</p>";

} else {
    echo"<p>Erro: Por favor, preencha todos os campos.</p>";
    
}
?>

// Aula dia 18/03
<?php
  $nota1 = 7.5;
  $nota2 = 8.0;
  $media = ($nota1 + $nota2) / 2;

  echo "A média é: $media <br>";

  if ($media >= 6) {
      echo "<b>Aprovado!</b>";
  } else {
      echo "<b>Recuperação.</b>";
  }
?>

