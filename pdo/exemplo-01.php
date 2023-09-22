<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root" ,"");
/* $conn = new PDO("mysqli:dbname=nome da tabela;host=nome do host","usuario","senha")*/
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin" );
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach ($results as $row) {
	foreach ($row as $key => $value) {
	echo "<strong>".$key."</strong>".$value."<br>";
	}
	echo"========================================<br>";
}
?>