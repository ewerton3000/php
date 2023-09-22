<?php
/*A biblioteca de uma universidade deseja fazer 
um algoritmo que leia o nome do livro que 
será emprestado, o tipo de usuário (professor 
ou aluno) e possa imprimir um recibo 
conforme mostrado a seguir. Considerar que 
o professor tem 10 dias para devolver o livro 
o aluno somente 3 dias*/
$livro="O lobo mau";
$usuario="aluno";

if ($usuario =="professor") {
	echo"Código:84954<br>";
	Echo"O livro emprestado é :$livro <br>";
	echo "O $usuario tem 10 dias para entrega-lo!";
}
elseif($usuario=="aluno")  {
	echo"Código:98488498<br>";
	Echo"O livro emprestado é :$livro <br>" ;
	echo"O $usuario tem 3 dias para entrega-lo!";
}
else{
	echo "Obrigado e volte sempre!";
}
?>