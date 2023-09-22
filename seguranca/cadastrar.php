<?php
//1- Para criar uma recaptcha entre neste site:https://www.google.com/recaptcha/admin/site/450548286
//2-No site caso tenh um projeto ativo clique no sinal de + no canto superior da tela 

//3-EM seguida vai ter as opções Etiqueta(que vc usa o link do site ),tipo de recaptcha(use o recapcha V2 pela aula ou use o V3 para testar) ,domínios(aqui vc usa locahos caso esteja num computador testatndo códigos e ) e aceite o primeiro termo o segundo e opcional depois clique em salvar
//Depois de criar a recaptcha vc pode voltar em configurações do domínio e clique na opção chaves de recaptcha e lá tem a chave de copiar para o site(chave publica usada no html) e a chave secreta(chave usada no php que está nesta pagina no http_build_query) 

$email = $_POST["inputEmail"];

//Usando o var_dump para ver se está funcionando a caixa de email
//var_dump($_POST); 


//Usando o curl para chamar a url do recaptcha 

//Abrindo uma conexão com curl_init e criando uma variavel para armazenar o curl_init()
$ch =curl_init();
//Usando a url para se conectar ao google verify para fazer a verificação
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

//Colocando a chave secreta,o response(que é sempre o mesmo pra todos) e o remoteip para identificar o ip do usuário final
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
"secret"=>"6Lc-0toaAAAAAGlTx7xli7nZ1XSvSsJ2FCMkVVvp",
"response"=>$_POST["g-recaptcha-response"],
"remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

//Esperando o retorno da url que foi chamada
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
//mostrando o  post do recaptcha  de json decode  em array passando em true(pq se for false não vira array)
$recaptcha = json_decode(curl_exec($ch),true);
//Fechando a conexão da url
curl_close($ch);
//var_dump($recaptcha);


//Condição Se o $recaptcha for identico ao true(verdadeiro)
if ($recaptcha["success"] === true) {
	echo"OK:".$_POST["inputEmail"];

}
//se o recaptcha não  for true ele volta pra pagina do formulário
else{
	header("Location: exemplo-04.php");
}
?>