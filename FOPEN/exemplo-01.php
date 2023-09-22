<?php


//fopen:É uma função que pode criar alterar e excluir os arquivos,vc pode apontar o caminho ainde a ção será feita.
//O segundo parametro tem varias opções como ww,w+(no caso w+ ele substitui os dados inseridos e  o a+ ele adiciona sem excluir outras informações vc pode ver mais opções em www.php.net (procure FOPEN))
$file = fopen("log.txt","a+");

//fwrite():É uma função para inserir informações dentro  da variavel escolhida com dois parametro. Exemplo:($variavel,"Bem vindo eu sou seu arquivo") e se vc abrir o arquivo vc verá a informação criada dentro do arquivo;
//Para pular linha no texto inserido vc usa "\n" e pra retornar linha \r
fwrite($file,date("Y-m-d H:i:s")."\r,\n");


//fclose():Esta função fecha a ação do fwrite
fclose($file);

//Criando uma mensagem positiva do arquivo criado!
echo"Arquivo criado com sucesso";

?>