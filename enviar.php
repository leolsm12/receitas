<?php
$destinatario = "email@destinatario.com";
$assunto = "Nova mensagem do formulário";
$mensagem = "Nome: " . $_POST['nome'] . "\r\n";
$mensagem .= "E-mail: " . $_POST['email'] . "\r\n";
$mensagem .= "cep: " . $_POST['cep'] . "\r\n";
$mensagem .= "rua: " . $_POST['rua'] . "\r\n";
$mensagem .= "complemento: " . $_POST['complemento'] . "\r\n";
$mensagem .= "cidade: " . $_POST['cidade'] . "\r\n";
$mensagem .= "uf: " . $_POST['uf'] . "\r\n";


$headers = "From: leotesteprojeto@gmail.com\r\n";
$headers .= "Reply-To: " . $_POST['email'] . "\r\n";

mail($destinatario, $assunto, $mensagem, $headers);
echo "Mensagem enviada com sucesso.";
?>
