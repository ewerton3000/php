<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/remove-colors.css">
    <script type="text/javascript" src="JS/jQuery.min.js"></script>
    <title>Nanotec</title>
  </head>

  <body>

    <header id='main-head'>
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

      <div class="hero">
        <h1>Bem vindo a <span>NANOTEC<span></h1>
      <video id="movie" autoplay loop source="">
      </div>

      </video>
    </header>

    <main>
      <section class="sobre">
        <h2>SOBRE NÓS</h2>
        <p>A Nanotec é uma empresa que trabalha
           realizando assistencia na área de tecnologia e desenvolvendo
            de projetos. Nas consultorias, focamos em entender o problema
             do cliente e buscar qual a melhor solução, seja a alteração de
              alguma tecnologia que o cliente está utilizando ou o desenvolvimento
               de algo novo, sempre objetivando o retorno do investimento do
               cliente.
      </p>
      </section>
      <section class="servicos">
        <h2>NOSSOS SERVIÇOS</h2>

        <article>
          <img src="images/servicos/BDD.png" alt="">
          <h3>Banco de dados</h3>
          <p>São um conjunto de arquivos relacionados entre si com registros sobre pessoas,
            lugares ou coisas. São de vital importância para empresas e há duas décadas se tornaram a principal
            peça dos sistemas de informação.
             Normalmente existem por vários anos sem alterações em sua estrutura.</p>
        </article>

        <article>
          <img src="images/servicos/REDES.png" alt="">
          <h3>Redes Administrativas</h3>
          <p>Configuração e Elaboração de Projetos personalizados de rede estruturada que garantem
            melhor organização e flexibilidade para a sua empresa, Equipe técnica especializada disponível 24h em
            todos os dias na semana para suporte ou eventuais problemas de rede ou sistemas contratados.</p>
        </article>

        <article>
          <img src="images/servicos/analise.png" alt="">
          <h3>Analise de Sistemas</h3>
          <p>Análise de sistemas é a atividade que tem como finalidade a realização de estudos de processos a
            fim de encontrar o melhor caminho racional para que a informação possa ser processada.</p>
        </article>

        <article>
          <img src="images/servicos/desenvolvimento.png" alt="">
          <h3>Desenvolvimento de Sistemas</h3>
          <p>especialização em desenvolvimento, analisa, projeção, implementa e
            atualização de sistemas de informação.visão de noções de gerenciamento,
            foco na criação de sistemas informatizados: programação de computadores
             e desenvolvimento de softwares para ampliar a capacidade dos recursos do equipamento.</p>
        </article>

        <article>
          <img src="images/servicos/montagem.png" alt="">
          <h3>Montagem e Manutenção</h3>
          <p>É um grande problema possuir um equipamento com lentidão, travando, com vírus ou
              sequer ligando. É por isso que a NanoTec possui os Técnicos mais eficazes e
               altamente qualificados a cuidar desde a montagem de computadores, até a sua formatação,
                reparo, remoção de vírus e muito mais.”</p>
        </article>

        <article>
          <img src="images/servicos/webdes.png" alt="">
          <h3>Criação de Sites</h3>
          <p>Lorem ipsum dolor sit amet pantequat odium dolor amore.</p>
        </article>

      </section>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
