<?php

function valida_login($login, $senha){

	//Validar direto em um banco de dados("Como se tivesse consultando em um  banco de dados") 
	$login_bd = 'jamilton.damasceno';
	$senha_bd = '123';


//Validando o login com o if
	//Se $login for igual a $login_db e $senha == $senha_db
	if($login == $login_bd && $senha == $senha_bd){
     return true;

	}

	//senão (sem o else retorna false)

	return false;
}
?>