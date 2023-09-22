<?php
//O switch é uma codinção onde vc esolhe uma opção para ter um resultado,ele é como se fosse por igualdade nas escolha das opções e pode se usar uma variavel tbm

$opcao = 5;
switch ($opcao) {
 	case 1:
 		echo"primeiro case";
 		break;//quando a opção é escolhida o break freia a leitura do código para não mostrar as outras opções

 		case 2:
 		echo "segundo case";
 		break;


 		case 3:
 		echo "terceiro case";
 		break;


 	 //opcional serve como else
 	default:
 		echo"case default";
 		break;
 } 


 /*

switch (opção a ser escolhida) {
 	case 1:
 		echo"primeiro case";
 		break;

 		case 2:
 		echo "segundo case"
 		break;


 		case 3:
 		echo "terceiro case";
 		break;


 	
 	default:
 		echo"case dafault";
 		break;
 }  */


?>