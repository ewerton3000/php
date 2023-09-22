<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];
 $id = $_SESSION['id'];
 echo "$id";

 if(!$adm){
   session_destroy();
   header("Location: ../");
 } else{
   include "../../includes/head.php";
   include "../../includes/conecta.php";
}
 ?>


  <body class="blue">
    <header>
     <nav>
       <?php include "admnav.php"; ?>
     </nav>
    </header>
    <main>

      <form class="box visor" action="../../app/altadm.app.php" method="post">

        <?php
        $sql= "SELECT * FROM `nanotec` . `funcionario` WHERE id_adm ='$id'";
        $result = $conn -> query($sql);

        if ($row = $result->fetch_assoc()) {
          $nome = $row['nome_adm'];
          $email = $row['email_adm'];
          $usuario = $row['usuario_adm'];
          $senha = $row['senha_adm'];
        }

        echo "
        <form action='../../app/altadm.app.php' method='POST'>
        <p><label>Nome:</label> <br>
        <input type='text' name='nome' value='$nome'/></p>
        <p><label>E-mail:</label> <br>
        <input type='text' name='email' value='$email'/></p>
        <p><label>Usuario:</label> <br>
        <input type='text' name='usuario' value='$usuario'/></p>
        <p><label>Senha:</label> <br>
        <input type='text' name='senha' value='$senha'/></p>
            <br>    <button type='submit'>Alterar</button> <a href='paineladm.view.php'>Voltar</a>"
         ?>
      </form>

    </div>
  </main>

    </body>
