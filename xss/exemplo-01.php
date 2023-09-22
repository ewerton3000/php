<!--Criando um formulário no método post-->
<form method="post">
<!--Criando o input tipo text com nome busca-->
	<input type="text" name="busca">
	<!--Criando um botão do tipo submit com nome enviar-->
	<button type="submit">Enviar</button>

<!--Fechando a tag form-->
</form>
<?php
//Condição se estiver definido o post busca
$_POST['busca']='<a href="#"><strong>OI</a><script>alert("ok")</script>';
if (isset($_POST['busca'])) {

//strip_tags: É uma função que permite algumas tags no echo e post que pode fixa-las na saida do arquivo
	//echo strip_tags($_POST['busca'],"<strong><a>");

    //htmlentites():É uma função que converte a identidade html ele transforma o post em uma linha de html comun como se o codigo de html não tivesse funcionando(ou seja vc vê ele puro na tela)
	echo htmlentities($_POST['busca']);
}

?>