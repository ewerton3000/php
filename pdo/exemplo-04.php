<?php
//VC pode errar a conexão abixo apenas com simbolos(como : ou = em lugares errados-> veja no exemplo-02.php da pasta pdo! ) ou nomes errados como(server:locahost123 ,server:dbphp7 "login ,"senha)
$conn = new PDO("sqlsrv:Database=dbphp7;server=LAPTOP-9H600M4N\SQL;ConnectionPooling=0;" , "sa" , "root");

$stmt = $conn->prepare ("UPDATE tb_usuarios SET deslogin =:LOGIN,dessenha = :PASSWORD WHERE idusuario = :ID");
//Pode acontecer erros como espaços nas variaveis dentro do stmt como no ID que ficou como : ID e o php não entedia a variavel!


//UPDATE:É um comando para o banco de dados para alterar os dados de uma linha da tabela! exemplo:
//$conn = $conn->prepare*("UPDATE tabela SET(escolhe a linha)deslogin =:login,desenha =:password WHERE idusuario=ID(onde vc aponta a coluna das chaves primarias(primary ou secundary)ou secundarias). "); 
//WHERE:Serve para aponta onde os dados serão alterados como no caso acima que aponta uma ID para ser alterada!

//VALUES(:LOGIN, :PASSWORD)")=Este tipo de valor com Dois pontos : é ´para evitar que os Hackers entrem e vejam facilmente o banco de dados do seu site e isso aumenta a segurança do seu banco de dados!

//inserindo novos dados as linhas selecionadas!
$login="joao";
$password="qwerty";
//Utilizando a id que vai ser alterada abaixo!
$id = 5;
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam("PASSWORD",$password);
//bindParam() =Serve para ligar o valor atribuido ao banco de dados representando ele depois no php com $ exemplo:
//$stmt->bindParam(":Nome",$nome);


//Usando um parametro paraligar o valor atribuido a id!
$stmt->bindParam(":ID",$id);
$stmt->execute();

//Informação com echo se executou com sucesso no banco de dados!
echo"Alterado com sucesso!";
?>