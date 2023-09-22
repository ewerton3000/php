//Função responsável por atualizar as frases
function atualizar()
{
$.post('atualizar.php',function (frase){

	//Exibindo frase
	$('#frase').html('<i>' + frase.texto + '</i><br/>'+frase.autor);
}, 'JSON');
}

//Definido intervalo que a função será chamada
setInterval("atualizar()", 10000);

//Quando carregar a página
$(function(){

	//Faz a primeira atualização
	atualizar();
})