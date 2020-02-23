<?php

require_once("conn_bd.php");

    $loginGet = $_GET['login'];

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $stmt = $conn -> prepare("UPDATE usuarios SET nome = :NOME, cpf = :CPF, login = :LOGIN, senha = :SENHA WHERE login = :LOGINGET");
    $stmt -> bindParam(":NOME", $nome);
    $stmt -> bindParam(":CPF", $cpf);
    $stmt -> bindParam(":LOGIN", $login);
    $stmt -> bindParam(":SENHA", $senha);
    $stmt -> bindParam(":LOGINGET", $loginGet);

    $stmt -> execute();

    header("Location: ../usuarios.php")

?>