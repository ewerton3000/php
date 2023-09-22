<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
			<div class="row">
				<h1>Catálogo de produtos</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
    				<form role="form" action="catalogo_produtos-post.php" method="post">
					  <div class="form-group" >
					    <label for="Produto">Nome do produto:</label>
					    <select class="form-control" name="id_produto" id="id_produto">
					    	<option value="1">Cadeira  </option>
							<option value="2">Fogão</option>
							<option value="3">Roteador wi-fi</option>
							<option value="4">TV 29"</option>
					   	</select>
					  </div>
					  <button type="submit" class="btn btn-default">Ver detalhes</button>
					</form>
    			</div>
    			<div class="col-md-4"></div>
    			<div class="col-md-4"></div>
  			</div>

  			<div class="row"> 
				<h1>Detalhes de produtos</h1>
			</div>

			<div class="row">
  				<div class="col-md-4"><!--Usando o php para criar o array de detalhes-->
  					<?php
  					//A numeração dos array está de acordo com os values dentro do formulário acima observe:
  					//Isto fará com que o method=get pegue o value e puxe do array o mesmo valor ou mesma palavra.

  				$id_produto = 	$_POST['id_produto'];//Usando o $_POST para puxa o value 
  					$detalhes[1] =  "Detalhes das cadeiras";
  					$detalhes[2] = "Detalhes do Fogão";
  					$detalhes[3] = "Detalhes do roteador";
  					$detalhes[4] = "Detalhes da tv";


  					echo"O Erro acontece pelo fato dos arrays(escolhas dos detalhes) não terem sido selecionados ainda , portanto escolha um que o erro vai sumir";
  					echo"<br>";
  					echo"<br>";

  					echo $detalhes[$id_produto];//Mostrando os detalhes do produto com a variavel que armazena os arrays
                      
  					?>

  				</div>
  			</div>
		</div>
	</body>
</html>