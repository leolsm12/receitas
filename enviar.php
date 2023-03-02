<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['cep'];
$mensagem = $_POST['rua'];
$mensagem = $_POST['n'];
$mensagem = $_POST['complemento'];
$mensagem = $_POST['cidade'];
$mensagem = $_POST['uf'];

// Define os detalhes do e-mail
$para = "leotesteprojeto@gmail.com";
$assunto = "Nova mensagem do site";
$mensagem = "Nome: ".$nome."\r\n";
$mensagem .= "E-mail: ".$email."\r\n";
$mensagem .= "CEP: ".$mensagem."\r\n";
$mensagem .= "RUA: ".$mensagem."\r\n";
$mensagem .= "Nº: ".$mensagem."\r\n";
$mensagem .= "complemento: ".$mensagem."\r\n";
$mensagem .= "cidade: ".$mensagem."\r\n";
$mensagem .= "uf: ".$mensagem."\r\n";


// Envia o e-mail
mail($para, $assunto, $mensagem);

// Redireciona para a página de agradecimento
header("Location: cadastro.html");
?>