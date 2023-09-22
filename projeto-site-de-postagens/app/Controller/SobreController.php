<?php


class Sobrecontroller{
	public function index(){
		
         


         
       

             //Codigo do Twig para chamar os templates
         	$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('sobre.html');
         	//É possivel chamar apenas o método estático de outra classe exemplo CLASSE::MÉTODO
		

		//var_dump($postagem);
        $parametros = array();//Criando um array vazio
        
        $conteudo =$template->render($parametros);
		echo $conteudo;
		
               
           
         
		
		
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