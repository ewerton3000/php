<?php
 session_start();
 include "../includes/conecta.php";
 include "../includes/alerthead.php";

  $login = $_POST['login'];
  $senha = $_POST['senha'];

  if (!ctype_digit($login)) {
    echo "$login, $senha";
   $sql = "SELECT * FROM `equipe` WHERE nome_da_equipe = '$login' && senha_equipe = '$senha';";
   $result = $conn -> query($sql);

   if($row = $result->fetch_assoc()){

    $_SESSION['chave'] = $row['chave_equipe'];
    $_SESSION['id'] = $row['id_equipe'];
    $_SESSION['nome'] = $row['nome_da_equipe'];
    $_SESSION['email'] = $row['email_equipe'];
    $_SESSION['cnpj'] = $row['cnpj_equipe'];
    $_SESSION['telefone'] = $row['telefone_equipe'];
    $_SESSION['tipologin'] = 'equipe';

    header("Location:../view/Equipe/painelequipe.view.php");
  }
  else{ ?>

      <div class="box">
        <h2>Login ou Senha incorretos!</h2>
        <a href="../view/login/logequipe.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
<?php };
}//FIM ctype;


  else {

    $sql = "SELECT * FROM `equipe` WHERE cnpj_equipe = '$login' && senha_equipe = '$senha';";
    $result = $conn -> query($sql);

   if($row = $result->fetch_assoc()){

    $_SESSION['id'] = $row['chave_equipe'];
    $_SESSION['id_numero'] = $row['id_equipe'];
    $_SESSION['nome'] = $row['nome_da_equipe'];
    $_SESSION['email'] = $row['email_equipe'];
    $_SESSION['tipologin'] = 'equipe';

    header("Location:../view/Equipe/painelequipe.view.php");
 }
 else{ ?>

     <div class="box">
       <h2>CPF/CNPJ ou Senha incorretos!</h2>
       <a href="../view/login/logequipe.view.php">Tentar novamente</a>
       <a href="../">Pagina inicial.</a>
     </div>
<?php };
}//FIM else;




 ?>
