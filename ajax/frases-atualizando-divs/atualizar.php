<?php

//Incluindo arquivo de conexão
require_once('../config/conn.php');

//Selecionado uma frase aleatória
$stmt = $pdo->prepare('SELECT * FROM frases ORDER BY RAND() LIMIT 1');

//Se selecionado com sucesso
if($stmt->execute())
{

	//Armazenando frase
	$frase = $stmt->fetchObject();


	//Retornando a frase em formato JSON
	echo json_encode($frase);
}
?>