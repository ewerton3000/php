<?php



require_once('db.class.php');
//Requerimento do arquivo db.class.php para instânciar a classe deste arquivo



/* //Para testar se o post está sendo feito com sucesso
echo $usuario;
echo"<br/>";
echo $senha;
*/

//Se o usuario e a senha forem identicos  aos que estão registrados no SQL

$sql = "SELECT * FROM usuarios";


$objDb = new db();//Instânciando a classe db
$link = $objDb->conecta_mysql();//Puxando a função conecta_mysql() da classe instanciada db

$resultado_id = mysqli_query($link,$sql);//Executando a consulta e a query 


//Se o usuario e a senha forem iguais 
if ($resultado_id) {
   $dados_usuario = array();//Mostrando os dados do SQL em formatdo de array 
while ($linha = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
	$dados_usuario[] = $linha;//Mostra a variavel $dados_usuario como array pegando a variavel $linha e aqui ele percorre todos os dados de registro do campo
	//OBS:os parenteses são obrigatórios quando armazenamos dados array 
}
  
  //Usando o foreach
foreach ($dados_usuario as $usuario) {//Ao lado transformando $dados_usuario em $usuario

	echo  $usuario['email'];//var_dump($dados_usuario); //Usando o var dump para ver o array ou echo

	//Acima vc pode usar parenteses para mostrar um campo especícico com {'nomedocampo'}
	echo"<br/><br/>";
}


 
//Se o usuario e senha existir dentro do SQL
}
 

else{
	echo'Erro na execução da consulta , favor entrar em contato com o admin do site';
}
/*
$dados_usuario = mysqli_fetch_array($resultado_id);//Mostrando os dados do SQL em formatdo de array com a função mysqli_fetch_array

var_dump($dados_usuario); //Usando o var dump para ver o arrayy 
*/


//mysqli_fetch_array OBS:O mysqli_fecht_array ele lista apenas um dos registros o primeiro da tabela

 //mysqli_fecht_all():Esta função mostra todos os registros dentro da tabela


//MYSQLI_NUM:Esta função pode ser usada como parametro na consulta ele mostra o registro com nuumeração de todos os campos da id

//MYSQLI_ASSOC:Esta função pode ser usada como parametro na consulta ele mostra o registro com os nomes dos campos associados  correspondente as suas linhas

//MYSQLI_BOTH:Esta função pode ser usada como parametro na consuta que mostra o registro coms os nomes associados e numéricos correspondetes as suas linhas
?>
