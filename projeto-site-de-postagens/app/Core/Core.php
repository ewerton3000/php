<?php

//Está classe gerencia os gets pela url
class Core{

	public function start($urlGet){
		//Usando a requisição GET para ver que página o usuario vai acessar
    
     //Se existir na $urlGet o método da classe AdminController
		if(isset($urlGet['metodo'])){
			$acao = $urlGet['metodo'];
		}
		else{
       $acao = 'index';
		}

    //$pagina = $urlGet['pagina'];
          //$acao = 'index';//Chamando o método index da classe HomeController.php
		//echo $controller;

         //Se existir na $urlGet o parametro página
		if(isset($urlGet['pagina'])){
         //Aqui a url selecionará a página
			$controller = ucfirst($urlGet['pagina'].'Controller');
		}
		//Senão abrir a página pela URL abra a página do meu site
		else{
			$controller = 'HomeController';
          


		}
       
        
        //Se a classe $Controller não existir  
		if (!class_exists($controller)) {
			//Ficará escrito ErroController na página
			$controller = 'ErroController';
           //Experimente testar isso na url em ?pagina= coloque home atualize e depois tente home2 e atualize novamente

		}
		
		//Se o parametro id existir e se o parametro for nulo
    if(isset($urlGet['id'])&& $urlGet['id'] !=null)
    	//cria uma variavel chamada id e pega o parametro id
    	$id = $urlGet['id'];


    //Senão o id será nulo
    else{
    $id = null;
     }						                                                        
     call_user_func_array(array(new $controller,$acao), array('id' =>$id));
	}
}





//No GET acima ele requisita ao usuário pela URL=http://127.0.0.1/projeto-site-de-postagens/?pagina= no ?pagina= será a página escolhida para ser executada por exemplo http://127.0.0.1/projeto-site-de-postagens/?pagina=home vc será encaminhado para a página home(home.html)


//call_user_func_array( new Classe,$metodo,parametros ou array())

//No else do $urlGet não importa os caracteres vc utilizar ele te jogará para a página home  e se for sem a ? vc será jogado pra pagina do localhost 

//$urlGet = Ele é um ação que para ser usado na url e puxar o valor definido nela
 ?>