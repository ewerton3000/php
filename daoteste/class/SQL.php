<?php
//Criando a classe com extensão PDO!
class Sql extends PDO{

private $conn;



public function __construct(){
//CRIANDO CONEXÃO COM O BANCO DE DADOS!
	$this->conn = new PDO("mysql:host=localhost;dbname=fabrica", "root" ,"");


}
private function setParams($stastement,$parameters=array()){
	foreach($parameters as $key => $value){

		$this->setParam($stastement,$key,$value);

	}

}
private function setParam($statement,$key,$value){

		$statement->bindParam($key,$value);

	}

public function query($rawQuery,$params=array()){

	$stmt =$this->conn->prepare($rawQuery);

	$this->setParams($stmt,$params);

	$stmt->execute();
	return $stmt;
}








public function select($rawQuery,$params=array()){
$stmt = $this->query($rawQuery,$params);
return $stmt->fetchALL(PDO::FETCH_ASSOC);
}
}
?>