<?php

class Usuario{

	private$idusuario;
	private$deslogin;
	private$dessenha;
	private$desnome;
	private$dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}
	public function setIdusuario ($value){
		return $this->idusuario =$value;
	}

	public function getDeslogin (){
		return $this->deslogin;
	}

	public function  setDeslogin($value){
		return $this->deslogin = $value;
	}
	public function getDessenha (){
		return $this->dessenha;
	}
	public function setDessenha ($value){
		return $this->dessenha = $value;
	}
	public function getDesnome(){
		return $this->desnome;
	}
	public function setDesnome($value){
		return $this->desnome = $value;
	}
	public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro ($value){
		return $this->dtcadastro = $value;
	}

	public function setData($data){
     $this->setIdusuario($data['idusuario']);
     $this->setDeslogin($data['deslogin']);
     $this->setDessenha($data['dessenha']);
     $this->setDesnome($data['desnome']);
     $this->setDtcadastro(new Datetime($data['dtcadastro']));
	}

public function insert(){
	$sql = new Sql();

	$results = $sql->select("CALL sp_users_insert(:LOGIN,:PASSWORD,:NAME)",array(
		':LOGIN'=>$this->getDeslogin(),
	    ':PASSWORD'=>$this->getDessenha(),
	    ':NAME'=>$this->getDesnome(),

	));

if(count($results) > 0){
	$this->setData($results[0]);

}



}


public function loadByid($id){

	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_users WHERE idusuario =:ID",array(
		":ID"=>$id
	));


if (count($results) > 0) {
	
	$this->setData($results[0]);
}

}
//método pra inserir o login no SQL




public function login($login,$password){
	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN AND dessenha =:PASSWORD",array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password
			));

	
	if (count($results)> 0) {
		$this->setData($results[0]);
	}
	else{
		throw new Exception("Login e/ou senha não estão salvos!");
		
	}

}

//Método para listar os dados da tabela 
public static function getList(){
$sql = new Sql();
return $sql->select("SELECT * FROM tb_users ORDER BY  deslogin DESC"); 

}


//Método para pesquisar os dados na tabela  SQL
public static function search($login){

	$sql =new Sql();
	return $sql->select("SELECT * FROM tb_users WHERE deslogin LIKE :SEARCH ORDER BY deslogin",array(
		":SEARCH"=>"%".$login."%"
	));
}

//Método para retornar os dados em Json_encode


public function __toString(){
	return json_encode(array(
	"idusuario"=>$this->getIdusuario(),
	"deslogin"=>$this->getDeslogin(),
	"dessenha"=>$this->getDessenha(),
	"desnome"=>$this->getDesnome(),
	"dtcadastro"=>$this->getDtcadastro()->Format("d/m/Y H:i:s")


));
}

//Método para atualizar os dados 
public function update($login,$password,$name){
	$this->setDeslogin($login);
	$this->setDessenha($password);
	$this->setDesnome($name);
    
    $sql = new Sql();

	$sql->query("UPDATE tb_users SET deslogin = :LOGIN, dessenha = :PASSWORD,desnome =:NAME WHERE idusuario = :ID",array(
		':LOGIN'=>$this->getDeslogin(),
		':PASSWORD'=>$this->getDessenha(),
		':NAME'=>$this->getDesnome(),
		':ID'=>$this->getIdusuario()
	));

}


//Método deletar 
public function delete(){
	$sql = new Sql();

	$sql->query("DELETE FROM tb_users WHERE idusuario = :ID",array(
		':ID'=>$this->getIdusuario()
	));
    //Deixando os dados da id vazios
	$this->setIdusuario(0);
	$this->setDeslogin("");
	$this->setDessenha("");
	$this->setDtcadastro(new DateTime());
}

public function __construct($login = "" ,$password = "",$name = ""){
	$this->setDeslogin($login);
	$this->setDessenha($password);
	$this->setDesnome($name);
}

}

?>