<?php
$a=3;
$b=12;
$c=$a+$b;
try{
	

	throw new Exception("Soma errada", 4000);
	
}
catch(Exception $e){
echo json_encode(array(
"message"=>$e->getMessage(),//Pegando a mensagem de erro da exceção
    "line"=>$e->getLine(),//Mostrando a linha do erro da exceção
    "file"=>$e->getFile(),//Mostrando o arquivo que ocorreu o erro
    "code"=>$e->getCode()//Mostrando o codigo do erro

));
}
echo $c;
?>