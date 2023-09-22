<?php
//Usando uma variavel superglobal chamada $_POST e usando o isset para testar a variavel se aestá funcionando

//Se o post['nome'] tem conteudo e o nome está vazio
if (isset($_POST['nome']) && empty($_POST['nome'] ) ) {
	echo'Preencha o nome completo<br>';
}

//Se o post['nome'] está com conteudo e o cpf está vazio
if (isset($_POST['cpf']) && empty($_POST['cpf'] ) ) {
	echo'Preencha o CPF <br>';
}

//Se o post['cpf'] tem conteudo e  o cpf não possui números
if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'] ) ) {
	echo'Preencha o CPF com números <br>';
}



?>
<form method="post" action="">

<label>
	Nome Completo*:
<input type="text" name="nome">
</label>

<label>
	CPF*:
<input type="text" name="cpf">
</label>

<input type="submit" value="cadastrar">
</form>