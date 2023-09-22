<?php
class Veiculo{
	//public , private e protected
/*
	public $placa; É uma variavel que pode ter o valor mostrado em todas as classes(mãe ,filha)
	private $cor; ELe é um tipo de variavel que não é mostrada e so pode ser alterado dentro da propria classe 
	protected $tipo; Ele é parecido com o private só que ele permite ter o valor da variavel modificado dentro das classes filhas 
	*/
	private $placa;
	private $cor;
	protected $tipo='Caminhonete';

	//Utillizando um método publico puxando atributo private
	public function setPlaca($parametro_placa){
		//Validação das placa
		$this->placa = $parametro_placa;
	}
    
    public function getPlaca(){
    	return $this->placa;//O return mostra um atributo private
    }

}

class Carro extends Veiculo{
	public function exibirTipo(){
		echo $this->tipo;
	}
}

$veiculo = new Veiculo();
$veiculo->setPlaca('JAM2363');
echo $veiculo->getPlaca();
echo"<br>";
$carro = new Carro();
$carro->exibirTipo();
//$veiculo->placa = 'JAM3636';//Aqui vc acessa a variavel da classe diretamente pelo -> como o $this com os métodos e inserir o nome string
//$veiculo->cor ='azul';
//$veiculo->tipo ='Caminhonete';
//echo $veiculo->tipo;
?>