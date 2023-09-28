<?php
 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 }
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];


 include "../../includes/head.php";
 ?>

 <body class="blue">

 <header>
   <?php include "clinav.php"; ?>
 </header>

 <main>

   <form class="box login" action="../../app/registropedido.app.php" method="post">
   <h2>Fazer pedido:</h2>

  <input type="text" name="cidadep" autocomplete="off"  placeholder="Cidade" required>
  <input type="text" name="estadop" autocomplete="off"  placeholder="Estado" required>
  <input type="text" name="ruap" autocomplete="off"  placeholder="Rua" required>
  <input type="text" name="numerop" autocomplete="off"  placeholder="Numero" required>
  <input type="text" name="complementop" autocomplete="off"  placeholder="Complemento(opcional)"> <br>

  <select name="tipop" required>
    <option value="#">Tipo do pedido</option>
    <option value="bancodedados">Banco de dados</option>
    <option value="redes">Redes</option>
    <option value="analise">Analise de sistemas</option>
    <option value="desenvolvimento">Desenvolvimento de sistemas</option>
    <option value="montagem">Montagem e manutenção</option>
    <option value="sites">Site</option>
  </select> <br>

  <p>
  <label>Detalhes do pedido:</label> <br> </p>
  <textarea name="observacaop" placeholder="Detalhes do pedido:" required></textarea>


 <br>  <button type="submit" name="button">Enviar</button>
 <a href="painelcliente.view.php">Voltar</a>
</form>
</main>

</body>
