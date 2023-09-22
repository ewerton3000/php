<?php
 include "../../includes/conecta.php";
  include "../../includes/mascara.php";

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];

}

include "../../includes/head.php";
 ?>

 <body class="blue">

 <header>
   <?php include 'clinav.php'; ?>
 </header>

  <main>
    <div class="box pedidos">
      <h2>Meus pedidos</h2>
      <?php

        $sql = "SELECT * FROM `pedido` WHERE id_cliente = $id ORDER BY status_p desc, data_pedido desc";

        $result = $conn -> query($sql);


        while( $row = $result->fetch_assoc()){
         $cidade = $row['cidade'];
         $endereco = $row['endereco'];
         $tipo_pedido = $row['tipo_pedido'];
         $observacao = $row['observacao'];
         $data_pedido = $row['data_pedido'];
         $newDate = date("d/m/Y", strtotime($data_pedido));
         $status_p = $row['status_p'];
         $id_cliente = $row['id_cliente'];
         $id_equipe = $row['id_equipe'];
         $id_pedido = $row['id'];

                if($status_p == 'andamento'){
        $sqlo = "SELECT * FROM `equipe` WHERE id_equipe = $id_equipe";
        $resulto = $conn -> query($sqlo);
        if($col = $resulto -> fetch_assoc()){
          $equipe = $col['nome_da_equipe'];
          $equipemail = $col['email_equipe'];
          $equipefone = $col['telefone_equipe'];
                  echo"
                <div class='pedido'>
                  <p><b>Tipo de pedido:</b> <br>  $tipo_pedido</p>
                  <p><b>Endereço:</b> <br>  $endereco</p>
                  <p><b>Observação:</b> <br>  $observacao</p>
                  <p><b>Data do pedido:</b> <br>  $newDate</p>
                  <p><b>Status do pedido:</b> <br>  $status_p</p>
                  <p><b>Equipe:</b> <br>  $equipe</p>
                  <p><b>E-mail da Equipe:</b> <br>  $equipemail</p>
                  <p><b>Telefone da Equipe:</b> <br>  $equipefone</p>
                </div>";

        }
      }else if($status_p == 'aberto'){

              echo"
              <div class='pedido'>
                <p><b>Tipo de pedido:</b> <br>  $tipo_pedido</p>
                <p><b>Endereço:</b> <br>  $endereco</p>
                <p><b>Observação:</b> <br>  $observacao</p>
                <p><b>Data do pedido:</b> <br>  $newDate</p>
                <p><b>Status do pedido:</b> <br>  $status_p</p>
              </div>";
            }//FIM else;
    else if($status_p == 'concluido'){

            echo"
            <div class='pedido'>
              <p><b>Tipo de pedido:</b> <br>  $tipo_pedido</p>
              <p><b>Endereço:</b> <br>  $endereco</p>
              <p><b>Observação:</b> <br>  $observacao</p>
              <p><b>Data do pedido:</b> <br>  $newDate</p>
              <p><b>Status do pedido:</b> <br>  $status_p</p>
              <form action='../../app/gerarpdf.app.php' method='POST'>
              <input type='hidden' name='id_pedido' value='$id_pedido'/>
              <button type='submit'>Gerar Ordem de Serviço</button>
              </form>

            </div>";}
    }//FIM while;
        ?>

    </div>
  </main>
