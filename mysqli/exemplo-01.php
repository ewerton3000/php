<?php
//Conexão do php com o banco de dados 
//Abaixo vemos um exemplo de como podemos conectar o php com o banco de dados!
//$conn:Variavel usada para conectar com o banco de dados e  armazenar os dados dentro do mysql. 
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
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin ,desenha) VALUES(?, ?)");
//prepare:Funciona para preparar umc comando para ser enviado para o banco de dados.E dentro do parentese vc vai colocsr as informações como se estivesse dentro do banco de dados exemplo:
//$stmt = $conn->prepare("INSERT INTO Nome da tabela(nome das colunas,nome das colunas)VALUES(?,?)");
//OBS:As interrogações (?,?) serão trocadas por  valores do mysql.


$stmt->bind_param("ss" ,$login, $pass);
//bind_param():Usada para deixar os valores(?,?)em padrão com as letras iniciais com s=string d=double i=int etc.....
$login = "user";
$pass = "12345";
//Aqui vc pode inserir informações para dentro da tabela selecionada do banco de dados com o $login = ""; e $pass = "" ; por causa do statement.
/*exemplo:
$login ="Junior" <- deslogin;
$pass = "788" <- desenha;
*/
$login ="root";
$pass ="!@#$";

$stmt->execute();

?>
