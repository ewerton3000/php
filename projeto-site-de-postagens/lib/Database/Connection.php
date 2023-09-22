<?php
//Método abstrato
abstract class Connection{

	private static $conn;

	public static function getConn(){

         //Se o $conn for igual  a null
		if(self::$conn == null){
		self::$conn = new PDO('mysql: host=localhost; dbname=serie-criando-site;','root','');

		}

		return self::$conn;
	}
}
//self é um atributo estático que só funciona em métodos estáticos 
?>