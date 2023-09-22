<?php
//VC pode errar a conexão abixo apenas com simbolos(como : ou = em lugares errados-> veja no exemplo-02.php da pasta pdo! ) ou nomes errados como(server:locahost123 ,server:dbphp7 "login ,"senha)


$conn = new PDO("sqlsrv:Database=dbphp7;server=LAPTOP-9H600M4N\SQL;ConnectionPooling=0;" , "sa" , "root");


//Iniciando uma transação!
$conn->beginTransaction();


$stmt = $conn->prepare ("DELETE FROM tb_usuarios WHERE idusuario = ?");
//Pode acontecer erros como espaços nas variaveis dentro do stmt como no ID que ficou como : ID e o php não entedia a variavel!


//VALUES(:LOGIN, :PASSWORD)")=Este tipo de valor com Dois pontos : é ´para evitar que os Hackers entrem e vejam facilmente o banco de dados do seu site e isso aumenta a segurança do seu banco de dados!


//Utilizando a id que vai ser alterada abaixo!
$id = 2;

//bindParam() =Serve para ligar o valor atribuido ao banco de dados representando ele depois no php com $ exemplo:
//$stmt->bindParam(":Nome",$nome);


//Usando um parametro paraligar o valor atribuido a id!

$stmt->execute(array($id));

//Caso a transação de errado o sistema fará um rollback(volta como estava antes da transação!)
//$conn->rollback();
//$conn->rollback=É um parametro usado para quando a informação não foi enviada com sucesso ela volta um ponto antes da transação ser feita(é igual quando vc faz uma transação de banco tranfere o dinheiro e o dinheiro não conseguiu ser transferido e o dinheiro volta para a sua conta!

$conn->commit();
//$conn->commit();=É ao contrario do rollback ele confirma se sua ação foi feita com sucesso!


//Informação com echo se executou com sucesso no banco de dados!
//echo"Deletado com rollback!";
echo"Commit feito com sucesso!";
?>