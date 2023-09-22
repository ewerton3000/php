(
	()=>{
	const tabuleiroDOM = document.querySelector("#tabuleiro");//Constante chamada tabuleiroDOM
	var tabuleiro = []//criando uma variavel tabuleiro
    
    //Usando o for um for para contar as linhas e um for para contar as colunas
	for(let i = 0; i<8; i++){ //Aqui irá percorrer os números de 1 a 8
		for(let j = 0; j<8; j++){//Aqui irá percorrer os
          let quadrado = document.createElement('div') //Cada quadrado será criado uma div
          quadrado.setAttribute("id",'i${i}j${j}')//Usando setAttribute para selecionar as ids para diferenciar os quadrados posicionados 
          quadrado.setAttribute("class","quadrado")
          tabuleiroDOM.appendChild(quadrado)
          
          //Se a linha i tiver i resto de 2 for igual a 0
          if(i%2 == 0){
          

          //Se a linha j resto de 2 for igual a 0
            if(j%2 == 0){
            	quadrado.style.backgroundColor = "white"//Background branco
            	quadrado.style.color = 'black'
            
          }
          else{
            quadrado.style.backgroundColor = "black"//Background branco
            	quadrado.style.color = 'white'
          }
        }
        else{
           if(j%2 == 0){
            	quadrado.style.backgroundColor = "black"//Background branco
            	quadrado.style.color = 'white'
            
          }
          else{
            quadrado.style.backgroundColor = "white"//Background branco
            	quadrado.style.color = 'black'
          }


        }

        quadrado.innerHTML = 'i${i}j${j}'

		}
	}
}
)