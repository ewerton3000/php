<?php
//Criando uma interface com nome de casa!
interface casa{
	//Criando as funções publicas com dois parametros!
	//É posssivel criar quantos parametros vc quiser como na função piso abaixo! 
	public function piso($piso,$cm,$c,$d);
	public function parede($parede,$m);
	public function teto($teto,$tinta);
	public function janela($janela);

}
//Criando uma classe e implementando ela com a interface!

class Ap implements casa{
	//Puxando as funções da interface para a classe e colocando as informações de saida para o navegador!(OBS:se vc colocar o nome da função da classe diferente da interface o sistema não irá conhecer e será apontado como erro e isso vale tbm para os parametros! )

	public function piso($piso,$cm,$c,$d)
	{
		echo"Chão com pisos de".$piso." na média de "  .$cm.  "  centimetros com  ".$c." e ".$d."! <br>";

	}
	public function parede($parede,$m)
	{
		echo"A casa possui".$parede." nos quartos e elas tem " .$m. "  metros na sala! <br>";
	}
	public function teto($teto,$tinta)
	{
		echo"O teto tem massa corrida com  ".$teto.",sua tinta é  ".$tinta." e com sua estrutura está estavel! <br>";
	}
	public function janela($janela)
	{
		echo"As janelas são de vidro de ".$janela." sem deixar o som passar por ela!";
	}
}
//Instanciando a classe para um objeto($casa)!
$casa = new Ap();
//Puxando as informações das funções da classe e inserindo dados nos parametros com as usas ordens respectivas! Exemplo: $casa->piso($piso,$cm,$c,$d); 
$casa->piso(" Azulejo",5,"brilho","beleza");
$casa->parede(" 3 paredes", 5);
$casa->teto("cimento","azul");
$casa->janela("Acustica");



?>