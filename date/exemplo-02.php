<?php
///$ts = strtotime("2001-09-11");
$ts = strtotime("+1 week");
echo date("l,d/m/Y",$ts);
/*Função strtotime:É uma função que converte uma string STR para o termo timestump(em outras palavras descobre o numero do timestump com a data inserida exemplo abaixo:
echo strtotime("2001-09-11");
Tem maneiras de mostrar o nome do dia(segundafeira) com represanteações de letras como l ou L e pode avançar no dia usando o +1 no na variavel no padrão do servidor local(set locate) exemplo: 
$ts = strtotime("+1 day");
No caso abaixo pula uma semana com a palavra week!
$ts = strtotime("+1 week");*/
?>