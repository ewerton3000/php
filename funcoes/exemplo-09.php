<?php
$hierarquia = array(
array('nome_cargo'=>'CEO',
	'subordinados'=>array(
		/*Inicio diretor*/
		array(
			'nome_cargo'=>'Diretor Comercial',
			'subordinados'=>array(
				//Inicio:Gerente de  Vendas
		array(
			'nome_cargo'=> 'Gerente de Vendas'
		)
		//termino gerencia de vendas!
	)
		),
		/*Termino do Diretor comercial*/
		//Inicio: Diretor Financeiro
		array(
        'nome_cargo'=>'Diretor Financeiro',
        'subordinados'=>array(
        	//Inicio :Gerente de Contas a Pagar

        	array(
        		'nome_cargo'=>'Gerente de Contas a Pagar','subordinados'=>array(
        		//Inicio:Supervisor de Pagamentos!
        		array(
                'nome_cargo'=>'Supervisor de Pagamentos'
        		)
        		//Termino:Supervisor de Pagamentos
        	)

        	),

        //termino: Gerente de Contas a Pagar)
        	//Inicio gerente de compras
        	array('nome_cargo'=>'Gerente de Compras',
            'subordinados'=>array(
            	//Inicio:Supervisor de Suprimentos
            	array(
            		'nome_cargo'=>'Supervisor de Suprimentos',
            		'subordinados'=>array(
            			array(
            				'nome_cargo'=>'funcionario')))
            	//termino de Supervisor de suprimentos

            )
        	)
        	//Termino Gerente de Compras

		)
		//Termino Diretor Financeiro
	)
	)
)
);
/*Repare que nos arrays criados neste script voce só usa a virgula no parentese do array que iniciou os outros arrays (olhe bem aonde estão as virgulas e veja a conexão entre os parenteses e use apenas se usar um proximo array em baixo (repare que no ultimo array voce não usa a virgula porque acabou de escrever o ultimo array do script inteiro!)) e usamos a função abaixou para puxar todos os array de uma só vez colocando if(isset) e foreach) */?
function exibe($cargos){
	$html ='<ul>';
	foreach($cargos as $cargo){
		$html.="<li>";
		$html.= $cargo['nome_cargo'];
		if(isset($cargo['subordinados'])&& count($cargo['subordinados']) >0){
			$html.=exibe($cargo['subordinados']);
		}
		$html.="</li>";
	}
	$html.='</ul>';
	return $html;

}
echo exibe($hierarquia);
?>