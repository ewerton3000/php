<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];


 if(!$adm){
   session_destroy();
   header("Location: ../");
 } else{
   include "../../includes/head.php";
}
 ?>


  <body class="blue">

    <header>
       <nav>
       <a href="../../" class="nanotec">NANOTEC</a>
       <a onclick="menui()"><i class="fas fa-bars"></i></a>
       <ul id="menul">
         <a href="paineladm.view.php" class="onthis">PAINEL</a>
         <a href="../../">SOBRE NÓS</a>
       </ul>
     </nav>
    </header>

  <main>
    <div class="box painel">
      <h2>Bem vindo a <span>NANOTEC</span>: <br> <?php echo"$nome"; ?> </h2>
    <a href="equipestemp.view.php" >Registrar equipe</a>
    <a href="altadm.view.php" >Configurações da conta</a>
    <a href="../Cadastro/cadfuncionario.view.php" >Registrar funcionario</a>
    <a href="equipeescolha.view.php" >Configurações de equipes</a>
    <a href="../../app/pdfclientes.app.php" >Gerar PDF Clientes</a>
    <a href="../../app/pdfequipes.app.php" >Gerar PDF Equipes</a>
    <a href="clienteescolha.view.php" >Configurações de clientes</a>
    <a href="../../app/logout.app.php" >Log Out</a>
    </div>
  </main>
  </body>
</html>
