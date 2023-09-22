<?php

//Iniciando a sessão
session_start();

//Se o usuario não estiver logado
if (!isset($_SESSION['usuario'])) {
	header('Location: index.php?erro=1');
}

//Requerimento do SQL no arquivo
require_once('db.class.php');

$nome_pessoa = $_POST['nome_pessoa'];//Pegando o nome digitado na procura
$id_usuario = $_SESSION['id_usuario'];

$objDb = new db();
$link = $objDb->conecta_mysql();

//Consulta no SQL onde o usuario é igual ao nome digitado($nome_pessoa) e for diferente do usuario logado(ou seja quando vc estiver logado no sistema não achrá vc msm na pesquisa )
//OBS:usando o like se o nome não estiver completo irá mostrar os nomes equivalentes com o quem a pesssoa procure e a porcentagem(%)  

//Usando o LEFT JOIN
$sql = "SELECT u.*, us.* ";
$sql.=" FROM usuarios AS u ";
$sql.=" LEFT JOIN usuarios_seguidores AS us ";
$sql.=" ON(us.id_usuario = $id_usuario AND u.id = us.seguindo_id_usuario)";
$sql.=" WHERE u.usuario like '%$nome_pessoa%' AND u.id <> $id_usuario";


 $resultado_id = mysqli_query($link,$sql);//Armazenando a query dentro da variavel

//echo $sql;<- Teste para ver a execução no SQL

 //Se a variavel existir
 if($resultado_id){
 	//Enquanto a query for executada  ira fazer uma associa-la a id selecionada
      while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
      	//var_dump($registro);
      	//echo'<br/><br/>';

      	//Aqui abaixo a consulta será exibida nas tags correspondentes da página home.php
      	echo'<a href="#" class="list-group-item">';
            //
        echo'<strong>'.$registro['usuario'].'</strong> <small> - '.$registro['email'].' </small>';
        echo'<p class="list-group-item-text pull-right">';

          //Armazenando a condição na variavel
        //condição:Se o array $registro está com o id_usuario_seguidor está preenchido(ou seja se a pessoa está seguindo o usuário e senão estiver vazio ) se estiver seguindo o sim ='S' será mostra senão o não 'N'
        $esta_seguindo_usuario_sn = isset($registro['id_usuario_seguidor']) && !empty($registro['id_usuario_seguidor']) ? 'S' : "N";
            
            //Armazenando a ação block para os botões seguir e deixar de seguir
            $btn_seguir_display = 'block';
            $btn_deixar_seguir_display = 'block';

            //Se a resposta acima for não 
        if ($esta_seguindo_usuario_sn == 'N') {
             $btn_deixar_seguir_display ='none';
        }
        else{
          $btn_seguir_display ='none';
        }
            

        //Quando o seguir for clicado o botão fará ação de pegar a id do usuario pelo = data-id_usuario e o display de ambos  terá ação correspondente com as condições acima
        echo'<button type="button" id="btn_seguir_'.$registro['id'].'"style="display:'.$btn_seguir_display.'" class="btn btn-default btn_seguir" data-id_usuario="'.$registro['id'].'">Seguir</button>';//Criando o botão seguir


        echo'<button type="button" id="btn_deixar_seguir'.$registro['id'].'" style="display:'.$btn_deixar_seguir_display.'"class="btn btn-primary btn_deixar_seguir" data-id_usuario="'.$registro['id'].'">Deixar de Seguir</button>';//Criando o botão deixa de seguir OBS:Usando o display non para deixar o botão invisível
        echo"</p>";
        echo'<div class="clearfix"></div>';//Acertando a posição do botão seguir
        echo"</a>";
      }
 }

//Senão
 else{

 	echo"Houve um erro na consulta de usuarios no banco de dados";
 }

?>

<!--
small:



like e porcentagem:O like serve para vc fazer uma pesquisa no SQL de um nome por exemplo de um usuario por exemplo,usando a porcentagem do  lado da  variavel (like '%$usuario') para procurar ou seja ele achava pra vc com uma parte de caracteres e ele envia pra vc os nomes com base que vc digitou (exemplo: ao = joao lipe= felipe) se for na esquerda ele busca da direita pra esquerda , se estiver na direita(like'$usuario%') ele busca da esquerda pra direita o nome e se tiver duas porcentagens (like '%$usuario%')ele irá procurar das duas maneiras

html atributo data:
-->