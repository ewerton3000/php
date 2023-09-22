<?php
//VC pode errar a conexão abixo apenas com simbolos(como : ou = em lugares errados-> veja no exemplo-02.php da pasta pdo! ) ou nomes errados como(server:locahost123 ,server:dbphp7 "login ,"senha)
$conn = new PDO("sqlsrv:Database=dbphp7;server=LAPTOP-9H600M4N\SQL;ConnectionPooling=0;" , "sa" , "root");

$stmt = $conn->prepare ("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)");
//VALUES(:LOGIN, :PASSWORD)")=Este tipo de valor com Dois pontos : é ´para evitar que os Hackers entrem e vejam facilmente o banco de dados do seu site e isso aumenta a segurança do seu banco de dados!

$login="jose";
$password="1234567890";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam("PASSWORD",$password);
//bindParam() =Serve para ligar o valor atribuido ao banco de dados representando ele depois no php com $ exemplo:
//$stmt->bindParam(":Nome",$nome);
$stmt->execute();

//Informação com echo se executou com sucesso no banco de dados!
echo"Inserido com sucesso!";
?>