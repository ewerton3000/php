<?php
//try:Significa tentar , ele irá tentar executar o código, caso não ocorra nenhum erro, o programa seguirá o seu fluxo normal. Porém, caso aconteça algum erro, ele passa a ser tratado como uma exceção
try {
	//throw new Execption:Gera uma nova exceção!
	//Exemplo: throw new Exception("Descrição ou aviso de um erro",codigo do erro = 100);
//Os códigos são bons para vc  numerar os erros e saber o que fazer com erro no sistema de sua empresa	
  throw new Exception("Houve um erro.",  400);
}
//catch:Ele ira tratar o erro ou exceção do try

//Executando o catch e armazenando o Exception dentro da variavel $e
catch(Exception $e){

//Crinado um echo com json_encode para mostrar na tela em array! 
  echo json_encode(array(
  	"message"=>$e->getMessage(),//Pegando a mensagem de erro da exceção
    "line"=>$e->getLine(),//Mostrando a linha do erro da exceção
    "file"=>$e->getFile(),//Mostrando o arquivo que ocorreu o erro
    "code"=>$e->getCode()//Mostrando o codigo do erro

    //A ultima linha do catch sempre será sem virgula 
));

}

?>