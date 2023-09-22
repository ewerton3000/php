<?php
require_once("config.php");

echo session_save_path();
echo"<br>";
var_dump(session_status());
echo"<br>";
//Abaixo veremos se a sessão esta ativa ou não ou nenhuma pode existir com switch case e session_status:que mostra o status da sessão atual! 
switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo "As sessões estiverem desabilitadas";
	break;
	case PHP_SESSION_NONE:
	echo "As sessões estiverem habilitadas , mas nenhuma existir";
	break;
	case PHP_SESSION_ACTIVE:
	echo "As sessões estiverem habilitadas, e uma existir";
	break;
}
?>