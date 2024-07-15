<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['phone']);
    $mensagem = htmlspecialchars($_POST['message']);

    $to = 'du.claza@gmail.com';
    $subject = 'Novo contato do formulário';
    $message = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha no envio da mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
