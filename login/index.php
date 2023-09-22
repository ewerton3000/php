<?php

require_once("config.php");



/*
  Usando o SELECT
  Carrega um usuario

$usuario = new Usuario();
$usuario->loadByid(1);
echo $usuario;*/


/*


Usando o SELECT
$lista = Usuario::getList();

echo json_encode($lista);*/

/*
Usando o método search

$search =Usuario::search("tenobio");

echo json_encode($search);
*/




/*Método de login

$usuario = new Usuario();
$usuario->login("tenobio","7777");
echo $usuario;
*/




/*
Método Insert
$aluno = new Usuario("teste","1234","TESTE");
$aluno->insert();
var_dump($aluno);//Por algum motivo quando está sem var_dump no método ou aqui antes do echo ele duplica os dados inseridos
echo $aluno;
*/





/*  PROCEDURE DO INSERT NO SQL  é para fazer o método da classe usando a call na query funcionar

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_insert`(
pdeslogin VARCHAR(200),
pdessenha VARCHAR(200),
pdesnome VARCHAR(200)
)
BEGIN
 INSERT INTO tb_users(deslogin,dessenha,desnome) VALUES(pdeslogin, pdessenha,pdesnome);
    
    SELECT * FROM tb_users WHERE idusuario = LAST_INSERT_ID();
END
*/







/*$aluno = new Usuario("teste","1234","TESTE");

$aluno->insert();
var_dump($aluno);

//O echo estavá executando o método insert duas vezes assim duplicando  os dados inseridos por algum motivo o var_dump evita o processo tanto aqui no index.php e no método insert da classe Usuario.php
*/




/*
Método UPDATE

$usuario = new Usuario();

$usuario->loadByid(77);//Número do id do usuario

$usuario->update("jesse","1122","JESSE");
echo $usuario;
*/




$usuario = new Usuario();
$usuario->loadByid(74);//Selecionando a id
$usuario->delete();
echo $usuario;



?>