<?php
session_start();

// Verifica se a sessão "votos" existe e inicializa com 0 se não existir
if (!isset($_SESSION['votos'])) {
    $_SESSION['votos'] = 0;
}

// Verifica se o formulário foi enviado e atualiza a contagem de votos
if (isset($_POST['opcao'])) {
    if ($_POST['opcao'] == 'verde') {
        $_SESSION['verde'] = isset($_SESSION['verde']) ? $_SESSION['verde'] + 1 : 1;
    } else if ($_POST['opcao'] == 'azul') {
        $_SESSION['azul'] = isset($_SESSION['azul']) ? $_SESSION['azul'] + 1 : 1;
    }
    $_SESSION['votos']++;
}

// Verifica se o formulário de zerar votos foi enviado e redefine as variáveis de sessão para 0
if (isset($_POST['zerar'])) {
    $_SESSION['votos'] = 0;
    $_SESSION['verde'] = 0;
    $_SESSION['azul'] = 0;
}

// Exibe o formulário enquanto não foram realizadas 5 votações
if ($_SESSION['votos'] < 5) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Votação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <form method="post">
		<div>Qual é a sua cor preferida?</div>
        <section>
        <input   type="radio" name="opcao" value="verde"> Verde<br>
		<input  type="radio" name="opcao" value="azul"> Azul<br><br>
        </section>
		<input class="dados" type="submit" name="submit" value="Votar">
	</form>
	<form method="post">
		<input class="dados" type="submit" name="zerar" value="Zerar votos">
	</form>
	<div>Votações realizadas: <?php echo $_SESSION['votos']; ?></div>
    </main>
</body>
</html>
<?php
} else { // Quando 5 votos foram realizados, exibe o resultado

    $verde = isset($_SESSION['verde']) ? $_SESSION['verde'] : 0;
    $azul = isset($_SESSION['azul']) ? $_SESSION['azul'] : 0;
    echo "<p>Resultado da votação:</p>";
    echo "<p>Verde: $verde voto(s)</p>";
    echo "<p>Azul: $azul voto(s)</p>";
    if ($verde > $azul) {
        echo "<p>Verde venceu!</p>";
    } elseif ($azul > $verde) {
        echo "<p>Azul venceu!</p>";
    } else {
        echo "<p>Empate!</p>";
    }
    
    // Remove a sessão "votos" para permitir que o usuário comece uma nova votação
    unset($_SESSION['votos']);
}
?>
