<?php
require_once("conn_bd.php");

$login = $_GET['login'];

$stmt = $conn -> prepare("DELETE FROM usuarios WHERE login = :LOGIN");

$stmt -> bindParam(":LOGIN",$login);

$stmt -> execute();

Header("Location:../usuarios.php");

?>