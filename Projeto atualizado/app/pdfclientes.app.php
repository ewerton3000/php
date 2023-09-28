<?php
 session_start();
   //Inclui a classe 'class.ezpdf.php'
   include("../PDF/src/Cezpdf.php");
   include("../includes/mascara.php");
   include("../includes/conecta.php");

   $pdf = new Cezpdf();//iniciando a biblioteca do pdf
   $pdf -> selectFont('pdf-php/fonts/Helvetica.afm');//fonte do pdf
   $pdf -> ezSetMargins(10, 1, 50, 50);//margins do pdf

   $meshoje = date("m");//pegando o mes
   $anohoje = date("Y");//pegnado o ano

  $pdf -> ezText("Clientes cadastrados no mês $meshoje de $anohoje    ", 25, array(justification=> 'center', leading => 5.0));

   //Selecionando todos os clientes cadastrados no mes de hoje
   $sql = "SELECT * FROM `cliente` WHERE month(data_cadastro) = '$meshoje' AND year(data_cadastro) = $anohoje";
   $result = $conn -> query($sql);
   //Comando de repetição, puxnado todos os clientes cadastrados
   while($row = $result-> fetch_assoc()) {
     $nomec = $row['nome_cliente'];
     $cpfc = Mask("###.###.###-##", $row['cpf_cnpj']);
     $empresac = $row['empresa_cliente'];
     $endereco = $row['endereco_cliente'];
     $telefonec = Mask("(##)####-####", $row['telefone_cliente']);
     $emailc = $row['email_cliente'];
     $data = $row['data_cadastro'];
     $datac = date("d / m / Y", strtotime($data));

       $pdf -> ezText("<b>Nome:</b> $nomec", 10, array(justification=> 'left', spacing => 5.0));
       $pdf -> ezText("                                                                                                    <b>CPF:</b> $cpfc", 10, array(justification=> 'left', spacing => 0.0));
       $pdf -> ezText("<b>Empresa:</b> $empresac", 10, array(justification=> 'left', spacing => 2.0));
       $pdf -> ezText("                                                                                                    <b>Telefone:</b> $telefonec", 10, array(justification=> 'left', spacing => 0.0));
       $pdf -> ezText("<b>Email:</b> $emailc", 10, array(justification=> 'left', spacing => 2.0));
       $pdf -> ezText("                                                                                                    <b>Data de cadastro:</b> $datac", 10, array(justification=> 'left', spacing => 0.0));


   }


      $pdf -> ezStream();//Printar o pdf na tela
