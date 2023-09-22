<?php
class Endereco{
private $logradouro;
private $numero;
private $cidade;

//método Construct:Também chamado de método mágico tem o mesmo objetivo dos métodos get e set e evita vc escrever mais . Classes que tem um método construtor, chamam o método a cada objeto recém criado, sendo apropriado para qualquer inicialização que o objeto necessite antes de ser utilizado.
//OBS:Mesmo assim os métodos get e set ainda podem ser utilizados com o construct!
/*Exemplo
public function __construct($a,  $b  ,$c){
	$this->atributo = $a;
	$this->atributo= $b;
	$this->atributo = $c;
}
*/
public function __construct($a,  $b  ,$c){
	$this->logradouro = $a;
	$this->numero= $b;
	$this->cidade = $c;

}
/*Método destruct=Destroi um atributo ou seja elimina as informações escolhidas da memoria da pagina exemplo:
public function __destuct(){
	var_dump("Vou ser apagado");
}
*/

public function __destruct(){
	///var_dump("DESTRUIR");
}
/*Método toString=É um metodo usado para mostrar a informações dos atributos e adicionar virgulas(,),traços(-) entre eles 
Exemplo:
public function __toString(){
	return $this->atributo." ,  ".$this->atributo." - ".$this->atributo;
}*/
public function __toString(){
	return $this->logradouro." ,  ".$this->numero." - ".$this->cidade;
}

}
$meuendereco = new Endereco("Rua Ademar Saraiva Leão","123","Santos");
//var_dump($meuendereco);
//unset($meuendereco);
echo $meuendereco;
?>
