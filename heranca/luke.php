<?php
//herdando os atributos da classe Anakin.php!
require_once"Anakin.php";
class Luke implements Anakin{

}
$luke = new Luke();
$Luke->serJedi();//Sendo um Jedi
$luke->espada="verde";
$luke->força="O lado não escuro";

?>