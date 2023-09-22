<html>
<head>
<title></title>
<body bgcolor="gray">

<?php
// Verificador de sessão
require "verifica.php";

// Conexão com o banco de dados
require "comum.php";

// Imprime mensagem de boas vindas
echo "<font face=\"Verdana\" size=2>Bem-Vindo " . $_SESSION["nome_usuario"] . "!<BR>\n";


// Verifica e imprime quantidade de notícias no nome do usuário

$SQL = "SELECT noticiaid
        FROM noticias
        WHERE nivel = " . $_SESSION["id_usuario"];

$result_id = mysql_query($SQL) or die(mysql_error());
$total = mysql_num_rows($result_id);


if($total)
{
    echo "Há um total de " . $total . " notícia(s) de sua autoria!\n";
}
else
{
    echo "Não há nenhuma notícia de sua autoria!\n";
}

/**
* Verifica se usuário tem permissão para postar novas notícias.
* Caso positivo, imprime link para postagem de notícias
*/
if($_SESSION["permissao"] == "S")
{
    echo " | <a href=\"nova.php\">Postar nova notícia</a>\n";
}

// Imprime link de logout
echo " | <a href=\"sair.php\">Sair do Sistema</a>";

echo "<br><br>\n";

/**
* Imprime as notícias
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
    echo "<B>Nenhuma notícia cadastrada!</B>\n";
}
?>
</body>
</html>