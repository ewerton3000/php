<?php
class Calculadora{
	private $total;
	private $numero1;
	private $numero2;


    //método construtor para zerar os valores das variaveis
	function __construct(){
     $this->total = 0;
     $this->numero1 = 0;
     $this->numero2 = 0;
	}

	//getters e setters
	public function setNumero1($parametro_numero1){

		$this->numero1 = $parametro_numero1;
	}
	public function setNumero2($parametro_numero2){
		$this->numero2 = $parametro_numero2;
	}
    
    //Oparações
    public function somar(){

    	$this->total = $this->numero1 + $this->numero2;
    }

   
    public function subtrair(){

    	$this->total = $this->numero1 - $this->numero2;
    }

    public function multiplicar(){

    	$this->total = $this->numero1 * $this->numero2;
    }

    public function dividir(){

    	$this->total = $this->numero1 / $this->numero2;
    }


 //Retornando o valor da operação
    public function getTotal(){
    	return $this->total;
    }

}
?>