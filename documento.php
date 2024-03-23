<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? addslashes($_POST['nome']) : '';
    $email = isset($_POST['email']) ? addslashes($_POST['email']) : '';
    $celular = isset($_POST['celular']) ? addslashes($_POST['celular']) : '';

    if (!empty($nome) && !empty($email) && !empty($celular)) {
        $para = "msgabryelll22oliveira@gmail.com";
        $assunto = "Coleta de dados - Inteliogia";

        $corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $celular;

        $cabeca = "From: teste@inteliogia.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

        if (mail($para, $assunto, $corpo, $cabeca)) {
            echo("E-mail enviado com sucesso!");
        } else {
            echo("Houve um erro ao enviar o email: " . error_get_last()['message']);
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Acesso inválido ao script.";
}
?>
