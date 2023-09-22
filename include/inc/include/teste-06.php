<!DOCTYPE html>
<?php
echo"A resposta é  ".$_POST['numero'];
if("".$_POST['numero']== 7){
	echo"<br>";
echo"Resposta Exata é = 7" ;
}
else {
echo"Resposta errada !";}?>