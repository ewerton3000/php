
//Ação quando o botão enviar comentário for usado e a página terá atualização assíncrona pela id(#form1) do arquivo index.php
$('#form1').submit(function(e){
  e.preventDefault();

  var u_name = $('#name').val();//Pegando o valor inserido na caixa nome
  var u_comment = $('#comment').val();//Pegando o valor inserido na caixa comentário

  //console.log(u_name,u_comment);Inserindo as variaveis u_name e u_comment para exibir os seus valores e use como teste
  
  //Usando o AJAX
  $.ajax({
    url:'inserir.php',//Usando os comandos do arquivo
    method: 'POST',//Usando o método post
    data:{name: u_name,comment:u_comment},//Usando as variaveis correspondentes
    dataType: 'json'//Tipo de dados json
  }).done(function(result){   //Função ou método para mostrar se a requisição foi feita com sucesso

    $('#name').val('');//Quando clicar em enviar comentário a caixa do nome vai ser limpa
    $('#comment').val('');//Quando clicar em enviar comentário a caixa de comentário vai ser limpa
    console.log(result);
    getComments();//Executando a função para fazer a atualização assíncrona  com os comentários
  });

});

//Método para pegar comentários
function getComments(){
  $.ajax({
   url:'selecionar.php',//Usando os comandos do arquivo
   method:'GET',//Usando o método GET
   datatype:'json' //Tipo de dados json
 }).done(function(result){ //Função ou método para mostrar a requisição
   console.log(result);
   
   //Usando o for para percorrer o array usando o parâmetro lenght
   for (var i = 0; i < result.length; i++ ){
    //O html abaixo será mostrado com os arrays com a função prepend()
    //OBS: Repare que o result está no meio do html para mostrar os dados da tabela comments  e usando o [i] para mostrar os arrays
   $('.box_comment').prepend('<div class= "b_comm"><h4>'+ result[i].name +'</h4><p>'+ result[i].comment +'</p> </div>')
     
   }
   
   
   
  

 });
}

getComments();//Executando a função 