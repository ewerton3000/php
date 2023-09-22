<?php

//if ternário isset($_GET['verdadeiro'] ?  $_GET['verdadeiro'] : falso(0))
    
    //Se o erro existir ele executa senão ele não aparecerá
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    



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
	
		<script>
			// código javascript			
            

            //JQUERY
            //Se o documento está pronto ele executa a função abaixo
            $(document).ready(function(){
             //verificar se os campos de usuario e senha foram devidamente preenchidos com o btn_login

            $('#btn_login').click(function(){
               
               /*alert('Botão entrar foi clicado');
 
            });*/

            var campo_vazio = false;//criando uma variavel campo_vazio para mostrar valor true ou false
            
           //Se os campo usuario e senha forem iguais a vazio vazios receberão uma borda vermelha

            if($('#campo_usuario').val() == ''){
            	$('#campo_usuario').css({'border-color': '#A94442'});
              	campo_vazio = true;
              }
              else{
              	//Se o campo for preenchido ele ficará com a borda cinza
              	$('#campo_usuario').css({'border-color':'#CCC'});
              }
              

              if($('#campo_senha').val() == ''){
              	$('#campo_senha').css({'border-color': '#A94442'});
              	campo_vazio = true;
              }
              else{
                 //Se o campo for preenchido ele ficará com a borda cinza
              	$('#campo_senha').css({'border-color':'#CCC'});
                }

              if(campo_vazio) return false;//Falso caso a variavel campo_vazio não der true

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
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <!--Abaixo usando a  variavel $erro pra se o usuário e  senha não baterem o open do bootstrap já fica disponível ao erra no login se der certo ok -->
	            <li class="<?= $erro == 1 ? 'open' :  '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
				    		<!--Enviando dados pelo action do formúmlario pelo método post para o arquivo validar_acesso.php-->
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>

							<?php
							//Se o $erro(Lá de cima msm) for igual a 1
                              if($erro ==1){
                              	//Usando a tag font para destacar a mensagem de erro com cor vermelha
                              	echo '<font color="#FF0000">Usuario e ou senha inválido(s)</font>';
                              }
							?>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>