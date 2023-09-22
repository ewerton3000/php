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

  <input type="text" name="cidadep" placeholder="Cidade" required>
  <input type="text" name="estadop" placeholder="Estado" required>
  <input type="text" name="ruap" placeholder="Rua" required>
  <input type="text" name="numerop" placeholder="Numero" required>
  <input type="text" name="complementop" placeholder="Complemento(opcional)"> <br>

  <select name="tipop">
    <option value="#">Tipo do pedido</option>
    <option value="bancodedados">Banco de dados</option>
    <option value="redes">Redes</option>
    <option value="analise">Analise de sistemas</option>
    <option value="desenvolvimento">Desenvolvimento de sistemas</option>
    <option value="montagem">Montagem e manutenção</option>
    <option value="sites">Site</option>
  </select> <br>

  <p>
  <label>Detalhes do pedido:</label> <br>
  <textarea name="observacaop" placeholder="Detalhes do pedido:" required></textarea>
</p>

 <br>  <button type="submit" name="button">Enviar</button>
</form>
</main>

</body>
