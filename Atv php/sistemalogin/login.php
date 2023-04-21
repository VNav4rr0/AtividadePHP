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
                    <form name="cadastro" method="POST" action="resultado.php">
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
    if(isset($_POST['email']) && (isset($_POST['senha']))){
        $arquivo = fopen("dados.txt", "a");
        fwrite($arquivo, 'Email: ' . $_POST['email'] . "\n");
        fwrite($arquivo, 'Senha: ' . $_POST['senha'] . "\n");
        fwrite($arquivo, '' . "\n");
        fclose($arquivo);
    }

    function verificaDados($emailLogin, $senhaLogin){
        $arquivo = 'dados.txt'; //Caminho do arquivo txt
        if(file_exists($arquivo)){
            $arq = fopen($arquivo , 'r');

            $texto = fread($arq , filesize($arquivo));

            if(isset($emailLogin) && isset($senhaLogin)){
                if(str_contains($texto , $emailLogin) && str_contains($texto , $senhaLogin)){
                    echo $_POST['email'] . '<script>✔(logado com sucesso)✔</script>';  
                }else{

                    echo '<script>alert("Usuário não encontrado. Tente novamente.")</script>';
                }
            }else{
                echo '<script>alert("Email não cadastrado. Cadastre-se")</script>';
            }
        }else{
          
            echo '<script>alert("Registro inexistente")</script>';
        }
    }
?>
