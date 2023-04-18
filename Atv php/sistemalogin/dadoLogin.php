<?php
session_start();

$Email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';


if ($Email == $_SESSION['email'] && $senha == $_SESSION['senha']) {
	$_SESSION['email'] = $Email;
    echo "Login Bem-sucedido :)". '<br>' . $Email;
    $arquivo = "dados.txt";
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "Email:". "\n" . $Email ."\n");
    fwrite($arquivo, "Senha:". "\n" . $senha ."\n");
    fwrite($arquivo, "Login Bem-sucedido :) " . "\n");
    fclose($arquivo);
    
	
} else {
	echo "Nome de usuário ou senha incorretos - Login Malsucedido :(";
    $arquivo = "dados.txt";
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "Nome de usuário ou senha incorretos - Login Malsucedido :( "."\n");
    fclose($arquivo);
}
?>