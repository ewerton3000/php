<?php
//Get é usado para usar os dados na url e separa-las em um array associativo

//Por exemplo 127.0.0.1/get/exemplo-01.php?nome=Joao    Aqui saira o nome joao no array
//127.0.0.1/get/exemplo-01.php?nome=jefferson&idade=15  Aqui saira o nome jefferson e a idade 30 anos cada em uma posição array e adicione mais um dado com &


$url =$_GET;

var_dump($url);

?>
