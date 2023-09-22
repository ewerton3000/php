<?php
//Abaixo o if vai mandar no tipo de condição 
//Se no conchete() der  true ele dará a primeira opção e se for false ele dará a segunda opção
/*if (false) {
	echo"sim, expressão é verdadeira";
	
}
else{
	echo"não, expressão não é verdadeira";

}
*/
//== igual

if (3 == 2) {
	echo"sim,2 é igual a 2";
	
}
else{
	echo"não, expressão é falsa";

}
echo"<br>";
echo"Condição identico = ";
//=== idêntico
if ('a' === 'a') {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição diferente = ";
if ('x' != 'y') {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição diferente com o sinal <> = ";
if (5 <> 6) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição não idêntico = ";
if (5 !== 6) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição número menor = ";
if (5 < 5) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição número maior = ";
if (7 > 6) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição número menor ou igual = ";
if (7 <= 6) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição número maior ou igual = ";
if (7 >= 6) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

//Operadores Lógicos

//&& ou AND Este operador lógico ele só retorna verdadeiro se as duas comparações forem verdadeiras

echo"<br>";
echo"Condição e(&& ou AND) = ";
if (5 <> 3 && 5 > 4) {
	echo"verdadeiro";
}
else{
	echo"falso";
}
echo"<br>";
echo"Condição (&& ou AND) = ";
if (10 <> 3 AND 7 > 4) {
	echo"verdadeiro";
}
else{
	echo"falso";
}

echo"<br>";
echo"Condição (|| ou OR) com 3 comparações = ";
if (2 == 2 && 3 == 3 && 5 <> 5) {
	echo"verdadeiro";
}
else{
	echo"falso";
}


// || ou OR -> Retorna verdadeiro se uma ou duas das expressões foram verdadeiras
echo"<br>";
echo"Condição (|| ou OR) = ";
if (10 == 3 || 7 == 4) {
	echo"verdadeiro";
}
else{
	echo"falso";
}



//XOR ->retorna verdadeiro apenas se 1 das expressões for verdadeira e este é a unica operação que duas comparações forem verdadeiras dará falso 
echo"<br>";

//Vai dar falso 
echo"Condição  XOR  com dois verdadeiros = ";
if (5 != 3 XOR 5 <> 4) {
	echo"verdadeiro";
}
else{
	echo"falso";
}
echo"<br>";

//Vai dar falso 
echo"Condição  XOR  com um verdadeiro= ";
if (5 == 3 XOR 'x' == 'x') {
	echo"verdadeiro";
}
else{
	echo"falso";
}

//! negação->É um operador que nega uma comparação se for verdadeiro = falso e se for falso = verdadeiro

echo"<br>";

//Vai dar falso 
echo"Condição  negação ! = ";
if (!(5 == 3)) {
	echo"verdadeiro";
}
else{
	echo"falso";
}
//() parentese

echo"<br>";
echo"COndição com () parentese = "
if ((2 == 2 && 3 == 3) || 5 <> 5) {
	echo "Verdadeiro";
}
else{
	echo"falso";
}
?>