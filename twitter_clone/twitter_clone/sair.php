<?php
//Arquivo para retirar a sessão do usuário

session_start();//Iniciando a sessão

echo"Até Breve";
echo"<br>";

//A função session_unset() libera todas as variáveis atualmente registradas na sessão.

//Selecionando os dados para o login e desfazendo a variavel superglobal $_SESSION
unset($_SESSION['usuario']);
unset($_SESSION['email']);



echo"Esperamos que vc volte em breve!!!";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Saindo da sessão</title>
</head>
<body>
<a href="index.php">Voltar para a página de autenticação</a>

</body>
</html>