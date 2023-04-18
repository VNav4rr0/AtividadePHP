<?php
session_start();

$Email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['email'] = $Email;
$_SESSION['senha'] = $senha;

header("Location: login.php");
exit();
?>