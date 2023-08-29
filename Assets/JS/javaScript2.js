function SomenteNumero2(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>0 && tecla<100)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}


function diaDois(campo) {

if (campo>0 && campo<31){
	return true; 
} else{

alert('Insira o dia correto');
document.getElementById("DiaDebt").value = "";

}
}

function diaDoisDois(campo) {

if (campo>0 && campo<31){
	return true; 
} else{

alert('Insira o dia correto');
document.getElementById("diadiaDois").value = "";

}
}

function diaDois01(campo) {

if (campo>0 && campo<31){
	return true; 
} else{

alert('Insira o dia correto');
document.getElementById("txt_diaPagament").value = "";

}
}


function diaMes(campo) {

if (campo>0 && campo<12){
	return true; 
} else{

alert('Insira o mês correto!');
document.getElementById("mesCorreto").value = "";
document.getElementById("mesCorreto").focus();

}
}
function diaMes2(campo) {

if (campo>0 && campo<24){
	return true; 
} else{

alert('Insira o mês correto!');
document.getElementById("mesCorreto").value = "";
document.getElementById("mesCorreto").focus();

}
}


function MascaraValor(Campo, e) {
		
			// Declaração de Variáveis
			var Numero;
			var Tamanho;
			var Contador;
			var Auxiliar;
			var tecla;
			
			if(window.event)
			{
				tecla = e.keyCode;
			}
			else
			{
				tecla = e.which;
			}
			
			// Verifica Teclas Válidas
			if ((tecla > 47) && (tecla < 58)) 
			{
		
				// Atribuição de Valores às Variáveis
				Numero = Campo.value;
				Tamanho = Numero.length;
				Contador = 0;
				
				if ((Tamanho > 1) && (Tamanho < Campo.maxLength)) {		
					Auxiliar = "";
		
					// Percorre todo os números na ordem inversa
					for (var i = Tamanho; i >= 0; i--) {
					
						// Verifica se o caracter é um número válido.
						if ((parseInt(Numero.substr(i, 1)) >= 0) && (parseInt(Numero.substr(i, 1)) <= 9)) {					
							Contador++;
							
							// Inserção do ponto para separar as casas decimais
							if ((Contador == 2) && ((Tamanho - i) < 4)) {
								Auxiliar = "." + Auxiliar;
								Contador = 0;
								
							// Inserção do vazio no separador de milhares
							} else if (Contador == 3) {
								Auxiliar = "" + Auxiliar;
								Contador = 0;
							}
							
							// Concatena novamente os valores com os separadores.
							Auxiliar = Numero.substr(i, 1) + Auxiliar;
						}
					}
					
					// Retorno da Função
					Campo.value = Auxiliar;
				}
			}
			else
			{
				//e.preventDefault();
				e.returnValue = false;
			}
		}	


 function handleChange(input, campo) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }