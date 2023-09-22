<?php
//Criando o header com o tipo de imagem
header("content-type:image/jpeg");

//criando uma variavel para armazenar a imagem
$file ="wallpaper.jpg";

//Criando uma variavel para a largura da imagem
$new_width = 256;

//Criando uma variavel para a altura da imagem
$new_height = 256;
//este codigo abaixo mostra se a altura de largura estão de acordo com a tela no array executado na tela
//var_dump(getimagesize($file));
$data = (getimagesize($file));

//Colocando a largura na posição 0
$width = $data[0];

//Colocando a altura na ´posição 1
$height = $data[1];


//Usando o list para coloca-los na posição certa(no caso da mesma de cima com a numeração do array)

list($old_width,$old_height)=getimagesize($file);

//imagecreatetruecolor():Nesta função vc pode usar uma paleta de 16 milhões de cores e tudo funciona mt bem
$new_image = imagecreatetruecolor($new_width,$new_height);

//Criando um padrão da imagem com dimensões antigas($old_width e $old_height)

//imagecreatefromjpeg():Esta função cria uma imagem a partir do arquivo($file no caso) do tipo jpeg e tem outras do tipo gif,png,etc...
$old_image = imagecreatefromjpeg($file);


//imagecopyresampled():É uma função que cria uma thumbmail que diminui o tamanho da imagem

//explicação dos parametros
//dst_image:Uma nova imagem ou uma imagem destino
//src_image:Selecionar a imagem de origem
//dst_x:Posição do eixo X da imagem destino($new_image) de 0 a 255
//dst_y:Posição do eixo Y da imagem destino($new_image)de 0 a 255
//src_x: Posição do eixo X da imagem de origem($old_image)de 0 a 255
//src_y:Posição do eixo Y da imagem de origem($old_image)de 0 a 255
//dst_w:Largura da imagem destino ($new_image)
//dst_h:Altura da imagem destino ($new_image)

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width,$new_height, $old_width, $old_height);

//Criando a imagem na memoria para ser executada 
imagejpeg($new_image);

//Apagando a imagem da memoria para finalizar o processo
imagedestroy($old_image);
imagedestroy($new_image);

?>