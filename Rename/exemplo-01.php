<?php
$dir1 ="folder_01";
$dir2 ="folder_02";

//Se não for um diretório vai criar uma pasta chamada folder_01 ou folder_02
if(!is_dir($dir1))mkdir($dir1);
if(!is_dir($dir2))mkdir($dir2);

//Criando um nome para um arquivo na variavel
$filename = "read.txt";

//Se  não existir o arquivo dentro da pasta folder_01 com o mesmo nome
if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){
	//Criando o arquivo com fopen e usando o DIRECTORY_SEPARATOR para abrir a pasta e cria-lo com o nome escolhido com a variavel $filename e o $file terá todas as ações de uma vez.
	$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename,"w+");

	//Abrindo o arquivo para inserir informações de hora e data co, date() dentro do README.txt
	fwrite($file,date("Y-d-m H:i:s"));

    //Fechando o arquivo README.txt!
	fclose($file);
}
//rename()É uma função que move os arquivos  para qualquer pasta do seu computador tambem permite renomea-los na mesma pasta exemplo(link de origem,link de destino) abaixo a outro exemplo direto!
	rename($dir1.DIRECTORY_SEPARATOR.$filename,//origem
		$dir2.DIRECTORY_SEPARATOR.$filename,);//destino	;
echo"Arquivo criado com sucesso!";

?>