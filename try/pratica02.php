<?php
function soma($a){
	
	if($a==7){
		throw new Exception("numero certo"."<br>", 412);
		
	}
	
	else{
         echo "numero errado"."<br>";
		
}
}
try{
	soma(8);
	soma(5);
	soma(18);
	soma(9);

}
catch(Exception $e){
echo $e->getMessage();
}
Finally{
	echo "Executou o try";
}



/*$a=3;
	$b=5;
	$c=$a+$b;*/
?>