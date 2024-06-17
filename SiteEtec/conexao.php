<?php 
    $servidor="localhost";
    $banco="prjetec";
    $usuario="root";
    $senha="";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>