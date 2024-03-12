<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);

$para = "msgabryelll22oliveira@gmail.com";
$assunto = "Coleta de dados - Inteliogia";

$corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $celular;

$cabeca = "From: teste@inteliogia.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo("E-mail enviado com sucesso!");
} else {
    echo("Houve um erro ao enviar o email: " . error_get_last()['message']);
}
?>
