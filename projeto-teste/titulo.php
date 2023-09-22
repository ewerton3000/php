<html>
<head>
<title></title>
<body bgcolor="gray">

<?php


$con=mysqli_connect("mysql.hostinger.com.br","u521531706_luck", "luke8859", "u521531706_clien");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


session_start();

if ($_SESSION["id_usuario"] == 2)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel, data)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '2', NOW())";
}

if ($_SESSION["id_usuario"] == 3)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '3')";
}

if ($_SESSION["id_usuario"] == 4)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '4')";
}

if ($_SESSION["id_usuario"] == 5)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '5')";
}

if ($_SESSION["id_usuario"] == 6)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '6')";
}

if ($_SESSION["id_usuario"] == 7)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '7')";
}


if ($_SESSION["id_usuario"] == 8)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '8')";
}


if ($_SESSION["id_usuario"] == 9)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '9')";
}

if ($_SESSION["id_usuario"] == 10)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '10')";
}

if ($_SESSION["id_usuario"] == 11)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '11')";
}

if ($_SESSION["id_usuario"] == 12)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '12')";
}

if ($_SESSION["id_usuario"] == 13)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '13')";
}

if ($_SESSION["id_usuario"] == 14)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '14')";
}

if ($_SESSION["id_usuario"] == 15)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '15')";
}

if ($_SESSION["id_usuario"] == 16)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '16')";
}

if ($_SESSION["id_usuario"] == 17)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '17')";
}


if ($_SESSION["id_usuario"] == 18)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '18')";
}


if ($_SESSION["id_usuario"] == 19)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '19')";
}

if ($_SESSION["id_usuario"] == 20)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '20')";
}

if ($_SESSION["id_usuario"] == 21)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '21')";
}

if ($_SESSION["id_usuario"] == 22)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '22')";
}

if ($_SESSION["id_usuario"] == 23)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '23')";
}

if ($_SESSION["id_usuario"] == 24)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '24')";
}

if ($_SESSION["id_usuario"] == 25)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '25')";
}

if ($_SESSION["id_usuario"] == 26)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '26')";
}

if ($_SESSION["id_usuario"] == 27)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '27')";
}


if ($_SESSION["id_usuario"] == 28)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '28')";
}


if ($_SESSION["id_usuario"] == 29)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '29')";
}

if ($_SESSION["id_usuario"] == 30)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '30')";
}



if ($_SESSION["id_usuario"] == 31)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '31')";
}

if ($_SESSION["id_usuario"] == 32)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '32')";
}

if ($_SESSION["id_usuario"] == 33)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '33')";
}

if ($_SESSION["id_usuario"] == 34)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '34')";
}

if ($_SESSION["id_usuario"] == 35)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '35')";
}

if ($_SESSION["id_usuario"] == 36)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '36')";
}

if ($_SESSION["id_usuario"] == 37)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '37')";
}


if ($_SESSION["id_usuario"] == 38)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '38')";
}


if ($_SESSION["id_usuario"] == 39)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '39')";
}


if ($_SESSION["id_usuario"] == 40)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '40')";
}

if ($_SESSION["id_usuario"] == 41)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '41')";
}

if ($_SESSION["id_usuario"] == 42)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '42')";
}

if ($_SESSION["id_usuario"] == 43)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '43')";
}

if ($_SESSION["id_usuario"] == 44)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '44')";
}

if ($_SESSION["id_usuario"] == 45)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '45')";
}

if ($_SESSION["id_usuario"] == 46)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '46')";
}

if ($_SESSION["id_usuario"] == 47)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '47')";
}


if ($_SESSION["id_usuario"] == 48)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '48')";
}


if ($_SESSION["id_usuario"] == 49)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '49')";
}


if ($_SESSION["id_usuario"] == 50)
{
$sql="INSERT INTO noticias (titulo, conteudo, nivel)
VALUES ('$_POST[titulo]','$_POST[conteudo]', '50')";
}




if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

echo "Chamado Registrado!";

mysqli_close($con);

error_reporting(E_ALL ^ E_DEPRECATED);
?>

<a href="index2.php">Verificar</a>
</body>
<html>