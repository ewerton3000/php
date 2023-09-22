<?php
$file= fopen("texto.txt","w+");

///É possivel colocar os valores dentro de um arquivo!

//tente colocar uma tabuada dentro do arquivo
$a=7;
$b=8;
$c=$a+$b;
$d=9;
$e=3;
$f=$d*$e;
$g= 9*9;

public function multi($i,$m){
for($i=1,$m=0; $i<11;$m++ ){
	if($m==11){$i++;
	$m=0;}
	if($i==11)break;
	echo"$i*$m =".$i*$m."<br>";
}
}

fwrite($file,"$c,$f,$g",multi());

fclose($file);

echo"Arquivo criado com sucesso!";
?>