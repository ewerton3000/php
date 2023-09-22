<?php

require_once("config.php");
$sql = new Sql();
$root = new Usuario();

$root->loadbyId(1);
echo $root;

//echo $root;

//Usando a instancia da função static e chamando a função getList
//$lista = Usuario::getList();
?>