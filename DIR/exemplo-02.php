<?php
//scandir:é uma função que permite escanear o diretório inteiro e mostrar os arquivos armazenados
$images = scandir("images");

//criando uma variavel para construir um array!
$data = array();

//var_dump($images);
//Usando a condição o foreach para pegar as imagens sem os pontos (".","..") que aparecem no var_dump
foreach ($images as $img) {
	//in_array:Uma função usada para achar o alvo escolhido que é $img($image) e transformar as informações em array e os pontos("." "..")serão negados é so ira atras de um arquivo real!
	if(!in_array($img, array(".",".."))){
		//Criando uma variavel $filename para procurar a pasta e o nome do arquivo "images" co mo DIRECTORY_SEPARATOR e a variavel usada no foreach!

		$filename= "images".DIRECTORY_SEPARATOR.$img;

		//pathinfo():Uma função usada para conseguir informações do arquivo
		$info = pathinfo($filename);
		//Visualizando o arquivo com o var_dump

		//var_dump($info);

        //filesize():É uma função para mostrar o tamanho do arquivo em bites e o size(que está em $info["size"] abaixo) aparecerá na tela com os numeros em bites!
		$info["size"] = filesize($filename);

		//filemtime():É uma função que  mostra a data do arquivo no caso abaixo é a data modificada!

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
         

         //mostrando a url(caminho) do arquivo:
		//No caso vc usa $info["url"] = "link da pasta(pegue como no exemplo abaixo)".$variavel(o nome da variavel que armazena as imagens)
		//Use o srt_replace() para acertar as barras que variam de OS pro outro e usando as aspas para trocar de uma para a outra!
        $info["url"] = "http://127.0.0.1/DIR/".str_replace("\\","/",$filename);

         //É uma função que puxa as informações e a transforam em array(ou empurrar os para virarem array)!
         array_push($data,$info);
	}
}

//Mostrar os arquivos em array
echo json_encode($data);
?>