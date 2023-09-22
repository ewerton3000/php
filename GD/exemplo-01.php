<?php
//GD:Graphic Desing  é uma biblioteca do php para criação de imagens e gerar imagens dinamicamente como informações de cliente,certificados,recibo e entre outros usando os eixos com X:horizontal e Y:vertical

//header("Content-Type:image/...."):É para iniciar o processo da imagem construida
header("Content-Type: image/png");

$image = imagecreate(256,256);


//imagecolorallocate:É uma função que vc controla a cor da imagem com RGB e escolhe o lugar onde as cores serão posicionada(eu acho rs) 
//Essa parte é a cor do quadrado do meio
$black =imagecolorallocate($image, 0, 0, 0);

//essa parte fara a cor da letra 
$red=imagecolorallocate($image, 255, 0, 0);


//imagestring(image, font, x, y, string, color):É uma função que vc controla as cores de texto da imagem no caso image:nome ou variavel da imagem,font:tipo e tamanho da fonte,x:linha horizontal da imagem,y:linha vertical da imagem,string:Aqui vc digita o que quiser na imagem,color:escolhe o tipo de cor escrevendo ela em inglês exemplo:blue,green,yellow,purple,violet
imagestring($image, 5, 60, 120, "Curso de php 7", $red);


//Uma função para converter a variavel em imagem no caso do GD
imagepng($image);

//Uma função para destruir a função ou seja o fim do da linha da conversão pq senão o arquivo fica pendurado na tela
imagemdestroy($imagem);
?>