<?php
Class Curso{
	private $curso;
	private $cargahoraria;
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
	
	//Criando gets e sets dos objetos com funções

	public function getcurso(){
		return $this->curso;

	}
	public function setcurso($value){
		$this->curso = $value;
		
	}
	public function getcargahoraria(){
		return $this->cargahoraria;
		
	}
	public function setcargahoraria($value){

		$this->cargahoraria = $value;
	}
	
		//criando uma função para puxar um usuario com a id
		public function loadBYId($idcurso){
			//Instanciando a classe Sql do arquivo Sql.php
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM curso WHERE nome =:ID",array(
				":ID"=>$idcurso
			));
            
            //criando uma condição se a id for maior que 0 ela sera mostrada senão não exibirá
			if(count($results)> 0){
				
               $this->setData($results[0]);      
				
				
			}
		}
		public static function search($idcurso){
	$sql = new Sql();
	return $sql->select("SELECT * FROM aluno WHERE  LIKE :SEARCH ORDER BY curso,cargahoraria",array(
		":SEARCH"=>"%".$idcurso."%"

	));
}


public function __tostring(){
	return json_encode(array(
     "idcurso"=>$this->getidcurso(),
     
     "curso"=>$this->getcurso(),
     "cargahoraria"=>$this->getcargahoraria()
));
}


}


		



?>