<?php

class PostController
{
	public function index($params){
		
         try{


         $postagem = Postagem::selecionaPorId($params);
         
       

             //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('single.html');
         	//É possivel chamar apenas o método estático de outra classe exemplo CLASSE::MÉTODO
		

		//var_dump($postagem);
        $parametros = array();//Criando um array vazio
        $parametros['id'] =$postagem->id;
        $parametros['titulo'] = $postagem->titulo;//Inserindo  o titulo dentro da variavel postagens 
        $parametros['conteudo'] = $postagem->conteudo;//Inserindo  o conteudo dentro da variavel postagens
        $parametros['comentarios'] = $postagem->comentarios;//Inserindo comentarios dentro da variavel
        $conteudo = $template->render($parametros);//Renderizando a página home com os parametros
		echo $conteudo;
		
               
           
         }catch(Exception $e){
         	echo $e->getMessage();
         	

         }
		//echo'teste';

		
		
	}
	//Método para adicionar comentário

	public function addComent(){
       try{
      Comentario::inserir($_POST);//Puxando o método da classe Comentário
      header('Location:http://127.0.0.1/projeto-site-de-postagens/?pagina=post&id='.$_POST['id']);
      }
      catch(Exception $e){
      	echo'<script>alert("'.$e->getMessage().'");</script>';
                           echo'<script>location.href="http://127.0.0.1/projeto-site-de-postagens/?pagina=post&id='.$_POST['id'].'"</script>';
      } 
	}
}



/*
$parametros = array();//Criando um array vazio
        $parametros['titulo'] = $postagem->titulo; 
        $parametros['conteudo'] = $postagem->conteudo;
        $conteudo = $template->render($parametros);

        //No exemplo acima é um segundo modo de vc inserir os parmetros dentro do html como nesta linha $parametros['conteudo'] = $postagem->conteudo; que a variavel $postagem puxa o parametro conteudo
        que vai ser usado dentro do html usando apenas {{conteudo}}
*/
?>