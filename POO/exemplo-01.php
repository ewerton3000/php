<?php
class Pessoa{

	public $nome;//atributos
	public function falar(){//Método

		return "O meu nome é  ".$this->nome;
	}

}
$glaucio = new Pessoa();
$glaucio->nome ="Glaucio Daniel";
echo $glaucio->falar();

/*Class:É um conjunto que podemos reunir informações onde possui os atributos e métodos que irão armazena-las!*/
/*Public: É um encapsulamento que deixa o conteúdo da variavel visivel

Uma dica com atributos:Na variavel acima  $nome vc pode usar fora do método com o $ e dentro do método vc usa o $this->nome(o $this substitui o $) para chamar ela dentro do método ou seja:
Fora do método:public$variavel
Dentro do método:$this->variavel 
$this= É uma variavel interna do php ou seja ela serve para referenciar atributos e métodos dentro de outros métodos !*/
?>