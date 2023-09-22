<html>
<title>verifica.php</title>
<body>
<?
//condição de texto em italico!
if($italico =="on")
{
	$italico_abre="<i>";
	$italico_fecha="</i>";
}
else{
	$italico_abre="";
	$italico_fecha="";
}
//Escolha do alinhaento ára texto em italico
switch($alinhamento)
{
	//Texto com alinhamento a "esquerda":
	$alinhar="left";
	break;
	//Texto com alinhamento central
	case"centro":
	$alinhar="center";
	break;
	//Texto com alinhamento a "direita"
	case"direita":
	$alinhar="right";
	break;
}
//Identificacao do !numero de repetições