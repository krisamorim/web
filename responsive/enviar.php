<?php
    $detino = " ";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["fone"];
    $mensagem = $_POST["mensagem"];

    $conteudo = "Nome: " . $nome . "\nE-mail: " . $email . "\nTelefône: " . $fone . "\nMensagem: " . $mensagem;

    mail($destino, "contato", $conteudo);
    header("Location:obrigado.html");
?>