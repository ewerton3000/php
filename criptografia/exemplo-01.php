<?php
//Criando duas chaves
define('SECRET_IV',pack('a16','senha'));
define('SECRET',pack('a16','senha'));

//Construindo um array com chave nome com valor hcode
$data = [
"nome"=>"Hcode"
];
//Usando o define para criar uma constante e usando a função pack com o valor dela
//pack():É uma função que converte uma string em 16 bits(16a) neste caso a openssl_encrypt ela vai usar uma string em 16 bits
//OBS: Se vc escrever a sua senha em 16 caracteres já serve mas se tiver mais ou menos que 16 a função pack ira converte-la para 16


$openssl = openssl_encrypt(
	//Neste parametro vamos ter a string que vai ser encriptada e transformando ela em um array
	json_encode($data), 
	//Este parametro é uma constante(algoritmo)pré-definida no php
	'AES-128-CBC',
	//SECRET é a senha  (chave ou key) para a criptografia(como se fosse um cofre)
	 SECRET,
	 //neste lugar é uma lista de opções que tem procure depois no php.net
	 0,
	 //É a segunda senha 
	 SECRET_IV);

//Abaixo sai na tela a criptografia da senha

var_dump($openssl);

//Agora vamos fazer o decrypt:É uma funçã oque desfaz a criptografia do open_ssl
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET,0,SECRET_IV);
//Mostrando o resultado do decrypt em array com json_decode
var_dump(json_decode($string,true));
?>