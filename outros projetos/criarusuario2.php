<?php
$con=mysqli_connect("mysql.hostinger.com.br","u521531706_luck", "luke8859", "u521531706_clien");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO usuarios (nome, login, senha)
VALUES ('$_POST[nome]','$_POST[login]', '$_POST[senha]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

echo "Gravacao feita com sucesso!";

mysqli_close($con);
?>

<html>
<head>
<body>
<a href="index.html">Logar</a>
</body>
<html>