<?php
//Chegou aqui = Use o futuramente para testes


require_once("funcoes_validar_login.php");
$login_usuario = $_POST['login'];//Usando o name do formulario do arquivo login chamado 'login'
$senha_usuario = $_POST['senha'];//Usando o name do formulario do arquivo login chamado 'senha'


$usuario_validado = valida_login($login_usuario , $senha_usuario);//Aqui mostrará o resultado da função do arquivo funcoes_validar_login.php se o login e senha estão identicos ao da função

if($usuario_validado){
	echo "Acesso Liberado";


}
else{
	echo"Acesso Negado";
}
?>