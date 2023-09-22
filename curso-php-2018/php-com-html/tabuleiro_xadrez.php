<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabuleiro xadrez</title>
</head>
<body>

	<img src="xadrez.jpg">
<?php
echo'<br/>';
       $tabuleiro[8]['a']= 'Torre preto';
       $tabuleiro[8]['b']= 'Cavalo preto';
       $tabuleiro[8]['c']= 'Bispo preto';
       $tabuleiro[8]['d']= 'Rainha preto';
       $tabuleiro[8]['e']= 'Rei preto';
       $tabuleiro[8]['f']= 'Bispo preto';
       $tabuleiro[8]['g']= 'Cavalo preto';
       $tabuleiro[8]['h']= 'Torre preto';
       
       echo"<br>";
       $tabuleiro[7]['a']= 'peão preto';
       $tabuleiro[7]['b']= 'peão preto';
       $tabuleiro[7]['c']= 'peão preto';
       $tabuleiro[7]['d']= 'peão preto';
       $tabuleiro[7]['e']= 'peão preto';
       $tabuleiro[7]['f']= 'peão preto';
       $tabuleiro[7]['g']= 'peão preto';
       $tabuleiro[7]['h']= 'peão preto';
       
       echo"<br>";
       $tabuleiro[2]['a']= 'Torre branca';
       $tabuleiro[2]['b']= 'Cavalo branco';
       $tabuleiro[2]['c']= 'Bispo branco';
       $tabuleiro[2]['d']= 'Rei Branco';
       $tabuleiro[2]['e']= 'Rainha Branco';
       $tabuleiro[2]['f']= 'Bispo Branco';
       $tabuleiro[2]['g']= 'Cavalo Branco';
       $tabuleiro[2]['h']= 'Torre Branco';


       echo"<br>";
       $tabuleiro[1]['a']= 'Peão branco';
       $tabuleiro[1]['b']= 'Peão branco';
       $tabuleiro[1]['c']= 'Peão branco';
       $tabuleiro[1]['d']= 'Peão branco';
       $tabuleiro[1]['e']= 'Peão branco';
       $tabuleiro[1]['f']= 'Peão branco';
       $tabuleiro[1]['g']= 'Peão branco';
       $tabuleiro[1]['h']= 'Peão branco';
        

      print_r($tabuleiro);
      echo"<br>";
      echo $tabuleiro[8]['d'];
      echo"<br>";
      echo $tabuleiro[8]['g'];
      echo"<br>";
      echo $tabuleiro[7]['b'];


?>
</body>
</html>
