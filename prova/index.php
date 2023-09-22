<?php
require_once("config.php");
$sql = new Sql();
$root = new Curso();

$root->loadBYId(1);
echo $root;


?>