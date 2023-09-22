<?php
namespace Cliente;
//namespace:Usado para  agrupar as classes dentro de um diretório de um forma organizada como criar duas classes no mesmo sistema mas com espaços e atributos diferentes exemplo:
//namespace Nomedapasta;

class Cadastro extends \Cadastro {
	//Para você puxar Uma classe de um arquivo que está na pasta raiz do sistema deve ser usado a barra(\)que irá na pasta raiz e buscará a classe dentro do arquivo.
	public function registrarVenda(){
		echo"Foi registrada uma venda para o cliente ".$this->getNome();

	}

}
?>