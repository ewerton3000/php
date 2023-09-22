<?php

class HomeController
{
	public function index($params){
         try{

           
         	$colecPostagens = Postagem::selecionaTodos();

             //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('home.html');
         	//É possivel chamar apenas o método estático de outra classe exemplo CLASSE::MÉTODO
		
        $parametros = array();//Criando um array vazio
        $parametros['postagens'] = $colecPostagens;//Inserindo postagens no array e inserindo a variavel 

        $conteudo = $template->render($parametros);//Renderizando a página home com os parametros
		echo $conteudo;
		
               
           
         }catch(Exception $e){
         	echo $e->getMessage();
         	

         }
		//echo'teste';

		
		
	}
}

//$parametros['nome'] = 'Rafael'; =>Está linha ela joga a informação do array nome que contem Rafael e no html Home.html ele será inserido com {{nome}} onde ele representa a variavel do php(['nome']) ou seja quando executar ele mostrará a informação contida na variavel que é Rafael essa é uma das vatagens de se usar o composer

//$parametros['postagens'] = $colecPostagens;´=>Aqui ele insere na linha array o nome postagens e pega a variavel $parametros
?>