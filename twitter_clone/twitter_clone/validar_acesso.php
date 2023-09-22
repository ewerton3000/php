<?php

//Usando uma sessão para acesso do usuário OBS:este comando deve estar antes de um comando de saída como echo!
session_start();

require_once('db.class.php');
//Requerimento do arquivo db.class.php para instânciar a classe deste arquivo

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);//Descriptografando a senha criptografada co ma função md5

/* //Para testar se o post está sendo feito com sucesso
echo $usuario;
echo"<br/>";
echo $senha;
*/

//Se o usuario e a senha forem identicos  aos que estão registrados no SQL

$sql = "SELECT id,usuario,email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";


$objDb = new db();//Instânciando a classe db
$link = $objDb->conecta_mysql();//Puxando a função conecta_mysql() da classe instanciada db

$resultado_id = mysqli_query($link,$sql);//Executando a consulta e a query 


//Se o usuario e a senha forem iguais 
if ($resultado_id) {
   $dados_usuario = mysqli_fetch_array($resultado_id);//Mostrando os dados do SQL em formatdo de array com a função mysqli_fetch_array

//var_dump($dados_usuario); //Usando o var dump para ver o array

//Se o usuario e senha existir dentro do SQL
if (isset($dados_usuario['usuario'])) {
 	//echo'usuário existe';
   
//Criando uma varivavel para a sessão criada com parametro e recebendo o $dados_usuarios
	$_SESSION['id_usuario'] = $dados_usuario['id'];
	$_SESSION['usuario'] = $dados_usuario['usuario'];
	$_SESSION['email'] = $dados_usuario['email'];

   //Redirecionando para uma página com a função header
   header('Location: home.php');

}
//senão
else{
	//redirecionando para a index.php e usando um parâmetro 1 via get
	header('Location: index.php?erro=1');
} 
}

else{
	echo'Erro na execução da consulta , favor entrar em contato com o admin do site';
}
/*
$dados_usuario = mysqli_fetch_array($resultado_id);//Mostrando os dados do SQL em formatdo de array com a função mysqli_fetch_array

var_dump($dados_usuario); //Usando o var dump para ver o arrayy 
*/
?>
