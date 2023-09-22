<?php
$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';
$data = json_decode($json , true);
//A função json_decode faz com que o json se transforme em um array!Dentro da variavel $data = json_decode($json , true); se ele vier true mostrará com o array no var_dump abaixo e se ele não tiver true ele virá um objeto!
var_dump($data);
?>