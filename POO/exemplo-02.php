<?php
class Carro{
	//atributos
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){//método
		/*Aqui vc puxa o atributo modelo para dentro do método*/

		return $this->modelo;	
	}
	public function setModelo($modelo){
		/*Neste caso abaixo a variavel(atributo) $modelo está sendo puxada pelo $this nisso ela só vai aparecer dentro deste método !*/
		$this->modelo =$modelo;
	}
	public function getMotor():float{
		return $this->motor;

	}
	public function setMotor($motor){
		$this->motor = $motor;

	}
	public function getAno():int{
		return $this->ano;
	}
	public function setAno($ano){
		$this->ano = $ano;
	}
	public function exibir(){
		return array(
			/*Mostra as informações do motor modelo e ano em um array dentro de um método!
			Exemplo:
			"nome"=>this->getNome(),
			"aula"=>$this->getAula()
			*/
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
);
	}
	}/*Fechando a classe*/
	$gol = new Carro();
	$gol->setModelo("Gol GT");
	$gol->setMotor("1.6");
	$gol->setAno("2017");

print_r($gol->exibir());
//Para exibir tudo em array! ;

/*private = É uma forma de não mostrar o conteúdo de um atributo!
Function get=Usada para pegar a informação de um atributo para dentro do método.
function set=Usada para selecionar ou mandar um valor do atributo para um método.

*/

?>