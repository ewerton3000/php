<?php
//cookie:É uma ferramenta que existe em todos os navegadores onde ele armazena todos os dados de formulario e vc consegue acessar o seu usuario e senha diretamente sem precisar digita-lo novamente!

//criando um array para armazena-lo no cookie
$data = array("empresa"=>"Hcode Treinamentos"
	
);
//guardando os dados dentro da função setcookie e mostra-lo em json_encode()
//exemplo:setcookie("nome do cookie",json_encode($variavel),time()+ tempo em segundos)
setcookie("NOME_DO_COOKIE",json_encode($data),time()+ 3600);
//confirmando que deu tudo certo com echo
echo"OK";

//Vc pode ver o cookie no navegador com f12(fn+f12 no navegador) entre em Application no lado esquerdo vc verá cookies clique nele e mostrará outra opção abaixo(no caso o localhost) e do lado direito ele mostra oo cookie usado na pagina de quem que gravou e quando ele expira(isso pode ser feito em qualquer tipo de pagina teste depois isso)
?>