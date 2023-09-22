<?php

$file = fopen("pratica02.txt","w+");

fwrite($file,"Começou o dia muito bem!"."\r"."No entanto a noite fica muito escuro"."\r\n"."Por isso eu não vou sair de casa");
//Para escrever mais texto dentro da função fwrite() vc precisa colocar o ponto depois das aspas como está acima(se vc usar virgula o php detecta como erro) a virgula pode ser usada entre o "\r,\n" exemplo("\r,\n")execute dessa forma e veja o resultado!

fclose($file);

echo"Arquivo criado com sucesso !";
?>