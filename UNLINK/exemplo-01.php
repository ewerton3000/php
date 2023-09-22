<?php
$file = fopen("teste.txt","w+");

fclose($file);

//É uma função para apagar arquivos vc escolhe o nome do arquivo a ser excluido! 
unlink("teste.txt");

echo"Arquivo removido com sucesso!";
?>