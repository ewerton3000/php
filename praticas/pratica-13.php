<?php
$a=500;
$b=20;


if ($a >=100 && $b>=100) {
	echo"$a e $b está entre 100  <br>";
}
if ($a >=100 && $a>=200) {
	echo"$a  está entre 100 e 200 <br>";
}
if ($b >=100 && $b>=200) {
	echo"$b  está entre 100 e 200 <br>";
}

if ($a<=200 && $a>=100) {
	echo" $a estão entre  100 e 200 <br>";
}

if ($b>=100) {
	echo"$b estão entre 100 <br>";
}
if ($a<=200&&$a>=100) {
	echo"$a  está entre 100 e 200 <br>";
}
if ($b<=200 && $b>=100) {
	echo"$b está entre 100 e 200 <br>";
}
else{
	echo"$a e $b não estão entre 100 e 200";
}



?>

