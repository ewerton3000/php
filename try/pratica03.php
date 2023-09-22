<?php

function soma($c){

if($c==12){
	throw new Exception("Soma exata "."<br>");
	
}
else{
	echo"Soma errada"."<br>";
}

}
try{
	//Neste caso abaixo se a primeira opção estiver certa com o if ele não mostrará os outros numeros do segundo pra baixo mas se as opçõess erradas vierem primeiro elas serão mostrada até ter uma opção correta!
	soma(6+8);
	
	soma(5+7);

}
catch(Exception $e){
echo $e->getMessage();
}
finally{
	echo"<br>"."Executado com sucesso!";
}
?>