<?php
    include("conexao.php");

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];

    $stmt = $pdo->prepare("

        insert into tbaluno values(
            null,
            '$nome',
            '$email',
            '$senha'
        )
    ");

    $stmt -> execute();

    header("location:login.php");
?>