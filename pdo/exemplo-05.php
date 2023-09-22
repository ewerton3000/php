<?php
//VC pode errar a conexão abixo apenas com simbolos(como : ou = em lugares errados-> veja no exemplo-02.php da pasta pdo! ) ou nomes errados como(server:locahost123 ,server:dbphp7 "login ,"senha)
$conn = new PDO("sqlsrv:Database=dbphp7;server=LAPTOP-9H600M4N\SQL;ConnectionPooling=0;" , "sa" , "root");

$stmt = $conn->prepare ("DELETE FROM tb_usuarios WHERE idusuario = :ID");
//Pode acontecer erros como espaços nas variaveis dentro do stmt como no ID que ficou como : ID e o php não entedia a variavel!

//DELETE:Serve para deletar os dados de uma id só que ele deleta a id por inteiro ou seja nome,endereço,usuario,senha, então use-o apenas para apagar todos os dados por completo e ele nunca pode ser usado sem o WHERE!]
//exemplo
//$stmt =$conn->prepare("DELETE FROM =(de onde)tabela where idpessoa =:ID ");



//VALUES(:LOGIN, :PASSWORD)")=Este tipo de valor com Dois pontos : é ´para evitar que os Hackers entrem e vejam facilmente o banco de dados do seu site e isso aumenta a segurança do seu banco de dados!

//inserindo novos dados as linhas selecionadas!

//Utilizando a id que vai ser alterada abaixo!
$id = 1;

//bindParam() =Serve para ligar o valor atribuido ao banco de dados representando ele depois no php com $ exemplo:
//$stmt->bindParam(":Nome",$nome);


//Usando um parametro paraligar o valor atribuido a id!
$stmt->bindParam(":ID",$id);
$stmt->execute();

//Informação com echo se executou com sucesso no banco de dados!
echo"Deletado com sucesso!";
?>