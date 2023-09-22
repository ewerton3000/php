<?php

$nome= "joão miguel";
//Strtoupper:É uma funçaõ que transforma uma string(palavras) da variavel em letras maiusculas exemplo abaixo.
//obs:letras com ~ ´(til=~ acento ´) ç etc.. não terão letras maiusculas.
$nome =  strtoupper($nome);

echo $nome;
//strtolower:è uma função que transforma uma string(palavras)da variavel em minusculas exemplo abaixo: 
$nome = strtolower($nome);
echo"<br>";
echo$nome;
echo"<br>";
//ucwords:É uma função que deixa a primeria letra maiuscula da sring e com nomes compostos como joão rangel sairão como João Rangel.
echo ucwords($nome);
echo"<br>";
//ucfrist:É uma função que deixa a primeira letra da palaavra em maiusculo da string exemplo abaixo.
echo ucfirst($nome);

?>
