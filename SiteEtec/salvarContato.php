<?php
    include("conexao.php");

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $mensagem = $_POST['txMensagem'];

    $stmt = $pdo->prepare("
        insert into tbconato values(
            null,
            '$nome',
            '$email',
            '$assunto',
            '$mensagem'
        )
    ");

    $stmt -> execute();

    header("location:contato.php");
?>