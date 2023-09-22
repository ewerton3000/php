<?php
//Conexão do php com o banco de dados 
//Abaixo vemos um exemplo de como podemos conectar o php com o banco de dados!
//$conn:Variavel usada para conectar co mo banco de dados e  armazenar os dados dentro do mysql. 
$conn = new mysqli("Localhost","root", "","dbphp7");
//neste caso o esqueleto é:
//$conn = new mysqli("Localhost","root", "senha se tiver","Nome da Tabela mysql");

if($conn->connect_error){
	//Com a condição podemos verficar se o banco de dados está conectado ou não!
	echo "Error:".$conn->connect_error;
	exit;
}
else{
	echo"Banco de dados Conectado!!!";
}
$data = array();
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
while($row = $result->fetch_assoc()) {
	array_push($data , $row);
/*Usaremos o $result->fetch_assoc para mostrar as informações do banco de dados dentro da condicional while que enquanto mostrar os dados serão exibidos e m linhas(em rows=linhas).*/}
echo json_encode($data);
//Executando os dados em json_encoder para serem mostrados na tela!
?>
