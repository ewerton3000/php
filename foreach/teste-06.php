<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Tabela dinâmica com PHP Foreach</title>
	</head>
	<body>
	<table border="1">
	<?php
	$tabela = array
	(
		array("Nome","Sobrenome","Idade"),
		array("Rafael","Filho","25"),
		array("Lucas","Junior","32"),
		array("Maria","Eduarda","27"),
	);
	 foreach ($tabela as $key => $value){ 
	 	if($key==0){
	 		echo"<tr>";
	 		foreach ($tabela  [$key] as $cedula){
	 			echo"<th>".$cedula."</th>";
	 			};
	 		echo"<tr>";
	 	}
	 	
	 	else
	 	{
	 		echo"<tr>";
	 		foreach ($tabela  [$key] as $cedula)
	 		echo"<td>".$cedula."</td>"; 
	 		
	 		};
	 
	 		echo"</tr>";
	 	}
	 	
	 
	



	?>
</table>
</body>
</html>