
<?php

 include "../../includes/conecta.php";
 include("../../PDF/src/Cezpdf.php");

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $chave = $_SESSION['chave'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];
 $somavalores = [];
 $datahoje = date('d/m/y');

}
include "../../includes/head.php";
include "../../includes/mascara.php";

$pdf = new Cezpdf();
$pdf -> selectFont('pdf-php/fonts/Helvetica.afm');

 $sql = "SELECT * FROM `pedidos_completos` WHERE cliente_id = '$id' order by id";
 if($result = $conn -> query($sql)){
   // echo "deu certo";
 }else{
   // echo "deu errado";
 }

 $pdf -> ezText("PEDIDOS FEITOS", 12, array(justification=> 'center', spacing => 1));
 $pdf -> ezText("$datahoje ", 12, array(justification=> 'right', spacing => 0));

 while($row = $result -> fetch_assoc()){
   $valorp = $row['valor'];
   $equipe = $row['equipe_id'];
   $pedido = $row['pedido_id'];

   $sqlc = "SELECT * FROM equipe WHERE id_equipe = '$equipe'";
   if($resultc = $conn -> query($sqlc)){
     while($rowc = $resultc -> fetch_assoc()){ $nome_da_equipe = $rowc['nome_da_equipe']; }
     echo "<br>$nome_da_equipe";
   } else {
     echo 'naopuxoucliente';
   }

   $sqlp = "SELECT * FROM pedido WHERE id = '$pedido'";
   if($resultp = $conn -> query($sqlp)){
     while($rowp = $resultp -> fetch_assoc()){ $tipo_servico = $rowp['tipo_pedido']; }
     echo "<br>$tipo_servico";
   } else {
     echo 'naopuxoupedido';
   }

 // Linha 1 ------------------
 $pdf -> ezText("      <b>EQUIPE QUE REALIZOU O SERVIÇO:</b>", 9, array(justification=> 'left', spacing => 5));
 $pdf -> ezText("                                                                       $nome_da_equipe", 9, array(justification=> 'left', spacing => 0));

 //Linha 2 --------------
 $pdf -> ezText("      <b>TIPO DO SERVIÇO:</b>", 9, array(justification=> 'left', spacing => 2.1));
 $pdf -> ezText("                                         $tipo_servico", 9, array(justification=> 'left', spacing => 0));

 //Linha 3 --------------
 $pdf -> ezText("      <b>VALOR DO SERVIÇO:</b>", 9, array(justification=> 'left', spacing => 2.1));
 $pdf -> ezText("                                              $valorp", 9, array(justification=> 'left', spacing => 0));


array_push( $somavalores, $valorp );
 }

 for ($i=0; $i < count($somavalores); $i++) {
   $somavalores = str_replace(',', '', $somavalores);
   $somavalores = str_replace('.', '', $somavalores);
   $somavalores = array_sum($somavalores);
 }

 $pdf -> ezText("Valor total gasto em pedidos $nome:", 9, array(justification=> 'center', spacing => 4));
 $pdf -> ezText("R$$somavalores", 9, array(justification=> 'center', spacing => 1));


 $pdf -> ezStream();


 ?>
