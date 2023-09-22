<?php

class Aluno{
	private $nome;
	private $email;
	private $data;
	private $idcurso;
	private $mat;
	public function getnome(){
		return $this->nome;
		
	}
	public function setnome($value){
    $this->nome = $value;
		
	}
	public function getemail(){
		return $this->email;
		
	}
	public function setemail($value){
		$this->email = $value;
		}
		public function getdata(){
		return $this->data;
		
	}
	public function setdata($value){
		$this->data = $value;
		}
		public function getidcurso(){
		return $this->idcurso;
		
	}
	public function setidcurso($value){
		$this->idcurso = $value;
		}
		public function getmat(){
		return $this->mat;
		
	}
	public function setmat($value){
		$this->mat = $value;
		}
		public function loadBYId($id){
			//Instanciando a classe Sql do arquivo Sql.php
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM aluno WHERE idcurso =:ID",array(
				":ID"=>$idcurso
			));
            
            //criando uma condição se a id for maior que 0 ela sera mostrada senão não exibirá
			if(count($results)> 0){
				
               $this->setData($results[0]);      
				
				
			}
		}
		public static function search($nome){
	$sql = new Sql();
	return $sql->select("SELECT * FROM aluno WHERE  LIKE :SEARCH ORDER BY idcurso",array(
		":SEARCH"=>"%".$idcurso."%"

	));

}
public function __tostring(){
	return json_encode(array(
     "id"=>$this->getidcurso(),
     "curso"=>$this->getcurso(),
     "descricao"=>$this->getDescricao(),
     "dtcriado"=>$this->getDTcriado()->format("d/m/Y H:i:s")
}
?>