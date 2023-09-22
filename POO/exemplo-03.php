<?php

class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
	$resultado = Documento::validarCPF($numero);
	//Quando usamos um novo número nós podemos testar ele colocando o nome da classe dentro do método set(no caso setNumero) e usamos dois pontos(::)para acessar métodos ESTÁTICOS! exemplo:
// Documento(nome da classe)::validarCPF($numero)<-nome do método estatico(static);
	//OBS:O método static pode ser usado fora da classe e ser usado aonde vc quiser chamando ele como no exemplo acima!
	if($resultado === false){
        //Caso o CPF não ser válido informamos o erro com throw new Exception("mensagem qualquer");.
		throw new Exception("CPF informado não é valido.",1);

	}

		$this->numero = $numero;

	}
	public static function validarCPF($cpf):bool
	{
		 if(empty($cpf)) {
        return false;
    }
 
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;

     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
	}
}
/*

$cpf = new Documento();
$cpf->setNumero("43786018006"); 
var_dump($cpf->getNumero());

?>
*/
/*bool=É um tipo de retorno de variavel que mostra se o valor é verdadeiro(true) ou falso(false) */
//
var_dump(Documento::validarCPF("43786018006"));
