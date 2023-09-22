<form>
<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="ok">
</form>

<?php
//Neste caso foi usado o html com php para usar o foreach para inserir  as informações no formulario do html execute e veja e o resultado.O $_GET puxa o conteudo digitado,armazena e joga na tela de exibição as informações.
if(isset($_GET)){
foreach($_GET as $key => $value){
	echo"nome do campo: ".$key."<br>";
	echo"valor do campo: ".$value;
	echo"<hr>";
}
}