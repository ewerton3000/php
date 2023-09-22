<?php
//include "inc/exemplo-01.php";
//include:Essa função serve para incluir um arquivo com outro exemplo: include"exemplo-01.php" dentro do exemplo-02.php passando a função de um arquivo pro outro.O include tenta funcionar mesmo que o arquivo exista ou esteja com algum tipo de problema,ele tem mais recursos que o require ,ele possui um diretorio chamado include path que permite que o include traga os arquivos direto da path.
//obs:Quando acontecer um erro será mostrado no navegador lá ele mostrará em qual arquivo deu esse erro!
//require "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
//require_once:Tem a mesma caracteristica do require mas ele evita do arquivo  ser chamado duas vezes(acho que pode evitar colisão de arquivos)ou seja ele chama uma vez o arquivo  e não precisa fazer outra chamada de arquivo.
//OBS:Repare que tem dois require_once acima mas ele funciona do mesmo jeito ele continua funcionando como se tivesse um ,mas no require ele mostraria como erro fatal que fez uma execução e quando fez a segunda chamada ele deu erro.
//require:É uma função semelhante ao include mas ele obriga que o arquivo que voce está incluindo exista e que esteja funcionando corretamente se o arquivo não existir ou não estiver correto o require gera um erro fatal.
$resultado = somar(10,25);
echo $resultado;
?>