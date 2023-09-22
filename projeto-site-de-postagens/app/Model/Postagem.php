<?php

class Postagem{

	//private $id;<-para transformar todos os id do array em private

	public static function selecionaTodos(){
        //Instanciando a classe PDO
       //Conexão com o banco de dados
		$con = Connection::getConn();//Sem nessecidade de usar o "new para instanciar pq  a classe é abstrata
        
        //SQL selecionando a tabela postagem pela ordem do id decrescente
		$sql = "SELECT * FROM postagem ORDER BY id DESC";
		$sql = $con->prepare($sql);//Validando e preparando pro SQL
		$sql->execute();//Executando a query 

        $resultado = array();//Variavel com array vazio
         
		//var_dump($sql->fetchall());
              
              //Enquanto as linhas tiverem a query com o objeto Postagem
		while ($row = $sql->fetchObject('Postagem')){
			$resultado[] = $row;
		}

        //Se o resultado vier vazio
		if(!$resultado){
			throw new Exception("Não foi encontrado nenhum resultado no registro no banco");
		}
      
      return $resultado;//Retornando o valor da variavel
      
		
	}


	public static function selecionaPorId($idPost){
              //Conexão com SQL 
		$con =Connection::getConn();
              //Indicando  para query procurar a id na tabela Postagem
              $sql = "SELECT * FROM postagem WHERE id =:id";
              //Preparando a query
		$sql = $con->prepare($sql);
		//Usando o bindValue para que todo id seja do tipo inteiro
		$sql->bindValue(':id',$idPost,PDO::PARAM_INT);
              //Executando a query
		$sql->execute();
              //Criando um objeto com resultado da query
		$resultado = $sql->fetchObject('Postagem');
               
                //Se o resultado vier vazio
               if(!$resultado){
			throw new Exception("Não foi encontrado nenhum resultado no registro no banco");
		}
              
              //Senão ele puxa o método da Classe Comentário
		else{
			$resultado->comentarios = Comentario::selecionarComentarios($resultado->id);
                      
                      //Se não existir um comentário na postagem
			
		}
		// Retorna(exibe)o resultado
		return $resultado;
	}

	//Método para inserir os dados   o parametro dados recebrá o titulo e conteúdo
        public static function insert($dadosPost){
         //Se os arrays titulo e conetúdo de $dadosPost for vazio
        	if (empty($dadosPost['titulo']) OR empty($dadosPost['conteudo'])) {
        		throw new Exception("preencha todos os campos!");//Aviso

                     //Caso não esteja vazio ele mostará false 
        	return false;
        	}
            
            $con = Connection::getConn();//Conectando ao banco de dados
            
            //Query para o insert para a Tabela Postagens nos campos titulo e conteudo usando bind
            $sql =$con->prepare("INSERT INTO postagem (titulo,conteudo) VALUES (:tit,:cont)");
            $sql->bindvalue(':tit',$dadosPost['titulo']);
            $sql->bindvalue(':cont',$dadosPost['conteudo']);
            $res = $sql->execute();//Executando o sql
            
            //Se $res for false
            if ($res == 0) {
            	throw new Exception("Falha ao inserir a publicação!");//Aviso 
        	return false;
            }

            //caso $res não for false ele retorna true
            return true;
            
            //Acima passando os dados dos bindvalues :tit e :cont para os arrays $dadosPost['titulo'] e $dadosPost['conteudo'].
        }
      
      //Método para atualizar os dados 
    public static function update($params){
    	$con = Connection::getConn();//Usando método da classe Connection para se conectar com SQL
    	//Usando a query para fazer a alteração no SQL 
    	$sql = "UPDATE postagem SET titulo =:tit, conteudo = :cont WHERE id = :id";
    	$sql = $con->prepare($sql);//preparando a query
    	$sql->bindValue(':tit', $params['titulo']);//Selecionando o bind :tit no array $params na posição['titulo']
    	$sql->bindValue(':cont', $params['conteudo']);//Selecionando o bind :cont no array $params na posição['conteudo']
    	$sql->bindValue(':id', $params['id']);//Selecionando o bind :id no array $params na posição['id']
    	$resultado =$sql->execute();

    	//Se o $resultado for igual a 0
    	if ($resultado == 0) {
    		throw new Exception("Falha ao inserir a publicação!");//Aviso 
        	return false;
    	}

    	//Senão ele Executa a ação update no SQL
    	return true;

    }
 //Método para deletar uma postagem
    public static function delete($id){

    	$con = Connection::getConn();//Usando método da classe Connection para se conectar com SQL
    	//Usando a query para deletar o id no SQL 
    	$sql = "DELETE FROM postagem  WHERE id = :id";
    	$sql = $con->prepare($sql);//preparando a query
    	$sql->bindValue(':id', $id);//Selecionando o bind :id no array $params na posição['id']
    	$resultado =$sql->execute();

    	//Se o $resultado for igual a 0
    	if ($resultado == 0) {
    		throw new Exception("Falha ao deletar a publicação!");//Aviso 
        	return false;
    	}

    	//Senão ele Executa a ação update no SQL
    	return true;

    }

    }
	

/*public static function selecionaTodos2(){

       //Conexão com o banco de dados
		$con = new PDO('mysql: host=localhost; dbname=serie-criando-site;','root','');
		return $con;
	}*/


//Na query $sql o ORDER BY siginifica pela  ordem
//Na query $sql o DESC siginifica decrescente
//fechtObject(''):Ele pega um registro no banco e o tranforma em um objeto como neste exemplo $sql->fetchObject('Postagem') aqui ele transforma a tabela Postagem em um objeto com fetchObject


	//Este inser com var_dump é um ótimo exemplo de testar um método teste com outros tipos como update deletee outros
?>