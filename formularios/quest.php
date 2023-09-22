<?php
echo"caminho funcionando";
echo"<br>";
echo"Sua escoha foi :";
echo "".$_POST['capital'];
//Para usar a condicional com o valor da opção(neste caso do  botão radio do html)use if($_POST['name']=='value')!assim voce consegue puxar a opção escolhida e o if mostra o resultado desejado!
if($_POST['capital']=='br'){
	echo"<br>";
	echo "respota certa!";

}
else{
	echo"<br>";
	echo"Resposta errada!";
}
?>