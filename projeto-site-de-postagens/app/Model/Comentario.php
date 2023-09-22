<?php

Class Comentario{

	//Método para selecionar comentários

	public static function selecionarComentarios($idPost){

       $con = Connection::getConn();

       //Selecionando a tabela comentario onde o idpostagem é igual a id

       $sql = "SELECT * FROM comentario WHERE id_postagem = :id";
       $sql = $con->prepare($sql);
       $sql->bindValue(':id',$idPost,PDO::PARAM_INT);//Substituindo o id pelo $idPost e o valor vai ser inteiro
       $sql->execute();
       
       //Usando um array vazio
       $resultado = array();

       //Enquanto a query for executada ela será convertida em array
       while($row = $sql->fetchObject('Comentario')){
           $resultado[] = $row;
    
       }

       return $resultado;
	}
  
  //Método para inserir comentários 
    public static function inserir($reqPost){


       $con = Connection::getConn();

       //Selecionando a tabela comentario onde o idpostagem é igual a id

       $sql = "INSERT INTO comentario(nome,mensagem,id_postagem) VALUES (:nom,:msg,:idp)";
       $sql = $con->prepare($sql);
       $sql->bindValue(':nom',$reqPost['nome']);
       $sql->bindValue(':msg',$reqPost['msg']);
       $sql->bindValue(':idp',$reqPost['id']);
       $sql->execute();
    
    //Se ele não fizer o insert
       if($sql->rowcount()){
        return true; //Faz o insert com sucesso
       }
       throw new Exception("Falha ao inserir os dados");
       
    }
}
?>