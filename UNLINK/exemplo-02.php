<?php

//Se a pasta images existir não sera criado de novo!
if(!is_dir("images"))mkdir("images");

//scandir():É uma função para escanear os arquivo dentro da pasta escolhida exemplo:
//Foreach(scandir("nome da pasta")as $arquivo);
foreach(scandir("images")as $item){
	if(!in_array($item,array(".",".."))){
//Mostrando o caminho para a função unlink ser executada que é abrir a pasta images(/)e chegue no $item.
		unlink("images/".$item);
	}
}
echo"Os arquivos foram apagadas com sucesso!";
?>