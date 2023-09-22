<?php 
$a= 10;
$b=20;
$c=6;
//pre incremento ++$a neste caso começa como o valor somando mais 1 será mostrado o resultado da soma
//pos incremento $a++ Neste caso o valor será mostrado normalmente mas se usar outro echo para mostra-lo de novo será somado com +1 exemplo abaixo.
//pre decremento --$a aqui terá uma subtração com -1 no  valor da variavel quando for executado exemplo $a=19; echo--$a; resultado=18.
//pos decremento $a-- aqui terá uma subtração com -1 no valor depois de ser mostrado exemplo $a=20; echo$a-- resultado:20 echo $a; resultado=19.
echo++$a;
echo"<br>";
echo $b++;
echo"<br>";
echo $a;
echo"<br>";
echo $b;
echo"<br>";
echo--$c;
echo"<br>";
echo $b--;
echo"<br>";
echo"$b";
?>