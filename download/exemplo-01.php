<?php
//Criando um link de uma imagem do google dentro do navegador.
$link="https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
//file_get_contents():É uma função que busca o conteudo do arquivo copiando(ou download ) o arquivo de um servidor.
$content = file_get_contents($link);


/*executando com o var_dump a imagem q mostarrá tudo codificado!
var_dump($content); */

//parse_url():É uma função que interpreta os arquivos de ficam dentro de uma url ele identifica o tipo de arquivo e o mostra o conteudo (no caso da imagem só vai mostrar o link)
$parse =parse_url($link);

//basename(path):É uma função que mostra apenas o caminho(link) do arquivo escolhido!
//A variavel $basename vai obter o nome do arquivo:googlelogo_color_272x92dp.png
$basename = basename($parse["path"]);

//criando um arquivo com fopen

$file = fopen($basename, "w+");


fwrite($file,$content);

fclose($file);


?>
<!--criando um caminho pro arquivo em html-->
<!--As interrogações do php (<? ?>) pode ser usadas dentro do html mas elas tem representações diferentes como no caso abaixo o echo é um = ou seja para chamar o echo tem q usar(<?=$variavel?> para chamar uma variavel dentro do html-->
<img src="<?=$basename?>">