<?php
date_default_timezone_set('Etc/GMT+3');
echo date("l");
echo"<br>";
/*date_default_timezone_set('Etc/GMT+3')
este exemplo acima mostra como colocar o fuco horario do brasil com as letras GMT no caso(acho que é o horario mundial) teste com ...-2,-1 0 +1,+2.... para ver o resultado!*/
echo date("l jS \of F Y h:i:s A");
?>