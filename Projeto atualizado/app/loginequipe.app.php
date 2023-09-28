<?php
session_start();
include "../includes/conecta.php";
include "../includes/alerthead.php";
//puxando os dados do formluario
$login = $_POST['login'];
$senha = $_POST['senha'];

//puxando do bando de dados se o login e senha estao iguais
if (!ctype_digit($login)) {
    $sql = "SELECT * FROM `equipe` WHERE nome_da_equipe = '$login' && senha_equipe = '$senha';";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {

        $_SESSION['chave'] = $row['chave_equipe'];
        $_SESSION['id'] = $row['id_equipe'];
        $_SESSION['nome'] = $row['nome_da_equipe'];
        $_SESSION['email'] = $row['email_equipe'];
        $_SESSION['cnpj'] = $row['cnpj_equipe'];
        $_SESSION['telefone'] = $row['telefone_equipe'];
        $_SESSION['tipologin'] = 'equipe';

        header("Location:../view/Equipe/painelequipe.view.php");
    } else { ?>

        <div class="box alert">
            <h2>Login ou Senha incorretos!</h2>
            <a href="../view/Login/logequipe.view.php">Tentar novamente</a>
            <a href="../">Pagina inicial.</a>
        </div>
        </main>
        <script src="../JS/main.js" charset="utf-8"></script>
        </body>
    <?php };
}//FIM ctype;


else {
     //verificando se o cliente esta logando com o seu nome ou cpf
    $sql = "SELECT * FROM `equipe` WHERE cnpj_equipe = '$login' && senha_equipe = '$senha';";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {

        $_SESSION['chave'] = $row['chave_equipe'];
        $_SESSION['id'] = $row['id_equipe'];
        $_SESSION['nome'] = $row['nome_da_equipe'];
        $_SESSION['email'] = $row['email_equipe'];
        $_SESSION['cnpj'] = $row['cnpj_equipe'];
        $_SESSION['telefone'] = $row['telefone_equipe'];
        $_SESSION['tipologin'] = 'equipe';

        header("Location:../view/Equipe/painelequipe.view.php");
    } else { ?>

        <div class="box alert">
            <h2>CPF/CNPJ ou Senha incorretos!</h2>
            <a href="../view/Login/logequipe.view.php">Tentar novamente</a>
            <a href="../">Pagina inicial.</a>
        </div>
        </main>
        <script src="../JS/main.js" charset="utf-8"></script>
        </body>
    <?php };
}//FIM else;


?>
