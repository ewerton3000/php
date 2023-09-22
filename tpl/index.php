<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

// config
$config = array(

    "tpl_dir"       => "tpl/",//Direcionando a pasta de configuração dos templates
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );



// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Hcode" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template

//Encaminhado o nome do arquivo html( ele só procura os arquivos html) e não precisa dizer o nome completo exemplo:execute.html = execute
$tpl->draw("index");
?>