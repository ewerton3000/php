<?php]
//Criando uma classe
class Usuario{
	private $id;
	private $nome;
	private $descricao;
	private $dtcriado;

	public function getIdproduto(){
		return $this->id;

	}
	public function setIdproduto($value){
    $this->id = $value;
	}
	public function getNome(){
		return $this->nome;

	}
	public function setNome($value){
    $this->nome =$value;

	}
		public function getDescricao(){
		return $this->descricao;

	}
	public function setDescricao($value){
    $this->descricao = $value ;
	}

	public function getDTcriado(){
		return $this->dtcriado;

	}
	public function setDTcriado($value){
    $this->dtcriado = $value ;
	}
//criando uma função loadbyid
public function loadBYId($id){
	$sql = new Sql();
	$results = $sql->select("SELECT * FROM produto WHERE id=:ID",array(
":ID"=>$id
));
	if (count($results)> 0){
		$row = $results[0];
		$this->setIdproduto($row['id']);
		$this->setNome($row['nome']);
		$this->setDescricao($row['descricao']);
		$this->setDTcriado(new Datetime($row['dtcriado']));
	}
}

//Listar os dados da tabela

public function getlist(){
$sql = new Sql();
return$sql->select("SELECT * FROM fabrica ORDER BY id");
}

public function __tostring(){
	return json_encode(array(
     "id"=>$this->getIdproduto(),
     "nome"=>$this->getNome(),
     "descricao"=>$this->getDescricao(),
     "dtcriado"=>$this->getDTcriado()->format("d/m/Y H:i:s")
 ));
}
}

?>