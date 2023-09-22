
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
	   	
	   	
       //$(document).ready( function(){
         
         
         //$('#btn_procurar_pessoa').click(function(){
         	
             

             
             //if ($('#nome_pessoa').val().lenght > 0)  {
             	
             

               //$.ajax({
               	//url: 'get_pessoas.php',

               	//method: 'post',


                  
                   //data: $('#form_procurar_pessoas').serialize(),

                  
               	//success: function(data) {
                   //$('#pessoas').html(data);
               	   //$('.btn_seguir').click( function(){
                   
                   //$('.btn_seguir').click( function(){
                   	//alert('teste');


                
                //Caso o document tenha sido carregado ele irá executar uma função
				$(document).ready(function(){
                 //asssociar o evento de click ao botão
				$('#btn_procurar_pessoa').click(function(){
                     //alert('Botão clicado com sucesso!!!'); <- Para testar o  evento
         	//alert($('#texto_tweet').val());  <- Para testar o evento de texto usando a função val() para puxar o texto digitado

         	       //Se o texto não tiver nenhuma letra(lenght) digitada
					if($('#nome_pessoa').val().length > 0){
                     
                     //alert('Campo está preenchido'); <- Pra testar o evento
						$.ajax({

							url: 'get_pessoas.php',//Puxando a execução do arquivo inclui_tweet.php 

							method: 'post',//Usando o método post
                            
							data: $('#form_procurar_pessoas').serialize(),//Usando o serialize para puxar os dados do texto digitados para o tweet
							//Usando data a chave(texto_tweet) e o conteúdo(#texto_tweet) 
                            
                             //Se o tweet for enviado com sucesso
							success: function(data){

								$('#pessoas').html(data);//Enviando os dados para onde está a id="pessoas" como responsive text de retorno como o parâmetro(data)
								$('.btn_seguir').click( function(){//Usando uma classe que está no seguir.php

                                 var id_usuario = $(this).data('id_usuario');//Usando o this para buscar o parametro data('id_usuario') para busca-los pelo número de id(o this vem lá do arquivo get_pessoas.php)
                                  

                                  //Abaixo temos as funções hide()=esconder e show()="aparecer" para alternar os botões de seguir e deixar de seguir para não termos duas opções na página
                                  
                                  //Ação quando a pessoa for seguida o botão seguir fica invisível
                                  $('#btn_seguir_'+id_usuario).hide();

                                  //Ação para que o botão deixar de seguir substitúa o botão seguir 
                                  $('#btn_deixar_seguir'+id_usuario).show();
                                 //alert(id_usuario); <-para testes

                                 $.ajax({
                                 	url:'seguir.php',
                                 	method:'post',
                                 	data:{seguir_id_usuario: id_usuario},//Usando o id_usuario do this acima para armazenar no seguir_id_usuario

                                 	//Se a requisição for feita com sucesso
                                 	success: function(data){
                                 		//alert('Você está seguindo está pessoa');
                                 	}

                                 });

								});
                               
                               $('.btn_deixar_seguir').click( function(){
                                
                                 var id_usuario = $(this).data('id_usuario');//Usando o this para buscar o parametro data('id_usuario') para busca-los pelo número de id(o this vem lá do arquivo get_pessoas.php)
                                 
                                  //Ação quando clicar no botão deixar de seguir

                                  //Ação para o botão seguir apareça
                                  $('#btn_seguir_'+id_usuario).show();

                                  //Ação para o botão deixar de seguir fique in  visível
                                  $('#btn_deixar_seguir'+id_usuario).hide();


                                 //alert(id_usuario); <-para testes
                                 $.ajax({
                                 	url:'deixar_seguir.php',//Usando ação deste arquivo
                                 	method:'post',
                                 	data:{deixar_seguir_id_usuario: id_usuario},//Usando o id_usuario do this acima para armazenar no seguir_id_usuario

                                 	//Se a requisição for feita com sucesso
                                 	success: function(data){
                                 		//alert('Você deixou de seguir está pessoa');
                                 	}


                                 });
                                  
                                 

                                  
            

                               });  
							}

						});

					}

				});

			});
       

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
	            <li><a href="home.php">Home</a></li>
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
              <div class="col-md-6" id="tweets">
              	TWEETS <br /><?= $qtde_tweets?><!--Quantidade de TWEETS-->
              </div>
              <div class="col-md-6" id="seguidores">
              	SEGUIDORES <br /> <?= $qtde_seguidores ?><!--Quantidade de seguidores-->
              </div>
             </div>
              
             </div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<form id="form_procurar_pessoas" class="input-group"><!--Painel de envio de texto-->
	    					<input type="text" id="nome_pessoa"name="nome_pessoa" class="form-control" placeholder="Quem você está procurando?" maxlength="140"/>
	    					<span class="input-group-btn">
	    						<button class="btn btn-default" id="btn_procurar_pessoa" type="button">Procurar</button>
	    					</span>
	    				</form>
	    			</div>
	    		</div>
            
            <!--Mostrando e executando a consulta dos tweets aqui-->
           <div id="pessoas" class="list-group"></div>

			</div>
			<div class="col-md-3">
				
				<div class="panel panel-default">
					<div class="panel-body">
						
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