<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comentando...</title>
</head>
<body>
 
<?php
$nome = $_POST["nome"];
$mensagem = $_POST["mensagem"];
$msg =  "<table height='50' width='259' align='center'><tr><td bgcolor='#d9e6f7'><div align='center'><font color='#000000'><strong>Nome:</strong> $nome</font></div></td></tr>";
$msg .= "<tr><td bgcolor='#d9e6f7'><div align='center'><font color='#000000'><strong>Comentario:</strong> $mensagem</font></div></td></tr>";
$msg .= "</table>";
                $ponteiro = fopen ("comentario1.php", "a");
fwrite($ponteiro, "$msg");
fclose ($ponteiro);
include "comentario1.php";
 
?>
</body>
</html>
