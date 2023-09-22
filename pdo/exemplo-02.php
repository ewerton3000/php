<?php
//conexão com o banco de dados do SQL server!
$conn = new PDO("sqlsrv:Database=dbphp7;server=LAPTOP-9H600M4N\SQL;ConnectionPooling=0;", "sa" ,"root");
/* $conn = new PDO("sqlsrv:Database:dbname=nome da tabela;host=nome do host","usuario","senha")
ConnectionPooling =O ConnectionPooling ele tem a função de atualizar o banco de dados em tempo real ou não exemplo:
ConnectionPooling = 0:Não atualiza em tempo real!
ConnectionPooling = 1:Atualiza em tempo real!*/
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