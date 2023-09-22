<?php
session_start();

//Depois de verficar login e senha reinicie o ID da sessão
session_destroy();

//Outro session start pq a outra sessão foi destruida
session_start(); 

//session_regenerate:Como o nome diz ele vai gerar outra id pra sua sessão assim substituindo a id que foi destruida pelo session_destroy()
session_regenerate_id();

echo session_id();

//Em resumo isso fará que sua id de sessão nunca será a mesma assim diminuindo as chances do usuario ter a senha roubada
?>