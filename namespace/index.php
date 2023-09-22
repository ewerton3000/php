<?php
require_once("config.php");

use Cliente\Cadastro;
//Neste caso usamos o use para puxarmos as informações que estão na pasta Cliente e no arquivo Cadastro.php onde tem uma classe Cadastro.
//use


$cad = new Cadastro();//Essa instancia já está puxando da pasta(diretório) raiz     (está classe muda para a pasta cliente por causa do use).

//Lembrando que esse set serão puxados da classe Cadastro do arquivo
$cad->setNome("Djama Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");
//echo $cad;
$cad->registrarVenda();


?>