<?php
$filename = "usuarios.csv";

if(file_exists($filename)){
	//O "r" do fopen significa read(leitura).
	$file = fopen($filename,"r");

//fgets():É uma função que faz leitura do arquivo e mostra suas informações na execução do navegador!
	//explode():É uma função que separa o array e os mostra com virgulas e seus numeros de linha novamente
	$headers = explode(",",fgets($file));


    $data = array();
	//O while irá ler as outras linhas  se não existir mais linhas ele retornará false (ou seja para aqui) e o fgets vai lendo e mostrando os dados do arquivo!
	while ($row = fgets($file)){
		//var_dump($row);
		//criando outro explode para separa os dados
		$rowData = explode(",",$row);
		//Criando outro array.
		$linha = array();
		//Usando a estrutura for para mostrar os dados em posições array(0,1,2,3,4,5,6,7,8,9) ele contará até o limite de dados do headers(até a ultima linha do arquivo usuarios.cvs) e ira as outras linha com i++(passando de linha em linha)!
		for ($i = 0; $i <count($headers) ; $i++) { 
			//Abaixo o $i é igual a 0(0 = idusuario) ai a linha puxa do $headers puxa um array da posição 0 do $i
			//E depois vc puxa o $rowData com a variavel $i

			$linha[$headers[$i]] = $rowData[$i];
		 
		}
		//empurrando o array para executar
		array_push($data,$linha);
	}
	//Fechando a ação do arquivo!
	fclose($file);
     
     //mostrando o array em json_encode!
	echo json_encode($data);
}
?>