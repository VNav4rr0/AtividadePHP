<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <main>
                <div class="login">
                    <h1>Cadastro</h1>
                    <form name="cadastro" method="POST" action="login.php">
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
                </div>
        </main>
    </body>
</html