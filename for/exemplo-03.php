<?php
echo"<select>";
for ($i=date("Y"); $i >= date("Y")-100  ; $i--){

echo '<option value ="'.$i.'">'.$i.'</option>';
}
echo"</select>";

//Isso e um exemplo de como pode usar elementos de html com php !
//Usando o date dentro do laço de repetição usando date("Y") (OBS trocando date("Y")=ano atual e date("y")=dezena do ano atual mas não conte como ano teste para ver)
	?>
