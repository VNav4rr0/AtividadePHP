<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <main>
                <div class="login">
                    <h1>Login</h1>
                    <form name="cadastro" method="POST" action="dadoCadastro.php">
                        <label for="email">Email:</label>
                        <br>
                        <input type="email" name="email" id="email" required> 
                        <br>
                        <label for="senha">Senha:</label>
                        <br>
                        <input type="password" name="senha" id="senha" required>
                        <br>
                        <input class="botao" type="submit" value="Cadastrar" id="cadastrar">
                    </form>
                    <a href="index.php">Crie já</a>
                </div>
        </main>
    </body>
</html
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
