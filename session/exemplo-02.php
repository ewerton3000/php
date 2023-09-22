<?php
require_once("config.php");
//session_unset:É uma função que limpa variaveis de sessão mas você para o site continua send oa mesma pessoa!
//session_destroy:É uma função que limpa a variave e remove o usuário se você der um f5 no navegador você fará uma nova sessão dentro do site
//session_unset($_SESSION['nome']);
echo $_SESSION['nome']; 
//session_destroy();
 ?>