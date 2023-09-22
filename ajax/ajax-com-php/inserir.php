<?php
    header('Content-Type: application/json');//

    $name = $_POST['name'];//Pegando os valores do name pelo método post
    $comment = $_POST['comment'];//Pegando os valores do comentário pelo método post
    
    //Conexão com o banco de dados
    $pdo = new PDO('mysql:host=localhost; dbname=bd-comment-video;','root', '');
    
    //Inserindo o nome e o comentário na tabela comments no SQL
    $stmt  = $pdo->prepare('INSERT INTO comments (name,comment) VALUES(:na, :co)');
    
    $stmt->bindValue(':na' , $name);//Pegando o bindValue(:na) para inserir o valor da variavel($name)
    $stmt->bindValue(':co' , $comment);//Pegando o bindValue(:co) para inserir o valor da variavel($comment)
    $stmt->execute();//Executando a query
    
    //Se a contagem de linhas(rowCount) for maior ou igual a 1 
    if($stmt->rowCount() >= 1){
   echo json_encode('Comentário salvo com sucesso');//Exibirá a mensagem com json_encode
    }
    else{
     echo json_encode('Falha ao salvar comentário');//Exibirá a mensagem com json_encode
    }


//O json_encode é a melhor forma de mostrar echos do php pro javascript e as mensagens aparecerão pelo console do ferramentas de programador do navegador
?>

