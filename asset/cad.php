<?php

require_once("conn_bd.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$stmt = $conn -> prepare("INSERT INTO usuarios (nome,cpf,login,senha) VALUES (:NOME, :CPF, :LOGIN, :SENHA)");

$stmt -> bindParam(":NOME",$nome);
$stmt -> bindParam(":CPF",$cpf);
$stmt -> bindParam(":LOGIN",$login);
$stmt -> bindParam(":SENHA",$senha);

$stmt -> execute();

header("Location: ../usuarios.php");



?>