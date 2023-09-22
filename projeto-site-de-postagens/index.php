<?php

//Fazendo a requisição da classe pelo require_once

require_once'app/Core/Core.php';
require_once'lib/Database/Connection.php';
require_once'app/Controller/HomeController.php';
require_once'app/Controller/ErroController.php';
require_once'app/Controller/PostController.php';
require_once'app/Controller/SobreController.php';
require_once'app/Controller/AdminController.php';
require_once'app/Model/Postagem.php';
require_once'vendor/autoload.php';
require_once'app/Model/Comentario.php';

//carregando a estrutura do html
$template = file_get_contents('app/Template/estrutura.html');


ob_start();//Inicio de execução
//Criando a classe  Core
$core = new Core;
$core->start($_GET);

$saida  = ob_get_contents();
ob_end_clean();//Fim da execução

$tplPronto=str_replace('{{area_dinamica}}', $saida, $template);

echo $tplPronto;

//str_replace(conteudo que será substituido, conteudo que vai fica r no lugar, TPL ou arquivo )








/*DICA:Com o Composer instalado e estando disponível para ser chamado a partir de qualquer local do sistema de arquivos, basta usar o comando composer init para gerar o composer.json 

O diretório vendor e o arquivo autoload.php são gerados/atualizados com a instalação de pacotes.

Bom, dessa forma não é necessário baixar o .phar e  executar o comando de instalação.*/

?>