<?php
//escopo local:É aquela variavel só existe naquele arquivo aonde voce criou!Se voce chamar a variavel $nome e der um nome do valor ele aprace mas se mudar de arquivo ela não aparece!O simbolo correspondente do escopo são as chaves{} fora delas temos o escopo global.Quando voce usa global dentro da função voce está dando liberdade para usar a variavel fora do escopo exemplo global $nome 
$nome = "Glaucio";
function teste() {
	global $nome;
	echo $nome;
}
function teste2(){
	$nome = "João";
	echo $nome ."agora no teste 2 ";

}
//Abaixo voce executa a função para aparecer no localhost(navegador) e mostrará os valores das variaveis do escopos.
teste ();
echo "<br/>";

teste2();
?>