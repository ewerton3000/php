<?php
$filename = "logo.png";

//file_get_contents():É uma função que le o arquivo e mostra todos os dados dele como o fopen mas mais detalhado como file size(tamanho do arquivo em bites) e faz tbm o fclose.  
$base64 = base64_encode(file_get_contents($filename));

//new finfo É uma instancia  que mostra o tipo de arquivo que está sendo utilizado no codigo e o FILEINFO_MIME_TYPE é uma constante que mostrará o tipo de arquivo! 
$fileinfo = new finfo(FILEINFO_MIME_TYPE);


//armazenando as informações do arquivo em uma variavel!
$mimetype = $fileinfo->file($filename);

//Executa o arquivo na tela 
//Com o codigo aleatório na tela de ctrl+A e ctrl+C jogue-o na barra de endereço e a imagem sera mostrada para vc 
//echo"data:image/png;base64,".$base64;


$base64encode = "data:".$mimetype.";base64,".$base64;
//mostrando a execução abaixo com html
?>


<a href="<?=$base64encode?>"target="_blank">link para imagem</a>
<img src="<?=$base64encode?>">