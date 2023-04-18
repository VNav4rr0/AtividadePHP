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
                        <input type="email" name="email1" id="email" required> 
                        <br>
                        <label for="senha">Senha:</label>
                        <br>
                        <input type="password" name="senha1" id="senha" required>
                        <br>
                        <input class="botao" type="submit" value="Cadastrar" id="cadastrar">
                    </form>
                    <a href="index.php">Crie já</a>
                </div>
        </main>
    </body>
</html

<?php
$Email1 = isset($_POST['email1']) ? $_POST['email1'] : '';
$senha1 = isset($_POST['senha1']) ? $_POST['senha1'] : '';

if(isset($Email1) && isset($senha1)){
    $arquivo = "dados.txt";
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "****Você entrou na sua conta****" . "\n");
}else {
    $arquivo = "dados.txt";
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "****Algo deu de errado verifique os dados****" . "\n");
}
?>
