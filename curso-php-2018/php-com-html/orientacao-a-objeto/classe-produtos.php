<?php
//Criando a classe Produtos
class Produtos{
var $produto;//atributo como  var(pode ser tbm como private ou public)

function setProduto($produtos){

$this->produto = $produtos;


}
function getProduto(){
	return $this->produto;
}
}

$sacola = new Produtos();

$sacola->setProduto('Maçã,Melão,Melancia,Uva,jabuticaba');

echo $sacola->getProduto();
?>