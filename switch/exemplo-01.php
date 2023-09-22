<?php
//A função abaixo mostra o dia que voce está executando esse programa exemplo:1-segunda 2- terça feira 3-quarta feira 4-quinta feira 5-sexta feira 6-sabado 0-domingo 
$diadasemana =date("w");
echo"$diadasemana";
//switch:É uma condição de caso de um resultado usando switch($frutas) parenteses,{}chaves  e exemplo:case 1 echo"maçã"; break; case 2 echo"banana"; break; ,caso voce não use o break depois do caso todos os casos serão mostrados  e o default para mostrar um resultado um numero de case(semelhante ao else)exemplo:default: echo"sem escolha!";break;
echo"<br>";
switch($diadasemana){
	case 0:
	echo"domingo";
	break;
	case 1:
	echo"segunda feira";
	break;
	case 2:
	echo"terça feira";
	break;
	case 3:
	echo"quarta feira";
	break;
	case 4:
	echo"quinta feira";
	break;
	case 5:
	echo"sexta feira!!";
	break;
	case 6:
	echo"sabado!!!";
	break;
	default:
	echo"data invalida!";
	break;
	
}
?>