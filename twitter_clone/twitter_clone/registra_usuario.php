<?php

require_once('db.class.php');//Requerimento do arquivo db.class.php para instânciar a classe deste arquivo

//OBS pode se Usar os dois como teste pra ver se os métodos get e o post estão sendo feitos
//Recebendo os dados via post 
$usuario =  $_POST['usuario'];
$email = $_POST['email'];
$senha =  md5($_POST['senha']);//A senha cadastrada será criptografada
//A função md5 serve para criptografar as informações antes de serem enviadas para os usuarios 


$objDb = new db();//Instânciando a classe db
$link = $objDb->conecta_mysql();//Puxando a função conecta_mysql() da classe instanciada db


$usuario_existe = false;
$email_existe = false;


//verificar se o usuario já existe

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' ";
if ($resultado_id = mysqli_query($link,$sql)) {
	
	$dados_usuario = mysqli_fetch_array($resultado_id);//Atribuindo a query a uma variavel

    //Se os dados de cadastro já existem
	if(isset($dados_usuario['usuario'])){
		$usuario_existe = true;
		echo"<br>";
	}

	//senão existem 
	/*else{
		echo"Usuário não cadastrado ok pode cadastrar";
	}*/
}


else{

	echo"Erro ao tentar localizar o registro de usuário";
}




//Verificar se o e-mail já exite
$sql = "SELECT * FROM usuarios WHERE email = '$email' ";

//Se o resultado da query ja foi efetuada
if ($resultado_id = mysqli_query($link,$sql)) {
	
	$dados_usuario = mysqli_fetch_array($resultado_id);//Atribuindo a query a uma variavel

    //Se os dados de cadastro já existem
	if(isset($dados_usuario['email'])){
		$email_existe = true;
	}

	//senão existem 
	/*else{
		echo"E-mail não cadastrado ok pode cadastrar";
	}*/
}


else{

	echo"Erro ao tentar localizar o registro de usuário";
}



//Se o usuario ou email existe
if($usuario_existe || $email_existe){

	$retorno_get = '';//Criando a variavel con conteúdo vazio
     
     //Se $usuario_existe for true
	if ($usuario_existe) {
		$retorno_get.= "erro_usuario=1&"; //OBS:Neste trecho $retorno_get.= "erro_usuario=1&" o ponto(.) e o igual(=)tem qu estar juntos senão dará erro

	}

	//Se $email_existe for true
	if ($email_existe) {
		$retorno_get.= "erro_email=1&";
	}

//OBS:Repare que o $retorno_get receberá o conteúdo de acordo com a condição acima que for selecionada e irá ser inserido dentro da url com a variavel $retorno_get

  header('Location: inscrevase.php?'.$retorno_get);//Redirecionando para a página inscreva-se
    die();
  //OBS:Quando colocamos  a interrogação(?) dentro do link do php ele já entende que o próximo código será de parâmetro como vc pode ver acima com (Location: inscrevase.php?'.$retorno)
}


//die();Esta função serve para terminar a execução do código porque senão ele irá fazer a execução de todos as querys e quando chega no die() ele termina de er o código

//Usando a query insert into para inserir dados no SQL com as variaveis correspondentes e na mesma ordem abaixo
$sql = "insert into usuarios(usuario,email,senha) values ('$usuario','$email','$senha')";

//Executando a query com os parametros  $link e $sql para conectar ao SQL e executar a query acima
//Condição:Se a query estiver correta(com nome tabela e o os campos certos)
if(mysqli_query($link,$sql)){
	echo"Usuario registrado com sucesso! ";
}
else{
	echo "Erro ao registrar o usuário";
}


























/*Enviando os dados do formulário inscreva-se via get OBS: Não é recomendavel fazer isso com  usuario e senha
echo $_GET['usuario'];
echo"<br>";
echo $_GET['email'];
echo"<br>";
echo $_GET['senha'];
echo"<br>";
*/

?>