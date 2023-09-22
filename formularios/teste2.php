
<html>
<form action=method="post">
Nome:<input type=text name=nome><br>
endereco:<input type=text name=endereco><br>
idade:<input type=number name=idade><br>
<input type=submit value="ok">
</form>
</html>
<?php

echo"Seu nome é: ".$_POST["nome"];
echo"<br>O seu endereço é:".$_POST["endereco"];
echo"<br>Sua idade é: ".$_POST["idade"];
?>