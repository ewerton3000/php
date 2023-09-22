<?php 
//Na função imagecreate vc pode colocar o link da pasta da imagem escolhida ou arrastala para colocar apenas o nome do arquivo
$image = imagecreatefromjpeg("certificado.jpg");

//colocando a cor da letra do título de preto no RBG
$titlecolor = imagecolorallocate($image, 0, 0, 0);

//usando a cor cinza no RGB
$gray = imagecolorallocate($image, 100, 100, 100);

//uma dica caso vc queira deixar a sua cor mais escura aproxime mais do 0 ou se quiser deixar mais claro deixe perto do 255

//Escrevendo na imagem e Colocando o titulo

imagestring($image, 5, 450, 150, "CERTIFICADO", $titlecolor);
//Mudando a fonte e colocando o nome da pessoa
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titlecolor);
//Colocando a data de conclusão com a função date
imagestring($image, 3, 440, 370, utf8_decode("Concluido em:".date("d/m/Y")), $titlecolor);

//Abrindo a execução da imagem
header("Content-type: image/jpeg");


//Na função imagejpg,gif.... vc pode usar um segundo parametro para gerar um arquivo dentro da pasta do codigo de origem(no caso deste é o exemplo-02.php)

//Criando um segundo  parametro para gerar a imagem como arquivo jpg dentro da pasta GD colocando nome data,o tipo de imagem e de 0 100 na qualidade da imagem
imagejpeg($image,"certificado-".date("Y-m-d").".jpg",10);


//Fecha a sessão para liberar a locação de memoria
imagedestroy($image);
 ?>