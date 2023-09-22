<?php

class Createcontroller{
	public function index(){
		
         


         
       

             //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('create.html');
         	//É possivel chamar apenas o método estático de outra classe exemplo CLASSE::MÉTODO
		 
        $objPostagens = Postagem::selecionaTodos();//Puxando o método da classe Postagem 
		  
        $parametros = array();//Criando um array vazio
        $parametros['postagens'] =$objPostagens;//Selecionando o array para listar os dados e  redirecionar pro html
        
        $conteudo =$template->render($parametros);
		echo $conteudo;
		}

	}?>
