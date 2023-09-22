<?php
$conn = new mysqli("localhost","root","" ,"test");
if($conn->connect_error){
	echo "Error:".$conn->connect_error;
	exit;
}
else{
	echo"Conectado ao banco de dados e informações inseridas!";
}
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin ,dessenha) VALUES (?, ?) ");
$stmt->bind_param("ss",$login,$pass);
$login = "user";
$pass ="12345";

$stmt->execute();
?>