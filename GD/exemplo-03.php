<?php
//Array com os nomes e caminhos das Fontes

//Dependendo da versão e ambiente que esta sendo executada a biblioteca GD você precisa fornecer o caminho completo da fonte, pois quando o caminho não começa com "/" ou um separador de diretórios a própria biblioteca adiciona a extensão .ttf no caminho, fazendo com que a fonte não seja encontrada. 
//Eu resolvi o meu problema usando a constante superglobal "__DIR__" da seguinte forma:
$font = array("Bevan"=>__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR. "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",
"Playball"=>__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf");
 
$image = imagecreatefromjpeg("certificado.jpg");
 
$titleColor = imagecolorallocate($image, 0,0,0);
 
$grey = imagecolorallocate($image, 100,100,100);

//imagettftext():É uma função que tem varios parametros de redisionamento troca de fonte e entre outros
 
imagettftext ($image, 32,0,450,150, $titleColor, $font["Bevan"],"CERTIFICADO");
 
imagettftext($image, 32,0,450,350, $titleColor, $font["Playball"], "Divaney Aparecido");
 
imagestring($image,5,450,350, utf8_decode("Concluído em: ".date("d/m/Y")), $grey);
 
header("Content-type: image/jpg");
 
imagejpeg($image);
 
imagedestroy($image);

//Reparem no array $font[] na segunda linha do código como eu adicionei __DIR__.DIRECTORY_SEPARATOR. "caminho_da_fonte_de_vocês"

//Depois no lugar do caminho da fonte em imagettftext() eu usei apenas o array $font["Bevan"] e $font["PlayBall"]

//Não esqueçam de adicionar __DIR__.DIRECTORY_SEPARATOR. também antes da font Playball.
?>