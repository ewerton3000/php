<?php
    header('Content-Type: application/json');//Este comando é para fazer os json abaixo sairem no formato json

    
    //Conexão com o banco de dados
    $pdo = new PDO('mysql:host=localhost; dbname=bd-comment-video;','root', '');
    
    //Selecionando os nomes e os comentários na tabela comments no SQL
    $stmt  = $pdo->prepare('SELECT * FROM comments');
    
    $stmt->execute();//Executando a query
    
    //Se a contagem de linhas(rowCount) for maior ou igual a 1 
    if($stmt->rowCount() >= 1){
        //Exibirá a mensagem com json_encode,mostra a query transformando todas as linhas da tabela em arrays com fechtALL e usa o PDO::FECHTASSOC para mostrar os números assciados aos arrays(0,1,2...)
        //OBS:OS arrays serão mostrados dentro do console (ferramenta de programador)
   echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    else{
     echo json_encode('Nenhum comentário encontrado');//Exibirá a mensagem com json_encode
    }
