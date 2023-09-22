<!doctype html>
<html>
<body>
<?php
$arr = array(1,2,3,4);
foreach($arr as &$value){
	$value =$value *3;

}
print_r($arr);
///agora a nossa $arr possui os valores(3,6,9,12)
?>
</body>
</html>