<?php

/* Salvar erros em /log/ */
error_reporting(E_ALL);
ini_set("display_errors", 0);
session_start();

$log = dirname(__DIR__) . '/log/' . date('Y-m-d') . '.txt';
ini_set('error_log', $log);
/* Fim salvar log */

// Criando a Conexão com o banco
$host = 'localhost:3306';
$login = 'admin';
//$senha = '9abfdbbbae05e081e119ab9f4e85cde9a1bd4ecd82f2b569';
$senha = 'O5m8rgW82KoRmPMN';
$db = 'nanotec';

$conn = new mysqli($host, $login, $senha, $db);
//echo $conn->connect_error;


?>
