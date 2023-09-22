<?php
//Requerimento do arquivo config.php para conectar com o banco de dados!
require_once("config.php");

//Instanciando uma nova classe!
$sql = new Sql();


//Chamando as informaçoes da tabela tb_usuarios pela linha deslogin!
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Mostrar os dados em array com print_r();!
//print_r($usuarios);


$headers = array();

//Usando uma estrutura foreach para mostrar os dados em array

foreach ($usuarios[0] as $key => $value) {
	//empurrando os dados para array com array_push
	array_push($headers,ucfirst($key));
}
//print_r($headers);


//Nomeando o arquivo que será criado com FOPEN e usar o w+ para atualizar o arquivo.
$file = fopen("usuarios.csv","w+");

fwrite($file,implode(",", $headers)."\r\n");

//criando o foreach para criar linhas da tabela
//O foreach abaixo contem arrays que serão mostrados em linhas.
foreach ($usuarios as $row) {
	$data = array();


//O foreach de baixo serve nos campos!
foreach ($row as $key => $value) {
	array_push($data,$value);
}
//Fim do foreach de coluna!
fwrite($file,implode(",",$data)."\r\n");

}
//Puxando a variavel $data para mostrar dentro do implode

//Fim do Foreach de linha!
//echo implode():Mostra o array sem pareteses.exemplo abaixo!
//echo implode(",", $headers);
fclose($file);
?>