<html>
<head>
<title></title>
<body bgcolor="gray">

<?php
// Verificador de sess�o
require "verifica.php";

// Conex�o com o banco de dados
require "comum.php";

// Imprime mensagem de boas vindas
echo "<font face=\"Verdana\" size=2>Bem-Vindo " . $_SESSION["nome_usuario"] . "!<BR>\n";


// Verifica e imprime quantidade de not�cias no nome do usu�rio

$SQL = "SELECT noticiaid
        FROM noticias
        WHERE nivel = " . $_SESSION["id_usuario"];

$result_id = mysql_query($SQL) or die(mysql_error());
$total = mysql_num_rows($result_id);


if($total)
{
    echo "H� um total de " . $total . " not�cia(s) de sua autoria!\n";
}
else
{
    echo "N�o h� nenhuma not�cia de sua autoria!\n";
}

/**
* Verifica se usu�rio tem permiss�o para postar novas not�cias.
* Caso positivo, imprime link para postagem de not�cias
*/
if($_SESSION["permissao"] == "S")
{
    echo " | <a href=\"nova.php\">Postar nova not�cia</a>\n";
}

// Imprime link de logout
echo " | <a href=\"sair.php\">Sair do Sistema</a>";

echo "<br><br>\n";

/**
* Imprime as not�cias
*/

$SQL = "SELECT DISTINCT noticiaid, titulo, conteudo, data 
        FROM noticias
        INNER JOIN usuarios
        ON noticias.nivel = " . $_SESSION["id_usuario"];

  
       
$result_id = mysql_query($SQL) or die(mysql_error());
$total = mysql_num_rows($result_id);

if($total)
{
    // Abre tabela HTML
    echo "<table border=1 cellpadding=3 cellspacing=0>\n";
    echo "<tr><th>Ticket</th><th>Chamado</th><th>Detalhe do Chamado</th><th>Data / Hora</th></tr>\n";

    // Efetua o loop no banco de dados
    while($dados = mysql_fetch_array($result_id))
    {

     $link = $dados['titulo'];

     echo "<tr>";
     echo "<td>" . $dados['noticiaid']. "</td>";
     echo "<td>";

     echo "<a href='comentario.html'>$link</a>";

     echo "</td>";

     
     echo "<td>" . $dados['conteudo']. "</td>";

     echo "<td>" . $dados['data']. "</td>";
     echo "</tr>";

        }

    // Fecha tabela
    echo "</table>\n";
}
else
{
    echo "<B>Nenhuma not�cia cadastrada!</B>\n";
}
?>
</body>
</html>