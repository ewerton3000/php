<?php
  include "../../includes/head.php";

?>

  <body class="blue">

<header>
  <nav>
    <a href="#" class="nanotec">NANOTEC</a>
    <a onclick="menui()"><i class="fas fa-bars"></i></a>
    <ul id="menul">
      <?php if( isset($_SESSION['id'])){
        if($_SESSION['administrador']) {
        echo "<a href='view/Admin/painelAdm.view.php'><li>PAINEL</li></a>";
        }
        else if ($_SESSION['tipologin'] == 'cliente') {
          echo "<a href='view/Cliente/painelcliente.view.php'><li>PAINEL</li></a>";
          }
        else if ($_SESSION['tipologin'] == 'equipe') {
          echo "<a href='view/Equipe/painelequipe.view.php'><li>PAINEL</li></a>";
          }
        }else{
      echo "
      <a href='view/Cadastro/cadescolha.view.php'><li>REGISTRAR</li></a>
      <a href='view/Login/logescolha.view.php'><li>LOGIN</li></a>
      ";
    }?>
    <a href="#">SOBRE NÓS</a>
    </ul>
  </nav>
    </header>
    <main>

    <div class="box">
      <h2>Obrigado por se registrar! <br> <br> Analisaremos seus dados e entraremos em contato em breve. </h2>
      <a href="../../">Pagina inicial.</a>
    </div>
  </main>
  <script src="../../JS/main.js" charset="utf-8"></script>
</body>
