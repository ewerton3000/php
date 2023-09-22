<?php

//system() =Executa um programa externo e exibe o resultado
//system () é como a versão C da função, pois executa o dado commande exibe o resultado.

//A chamada system () também tenta liberar automaticamente o buffer de saída do servidor da web após cada linha de saída se o PHP estiver sendo executado como um módulo de servidor.

//Se você precisar executar um comando e ter todos os dados do comando passados ​​diretamente de volta sem qualquer interferência, use a função passthru () .


//$comando = system("dir C:",$retorno);


//fechando a ação do system!


//Se o sistema mandou uma informação via post

//ISto é um exemplo de vunerabilidade do sistema pq qualquer informação vier via post pode alterar o seu sistema operacional causando ataques Hacker facelmente ao seu sistema
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

		$cmd = escapeshellcmd($_POST["cmd"]);

		//escapeshellcmd() =é uma função para evitar que hackers usem o comando post para mexer em seu servidor por isso é bom usa-lo dentro da variavel que carrega as informações! 
		//Abrindo o system com o echo "<pre>"!


		//Pra mostrar o trajeto da variavel com escapeshellcmd!
		//Neste caso qualquer tipo de post enviado pela $cmd será transformado em uma string para não ser executado dentro do system 32(cmd)
		var_dump($cmd);
		echo"<pre>";

//Criando uma variavel com dados Dinâmicos que exe cuta do $cmd e retorna pro zero(eu acho)!
		$comando = system($cmd,  $retorno);
         //Abaixo vc irá mostrar as informações do ms dos no navegador com php usando o comando abaixo!
//Comando para mostrar o status do disco rigido!

		echo"</pre>";
}

?>
<form method="post">

<input type="text" name="cmd">
<button type="submit">Enviar</button>

</form>
