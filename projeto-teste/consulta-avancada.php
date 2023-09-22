<?php
/**
 * PHP e MySQL para iniciantes
 *
 * Arquivo com um exemplo de consulta avançada ao banco de dados MySQL
 *
 * PHP 5+, MySQL 4.1+
 *
 * @author Thiago Belem <contato@thiagobelem.net>
 * @link http://blog.thiagobelem.net/mysql/php-e-mysql-para-iniciantes-consulta-simples/
 */

// Inclui o arquivo que faz a conexão ao banco de dados
require_once('includes/mysqli.php');

// Iremos buscar apenas as notícias da categoria "Esportes"
$categoria = "Esportes"; // Essa variável poderia ter vindo, por exemplo, do $_GET

// Escapa a variável antes de usá-la na consulta (por segurança)
$categoria = $MySQLi->real_escape_string($categoria);

// Monta a consulta SQL para trazer as últimas 10 notícias ativas e que pertençam à categoria específica
$sql = "SELECT
			Noticia.id, Noticia.titulo, aNoticia.conteudo,
			Categoria.nome AS categoria
		FROM `noticias` AS Noticia
			INNER JOIN `categorias` AS Categoria
				ON Categoria.`id` = Noticia.`categoria_id`
		WHERE
			Noticia.`nivel` = 1
			AND
			Categoria.`nome` = '{$categoria}'
		ORDER BY Noticia.`data` DESC
		LIMIT 10";

// Prepara a consulta OU mostra uma mensagem de erro
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

// Faz um loop, passando por todos os resultados encontrados
while ($noticia = $resultado->fetch_object()) {
	// Exibe a notícia dentro de um bloco HTML
	?>

	<h2><?php echo $noticia->categoria; ?> - <?php echo $noticia->titulo; ?></h2>
	<p><?php echo $noticia->descricao; ?></p>
	<p><a href="noticia.php?id=<?php echo $noticia->id; ?>" title="Continue lendo essa notícia">Leia mais &raquo;</a></p>

	<?php
} // while ($noticia = $resultado->fetch_object())

// Exibe o total de registros encontrados
echo "<p>Registros encontrados: {$resultado->num_rows}</p>";

// Libera o resultado para liberar memória
$resultado->free();

?>