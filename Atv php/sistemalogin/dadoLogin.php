<?php
if(isset($Email) && isset($senha)){
    $arquivo = "dados.txt";
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "****Você entrou na sua conta****" . "\n");
}else {
    $arquivo = "dados.txt";
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "****Algo deu de errado verifique os dados****" . "\n");
}
?>
