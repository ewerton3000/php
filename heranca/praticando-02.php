<?php
class Anakin{
	public $forca;
	public $espada;

	public function serJedi(){
	echo"Sendo um jedi";
}
}
class Luke implements Anakin{


}
$luke = new Luke();
echo $luke;

?>
