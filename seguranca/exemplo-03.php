<?php
//Criando uma variavel para a informação
$pasta ="arquivos";]
//Criando uma variavel para armazenar a permissão da pasta
$permissão= "0775";

//Permissões de pasta:cada número vai dizer o tipo de permissão da pasta
//0=sem permissão,1=execução,2=gravação,3=execução e gravação,4=leitura,5=leitura e execução,6=leitura e gravação,7=leitura ,execução e gravação
//os mais comuns são do 5 pra frente!

//As permissões são usadas em centenas para cada tipo de usuario por exemplo a centena 775 significa o primeiro número é o Criador da pasta(como se fosse o administrador) que tem direitos de permissão 7 o segundo são um grupo de pessoas que tem permissão de número 7 e o ultimo são outros que tem permissão 5 e então assim dividimos em(775 7=administrador 7=grupos de pessoas e 5=outros e lembre-se  de que se tiver 4 números como 0564 ele só começa a contar do segudo número pra frente com a mesma ordem dita!

//condição se a pasta não foi criada crie uma
if(!is dir($pasta))mkdir($pasta,$permissão);
?>