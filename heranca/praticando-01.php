<?php
 class Pai{
	public $dinheiro;
	public $fala;
	public $abraco;

	public function getDinheiro(){
		return $this->dinheiro;

	}
	public function getFala(){
	return $this->fala;	
	}
	public function getAbraço(){
	return $this->abraco;	
	}
	public function setDinheiro($d){
		$this->dinheiro =$d;
	}
	public function setFala($f){
		$this->fala =$f;
	}public function setAbraco($a){
		$this->abraco =$a;
	}

}

class Filha extends Pai{
public function Pegar(){
	return"A filha recebeu o dinheiro do Papai".parent::getDinheiro()."<br/>";
	
}
}
	
/*class Filho extends Pai{

public function Peguei(){
	return"O filho recebeu o dinheiro do Papai".parent::getDinheiro()."<br/>";
	
}

}

}*/
$pai = new Pai();
$pai->setDinheiro("pai tem 200");
$pai->setFala("Oi do Paizão");
$pai->setAbraco("Abraço do pai gostoso");
echo $pai->getDinheiro()."<br/>";
echo $pai->getFala()."<br/>";
echo $pai->getAbraço()."<br/>";

echo"------------------------------------"."<br/>";
$filha = new Filha();
echo $filha->Pegar();

echo"------------------------------------"."<br/>";
?>