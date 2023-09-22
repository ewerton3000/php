<form method="POST" enctype="multipart/form-data">
	<!--<input type="file" name="fileUpload"> : O a tag input  abaixo mostra um botão ´escolher um arquivo para enviar para a pasta upload-->
	<input type="file" name="fileUpload">

     <!--<button type="submit">Send</button> : A tag button com o tipo(type)submit(enviar) serve para criar um botão na tela para enviar ação escolhida que neste caso é enviar o arquivo!-->
	<button type="submit">Send</button>


</form>
<?php
//enctype="multipart/form-data":Ele é um metodo que permite um tipo de informação que vc envia e enviará para o php em formato binário!

//A condicional pede um metodo(method)POST do html!
if($_SERVER["REQUEST_METHOD"]==="POST"){
//$_FILES:É um array super global que serve para tratar arquivos enviados via upload(no caminho do upload o rquivo vai para uma pasta temporária que joga para a pasta destino de um email como exemplo e dessa pasta temporária armazena os pedaços do arquivo principalmente com arquivos grandes e os envia ao seu destino!)
	
//Guardando o arquivo na variavel $file com o $_FILES["nome do input"] do html(<input type="file" name="NOME DO INPUT">)
	$file = $_FILES["fileUpload"];

//Condição se o arquivo existir
	if($file["error"]){
		//throw new Execption():É uma função que permite gerar uma nova execeção,ou seja force um erro dentro do php como se fosse um erro de sistema!exemplo abaixo
		throw new Exception("Error:".$file["error"]);
	}
	//Criando uma variavel com o "nome do diretório"!
	$dirUploads ="uploads";

	//Condição se o meu diretório($dirUplaods) não foi criado
	if(!is_dir($dirUploads)){
		//Criando a pasta 
		mkdir($dirUploads);
	}
	//Condição para saber se o upload aconteceu ou não

	//move_upload_file : É a uma função que faz o upload que move o arquivo para o servidor temporário e joga ao seu destino !OBS:Tenha certeza de que a pasta que vc vai mandar o arquivo tenha permissão necessária 
	if(move_uploaded_file($file["tmp_name"],$dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
		echo"Upload realizado com sucesso !";
	}
	else{
		throw new Exception("Não foi possivel realizar o upload.");
	}
}
?>