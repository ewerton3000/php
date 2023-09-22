
<?php
   
   session_start();
   
   //Se o a sessão do usuário não existir
   if(!isset($_SESSION['usuario'])){
   	//Se não existir será redirecionado para uma página
   	header('Location: index.php?erro=1');
   }

   //Conexão com o banco de dados
   require_once('db.class.php');
   
   $objDb = new db();
   $link = $objDb->conecta_mysql();

   //Pegando a id do usuario que está logado
   $id_usuario = $_SESSION['id_usuario'];

   //Recuperar a quantidade de tweets 
   $sql ="SELECT COUNT(*) AS qtde_tweets FROM tweet WHERE id_usuario = $id_usuario ";

   //echo $sql; <-Pra ver se a query está funcionando na página
  
  
  
  
  //Executando a query
  $resultado_id = mysqli_query($link,$sql);
 
 //Começa o número de tweets com 0
  $qtde_tweets = 0;
  //
  if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  //var_dump($resgitro); <- teste para ver o retorno do SQL
  //echo $registro['qtde_tweets'];
  $qtde_tweets = $registro['qtde_tweets'];
}
else{
	echo"Erro ao executar a query no SQL";
}

 //Recuperar a quantidade  de seguidores
  $sql ="SELECT COUNT(*) AS qtde_seguidores FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario ";

   //echo $sql; <-Pra ver se a query está funcionando na página
  
  
  
  
  //Executando a query
  $resultado_id = mysqli_query($link,$sql);
 
 //Começa o número de seguidores com 0
  $qtde_seguidores = 0;
  //
  if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  //var_dump($resgitro); <- teste para ver o retorno do SQL
  //echo $registro['qtde_tweets'];
  $qtde_seguidores = $registro['qtde_seguidores'];
}
else{
	echo"Erro ao executar a query no SQL";
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	   
	   <!--Javascript-->
	   <script type="text/javascript">
	   	
	   	//Caso o document tenha sido carregado ele irá executar uma função
       $(document).ready( function(){
         
         //asssociar o evento de click ao botão
         $('#btn_tweet').click(function(){
         	//alert('Botão clicado com sucesso!!!'); <- Para testar o  evento
         	//alert($('#texto_tweet').val());  <- Para testar o evento de texto usando a função val() para puxar o texto digitado
             

             //Se o texto não tiver nenhuma letra(lenght) digitada
             if ($('#texto_tweet').val().lenght > 0)  {
             	//alert('Campo está preenchido'); <- Pra testar o evento

             }

               $.ajax({
               	url: 'inclui_tweet.php',//Puxando a execução do arquivo inclui_tweet.php 

               	method: 'post',//Usando o método post

               	//data:{ texto_tweet: $('#texto_tweet').val() },//Usando data a chave(texto_tweet) e o conteúdo(#texto_tweet) 
               	//Neste caso o parâmetro data armazena o conteudo do arquivo inclui_tweet
                  
                   data: $('#form_tweet').serialize(),//Usando o serialize para puxar os dados do texto digitados para o tweet

                   //Se o tweet for enviado com sucesso
               	success: function(data) {
                    $('#texto_tweet').val('');//Após enviar o tweet essa ação limpa a area de texto
               		//alert('Seu tweet foi enviado com sucesso');<- Teste para alerta
               		atualizaTweet();//Executando a função que fará atualização assíncrona
               		 atualizarTweets();

               	}
               });


         })

         //Função para atualizar a div dos tweets no momento em que a página for carregada
               function atualizaTweet(){

               	$.ajax({
                     url:'get_tweet.php',//Executando o código do arquivo get_tweet.php
                     success:function(data){//Usando o parametro para armazenar a url
                     	$('#tweets').html(data);//Exibindo a data na div com a id(tweets)
                          //alert(data); <-Para teste de requisição

                     }

               	}); 
               }
               atualizaTweet();
       });
       
       function atualizarTweets(){
       $.ajax({
       	url:'home.php',
       	success:function(data){
       		$('qtde-tweets').html(data);
       		alert(data);
       	}
       
       });
     
   }


	   </script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
             <div class="panel-body">
              <h4><?= $_SESSION['usuario']?></h4>

              <hr />
              <div class="col-md-6">
              	TWEETS <br /><?= $qtde_tweets ?><!--Quantidade de TWEETS enviados-->
              </div>
              <div class="col-md-6">
              	SEGUIDORES <br /> <?= $qtde_seguidores ?><!--Quantidade de seguidores -->
              </div>
             </div>
              
             </div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<form id="form_tweet" class="input-group"><!--Painel de envio de texto-->
	    					<input type="text" id="texto_tweet"name="texto_tweet" class="form-control" placeholder="O que está acontecendo agora?" maxlength="140"/>
	    					<span class="input-group-btn">
	    						<button class="btn btn-default" id="btn_tweet" type="button">Tweet</button>
	    					</span>
	    				</form>
	    			</div>
	    		</div>
            
            <!--Mostrando e executando a consulta dos tweets aqui-->
           <div id="tweets" class="list-group"></div>

			</div>
			<div class="col-md-3">
				
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="procurar_pessoas.php">Procurar por pessoas</a></h4>
					</div>
				</div>
			</div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>



<!--
ajax ou jquery 

data:{chave1: valor1,chave2: valor2,chave3: valor3 , .........}

serialize:É uma função do (ajax ou jquery) para buscar todas as informações dentro de um formúlario usando a id e o name para serem correspondentes para puxar o conteúdo inserido OBS:esta função serve mais para formulários
-->