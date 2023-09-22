<?php



class Admincontroller{
	public function index($paramid){
		
        


         
       

             //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('admin.html');
         	//É possivel chamar apenas o método estático de outra classe exemplo CLASSE::MÉTODO
		 
        $objPostagens = Postagem::selecionaTodos();//Puxando o método da classe Postagem 
		  
        $parametros = array();//Criando um array vazio
        $parametros['postagens'] =$objPostagens;//Selecionando o array para listar os dados e  redirecionar pro html
        
        $conteudo =$template->render($parametros);
		echo $conteudo;
		}
                
                //Método para inserir informações na página admin e redirecionar para a pagina create
		public function create(){
			  //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('create.html');//Redirecionando para  página create
		 
        $objPostagens = Postagem::selecionaTodos();//Puxando o método da classe Postagem 
		  
        $parametros = array();//Criando um array vazio
        
        
        $conteudo =$template->render($parametros);
		echo $conteudo;	}

		public function insert(){
			try{
                           //Puxando o método insert pelo parametro $_POST da classe Postagem
			Postagem::insert($_POST);

			echo'<script>alert("Publicação inserida com sucesso!");</script>';
			echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=admin&metodo=index"</script>';
			}
			catch(Exception $e){
				//Se ocorrer um erro no insert mostrará o erro 
				//usando  o javascript para mostrar o erro
                           echo'<script>alert("'.$e->getMessage().'");</script>';
                           echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=admin&metodo=create"</script>';
			}
			
		}

		//Criando o método change
		public function change($paramId){
                     
                     	  //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('update.html');
		
		 //Usando o método da classe Postagem para selecionar a id que vai ser alterada com o $paramId para puxar a id correta use var_dump($post); para confirmar a id do SQL

                 $post = Postagem::selecionaPorId($paramId);
                 
		  
        $parametros = array();//Criando um array vazio
        $parametros['id'] =$post->id;//Selecionando o id 
        $parametros['titulo'] =$post->titulo;//Selecionando o titulo 
        $parametros['conteudo'] =$post->conteudo;//Selecionando o conteudo 

        
        $conteudo =$template->render($parametros);
		echo $conteudo;	
		}

		public function update(){
                        //var_dump($_POST); Para teste e ver se o dados estão passando

                        //Se a query update for executada
			try{Postagem::update($_POST);
				echo'<script>alert("Publicação alterada com sucesso!");</script>';
			echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=admin&metodo=index"</script>';
		}
                     //Senão erro no update
		catch(Exception $e){
                     
                     echo'<script>alert("'.$e->getMessage().'");</script>';
                           echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=admin&metodo=change&id='.$_POST['id'].'"</script>';
		}
                  } 
                  //Criando um método para deletar a postagem

                  public function delete($paramId){
                       //$id = $_GET['id'];//Puxando o id da url
                  
                       Postagem::delete($paramId);//Puxando o método com o parametro $id da classe Postagem
                       try{Postagem::update($_POST);
				echo'<script>alert("Publicação deletada com sucesso!");</script>';
			echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=admin&metodo=index"</script>';
		}
                  catch(Exception $e){
                        echo'<script>alert("'.$e->getMessage().'");</script>';
                           echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=admin&metodo=change&id='.$_POST['id'].'"</script>';
                           
                  }
          }

}






/*
Quando vc fizer um método de insert e quiser testa-lo com botão enviar,cadastrar e etc... use o var_dump($_POST) pra ver se as informações do formulário estão sendo enviadas exemplo abaixo:
                        

                        Teste com o insert usando o var_dump()
			public function insert(){
			var_dump($_POST);
						}
*/


//$id = $_GET['id'];
        //echo $id;    MÉTODO PARA TESTAR SE A ID ESTÁ SENDO ´PUXADO PELO MÉTODO GET 

//O método change tem esse tipo de seleção para o post porque todos  eles são variaveis do tipo public se fosse private seriam feitos com GET						
?>