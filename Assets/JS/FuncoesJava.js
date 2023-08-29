

function FormataData(campo)
{
	var s=new String();
	var dia = new String();
	var ano = new String();
	var smes =new String();
	var datainteira = new String();
	s = campo.value
	if(s.length ==2){
		dia = s.substr(0,2);
		datainteira = dia + '/';
		campo.value = datainteira;
	}
	if(s.length ==5){
		smes=s.substr(3,2);
		datainteira  = campo.value + '/';
		campo.value = datainteira;
	}
}


//funções criadas por Henrique Ranel
function formataCampo(campo, Mascara, evento) {  
	var boleanoMascara;  
	 
	var Digitato = evento.keyCode; 
	exp = /\-|\.|\/|\(|\)| /g 
	campoSoNumeros = campo.value.toString().replace( exp, "" );  
	
	var posicaoCampo = 0;     
	var NovoValorCampo=""; 
	var TamanhoMascara = campoSoNumeros.length;;  
	 
	if (Digitato != 8) { // backspace  
		for(i=0; i<= TamanhoMascara; i++) {  
				boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".") || (Mascara.charAt(i) == "/"))  
				boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(")  || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))  
				if (boleanoMascara) {  
					NovoValorCampo += Mascara.charAt(i);  
					TamanhoMascara++; 
				}else {  
					NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);  
					posicaoCampo++;  
				  }               
		  }       
		campo.value = NovoValorCampo; 
		  return true;  
	}else {  
			return true;  
	} 
}


function mascaraInteiro(){ 
        if (event.keyCode < 48 || event.keyCode > 57){ 
                event.returnValue = false; 
                return false; 
        } 
        return true; 
} 

function SomenteLetra(letra){
	if(mascaraInteiro(letra)==false){ 
		event.returnValue = true; 
	}
	else{
		event.returnValue = false; 
	} 
}
function SomenteNumeros(num){
	if(mascaraInteiro(num)==false){ 
		event.returnValue = false; 
	}
	else{
		event.returnValue = true; 
	} 
}


//adiciona mascara de cep 
function MascaraRG(rg){ 
        if(mascaraInteiro(rg)==false){ 
				
           event.returnValue = false; 

        }        
        return formataCampo(rg, '00.000.000-0', event); 
} 

function MascaraCep(cep){ 
                if(mascaraInteiro(cep)==false){ 
                event.returnValue = false; 
        }        
        return formataCampo(cep, '00000-000', event); 
} 

function MascaraAgencia(agen){ 
                if(mascaraInteiro(agen)==false){ 
                event.returnValue = false; 
        }        
        return formataCampo(agen, '0000-0', event); 
}

function FormataCPFCNPJ(Campo){
mascaraInteiro();
   if (Campo.value.length <= 11)
       {
       if (Campo.value.length == 3 || Campo.value.length == 7) Campo.value += '.';
   if (Campo.value.length == 11) Campo.value += '-';
   }
       
   if (Campo.value.length == 14){
          if (Campo.value.indexOf("/") != '-1')
          {
           
           Campo.value = Campo.value.replace('.','');
           Campo.value = Campo.value.replace('.','');
           Campo.value = Campo.value.replace('-','');
           Campo.value = Campo.value.replace('/','');
           Campo.value = Campo.value.substr(0,3) + '.' + Campo.value.substr(3,3) + '.' +
       Campo.value.substr(6,3) + '-' + Campo.value.substr(9,2)
      }
               else {
             Campo.value = Campo.value.replace('.','');
             Campo.value = Campo.value.replace('.','');
             Campo.value = Campo.value.replace('-','');
                 Campo.value = Campo.value.replace('/','');
                 Campo.value = Campo.value.substr(0,2) + '.' + Campo.value.substr(2,3) + '.' +
         Campo.value.substr(5,3) + '/' + Campo.value.substr(8,4);
       } 
       }
       
   else if (Campo.value.length == 15)
     Campo.value += '-';
 }


function MascaraData(data){ 
        if(mascaraInteiro(data)==false){ 
                event.returnValue = false; 
        }        
        return formataCampo(data, '00/00/0000', event); 
} 

//adiciona mascara ao telefone 
function MascaraTelefoneCel(Campo) {

	if(Campo.value.length == 0) Campo.value += "(";
	if(Campo.value.length == 3) Campo.value += ")";
	if (Campo.value.length == 8) Campo.value += "-";
	if (Campo.value.length == 13){
		Auxiliar = Campo.value.substr(0,8) ;
		Auxiliar += Campo.value.substr(9,1) + '-';
		Auxiliar += Campo.value.substr(10,4);
		Campo.value = Auxiliar;
	}
}

function MascaraTelefone(Campo) {

	if(mascaraInteiro(Campo)==false){ 
			event.returnValue = false; 
	}        
	return formataCampo(Campo, '(00)0000-0000', event); 
}

function ValidaTelefone(tel)
{
	if (tel.value.length != 13 && tel.value.length != 0)
	{
		alert('Telefone Invalido');
		tel.value='';
	}
}


function ValidaCEL(tel)
{
	if (tel.value.length > 14 || tel.value.length < 13)
	{
		alert('Celular Invalido');
		tel.value='';
	}
}



//adiciona mascara ao CPF 
function MascaraCPF(cpf){ 
        if(mascaraInteiro(cpf)==false){ 
                event.returnValue = false; 
        }        
        return formataCampo(cpf, '000.000.000-00', event); 
} 

function MascaraCNPJ(cnpj){ 
        if(mascaraInteiro(cnpj)==false){ 
                event.returnValue = false; 
        }        
        return formataCampo(cnpj, '00.000.000/0000-00', event); 
} 

function ValidaData2(campo){
		var s=new String
		var dia = new String
		var mes = new  Array('','01','02','03','04','05','06','07','08','09','10','11','12')
		var ano = new String
		var smes =new String
		var datainteira = new String
		s = campo.value
		dia = s.substr(0,2)
		if(s.length >=1){
		if (dia > 31 || dia == 0 || isNaN(dia)) {alert('Dia invalido!');campo.focus()}
		else{datainteira = dia + '/';smes=s.substr(3,2);
		if (smes>12 || isNaN(smes) || smes==00){alert('M\xEAs invalido!');campo.focus()}
		else{smes=mes[Math.round(smes)];datainteira  = datainteira  + smes + '/';ano=s.substr(6,4)
		if (ano <= 1880 || ano >= 2037 || isNaN(ano)){alert('Ano invalido!');campo.focus();}
		else{datainteira = datainteira + ano;}}}campo.value = datainteira ;}
	}
	
function ValidaData(campo){

if(campo.value!=''){
var data = campo.value;
var dia = data.substring(0,2);
var mes = data.substring(3,5);
var ano = data.substring(6,10);


var novaData = new Date(ano,(mes-1),dia);

var mesmoDia = parseInt(dia,10) == parseInt(novaData.getDate());
var mesmoMes = parseInt(mes,10) == parseInt(novaData.getMonth())+1;
var mesmoAno = parseInt(ano) == parseInt(novaData.getFullYear());

if (!((mesmoDia) && (mesmoMes) && (mesmoAno)))
{
	alert('Data invalida.');
	campo.value='';    
	return false;
		}
	}
}


function ValidaEmail(email)
{
  var obj = email;
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') == -1 ) || (txt.indexOf(' ') != -1)))
  {
    alert("E-mail Invalido");
	email.value = "";
  }
}

function replaceAll(string, token, newtoken) {
	while (string.indexOf(token) != -1) {
 		string = string.replace(token, newtoken);
	}
	return string;
}

function quebraletra(x)
{

x.value = replaceAll(x.value.toUpperCase() , "A", "");
x.value = replaceAll(x.value.toUpperCase() , "B", "");
x.value = replaceAll(x.value.toUpperCase() , "C", "");
x.value = replaceAll(x.value.toUpperCase() , "\Ç", "");
x.value = replaceAll(x.value.toUpperCase() , "Ç", "");
x.value = replaceAll(x.value.toUpperCase() , "D", "");
x.value = replaceAll(x.value.toUpperCase() , "E", "");
x.value = replaceAll(x.value.toUpperCase() , "F", "");
x.value = replaceAll(x.value.toUpperCase() , "G", "");
x.value = replaceAll(x.value.toUpperCase() , "H", "");
x.value = replaceAll(x.value.toUpperCase() , "I", "");
x.value = replaceAll(x.value.toUpperCase() , "J", "");
x.value = replaceAll(x.value.toUpperCase() , "K", "");
x.value = replaceAll(x.value.toUpperCase() , "M", "");
x.value = replaceAll(x.value.toUpperCase() , "N", "");
x.value = replaceAll(x.value.toUpperCase() , "O", "");
x.value = replaceAll(x.value.toUpperCase() , "P", "");
x.value = replaceAll(x.value.toUpperCase() , "Q", "");
x.value = replaceAll(x.value.toUpperCase() , "R", "");
x.value = replaceAll(x.value.toUpperCase() , "S", "");
x.value = replaceAll(x.value.toUpperCase() , "T", "");
x.value = replaceAll(x.value.toUpperCase() , "U", "");
x.value = replaceAll(x.value.toUpperCase() , "V", "");
x.value = replaceAll(x.value.toUpperCase() , "X", "");
x.value = replaceAll(x.value.toUpperCase() , "Z", "");
x.value = replaceAll(x.value.toUpperCase() , "W", "");
x.value = replaceAll(x.value.toUpperCase() , "Y", "");
x.value = replaceAll(x.value.toUpperCase() , "L", "");


}




function quebraEspecial(x)
{
x.value = replaceAll(x.value.toUpperCase() , "´", "");
x.value = replaceAll(x.value.toUpperCase() , "`", "");
x.value = replaceAll(x.value.toUpperCase() , "_", "");
x.value = replaceAll(x.value.toUpperCase() , "{", "");
x.value = replaceAll(x.value.toUpperCase() , "^", "");
x.value = replaceAll(x.value.toUpperCase() , "~", "");
//x.value = replaceAll(x.value.toUpperCase() , " ", "");
x.value = replaceAll(x.value.toUpperCase() , "=", "");
x.value = replaceAll(x.value.toUpperCase() , "'", "");
x.value = replaceAll(x.value.toUpperCase() , "\\", "");
x.value = replaceAll(x.value.toUpperCase() , "\"", "");
x.value = replaceAll(x.value.toUpperCase() , "/", "");
x.value = replaceAll(x.value.toUpperCase() , "}", "");
x.value = replaceAll(x.value.toUpperCase() , "[", "");
x.value = replaceAll(x.value.toUpperCase() , "]", "");
/*x.value = replaceAll(x.value.toUpperCase() , ".", "");*/
x.value = replaceAll(x.value.toUpperCase() , ",", "");
x.value = replaceAll(x.value.toUpperCase() , "+", "");
x.value = replaceAll(x.value.toUpperCase() , "*", "");
x.value = replaceAll(x.value.toUpperCase() , "Ç", "");
x.value = replaceAll(x.value.toUpperCase() , "¨", "");
x.value = replaceAll(x.value.toUpperCase() , "Ü", "");
x.value = replaceAll(x.value.toUpperCase() , "<", "");
x.value = replaceAll(x.value.toUpperCase() , ">", "");
x.value = replaceAll(x.value.toUpperCase() , ";", "");
x.value = replaceAll(x.value.toUpperCase() , "(", "");
x.value = replaceAll(x.value.toUpperCase() , ")", "");
}

function quebraEspecialMascaras(x)
{
x.value = replaceAll(x.value.toUpperCase() , "´", "");
x.value = replaceAll(x.value.toUpperCase() , "`", "");
x.value = replaceAll(x.value.toUpperCase() , "_", "");
x.value = replaceAll(x.value.toUpperCase() , "{", "");
x.value = replaceAll(x.value.toUpperCase() , "^", "");
x.value = replaceAll(x.value.toUpperCase() , "~", "");
x.value = replaceAll(x.value.toUpperCase() , " ", "");
x.value = replaceAll(x.value.toUpperCase() , "=", "");
x.value = replaceAll(x.value.toUpperCase() , "'", "");
x.value = replaceAll(x.value.toUpperCase() , "\\", "");
x.value = replaceAll(x.value.toUpperCase() , "\"", "");
x.value = replaceAll(x.value.toUpperCase() , "}", "");
x.value = replaceAll(x.value.toUpperCase() , "[", "");
x.value = replaceAll(x.value.toUpperCase() , "]", "");
x.value = replaceAll(x.value.toUpperCase() , "+", "");
x.value = replaceAll(x.value.toUpperCase() , "*", "");
x.value = replaceAll(x.value.toUpperCase() , "Ç", "");
x.value = replaceAll(x.value.toUpperCase() , "¨", "");
x.value = replaceAll(x.value.toUpperCase() , "Ü", "");
x.value = replaceAll(x.value.toUpperCase() , "<", "");
x.value = replaceAll(x.value.toUpperCase() , ">", "");
x.value = replaceAll(x.value.toUpperCase() , ";", "");

}

function quebra_num(x)
{

x.value = replaceAll(x.value , "0", "");
x.value = replaceAll(x.value , "1", "");
x.value = replaceAll(x.value , "2", "");
x.value = replaceAll(x.value , "3", "");
x.value = replaceAll(x.value , "4", "");
x.value = replaceAll(x.value , "5", "");
x.value = replaceAll(x.value , "6", "");
x.value = replaceAll(x.value , "7", "");
x.value = replaceAll(x.value , "8", "");
x.value = replaceAll(x.value , "9", "");


}


function Formatar_Valor2(Campo) {
	 mascaraInteiro();
	 //----------------------------------------------------------------
	 // Declaração de Variáveis
	 //----------------------------------------------------------------
	 var Numero;
	 var Tamanho;
	 var Contador;
	 var Auxiliar;
	 
	 
	 //----------------------------------------------------------------
	 // Verifica Teclas Válidas
	 //---------------------------------------------------------------- 
	 if ((event.keyCode > 47) && (event.keyCode < 58)) {
	 
	  //----------------------------------------------------------------
	  // Atribuição de Valores às Variáveis
	  //---------------------------------------------------------------- 
	  Numero = Campo.value;
	  Tamanho = Numero.length;
	  Contador = 0;
	  
	  
	  
	  if ((Tamanho > 1) && (Tamanho < Campo.maxLength)) {
	  
	   Auxiliar = "";
	 
	   //----------------------------------------------------------------
	   // Percorre todo os números na ordem inversa
	   //----------------------------------------------------------------   
	   for (var i = Tamanho; i >= 0; i--) {
	   
		//----------------------------------------------------------------
		// Verifica se o caracter é um número válido.
		//----------------------------------------------------------------   
		if ((parseInt(Numero.substr(i, 1)) >= 0) && (parseInt(Numero.substr(i, 1)) <= 11)) {
		 
		 Contador++;
		 
		 //----------------------------------------------------------------
		 // Inserção da vírgula para separar as casas decimais
		 //----------------------------------------------------------------     
		 if (Contador == 3) {
		  Auxiliar = "." + Auxiliar;
		  Contador = 0;
		 }
		 
		 //----------------------------------------------------------------
		 // Concatena novamente os valores com os separadores.
		 //----------------------------------------------------------------     
		 Auxiliar = Numero.substr(i, 1) + Auxiliar;
		}
	   }
	   
	   //----------------------------------------------------------------
	   // Retorno da Função
	   //----------------------------------------------------------------   
	   Campo.value = Auxiliar;
	  }
	 }
	}


function Formatar_Valor(Campo) {
	 mascaraInteiro();
	 //----------------------------------------------------------------
	 // Declaração de Variáveis
	 //----------------------------------------------------------------
	 var Numero;
	 var Tamanho;
	 var Contador;
	 var Auxiliar;
	 
	 
	 //----------------------------------------------------------------
	 // Verifica Teclas Válidas
	 //---------------------------------------------------------------- 
	 if ((event.keyCode > 47) && (event.keyCode < 58)) {
	 
	  //----------------------------------------------------------------
	  // Atribuição de Valores às Variáveis
	  //---------------------------------------------------------------- 
	  Numero = Campo.value;
	  Tamanho = Numero.length;
	  Contador = 0;
	  
	  
	  
	  if ((Tamanho > 1) && (Tamanho < Campo.maxLength)) {
	  
	   Auxiliar = "";
	 
	   //----------------------------------------------------------------
	   // Percorre todo os números na ordem inversa
	   //----------------------------------------------------------------   
	   for (var i = Tamanho; i >= 0; i--) {
	   
		//----------------------------------------------------------------
		// Verifica se o caracter é um número válido.
		//----------------------------------------------------------------   
		if ((parseInt(Numero.substr(i, 1)) >= 0) && (parseInt(Numero.substr(i, 1)) <= 11)) {
		 
		 Contador++;
		 
		 //----------------------------------------------------------------
		 // Inserção da vírgula para separar as casas decimais
		 //----------------------------------------------------------------     
		 if ((Contador == 2) && ((Tamanho - i) < 4)) {
		  Auxiliar = "," + Auxiliar;
		  Contador = 0;
		  
		 //----------------------------------------------------------------
		 // Inserção do ponto separador de milhares
		 //----------------------------------------------------------------      
		 } else if (Contador == 3) {
		  Auxiliar = "." + Auxiliar;
		  Contador = 0;
		 }
		 
		 //----------------------------------------------------------------
		 // Concatena novamente os valores com os separadores.
		 //----------------------------------------------------------------     
		 Auxiliar = Numero.substr(i, 1) + Auxiliar;
		}
	   }
	   
	   //----------------------------------------------------------------
	   // Retorno da Função
	   //----------------------------------------------------------------   
	   Campo.value = Auxiliar;
	  }
	 }
	}

function Porcentagem(input)
		/*
		Motivo: Funcao que realiza a consistencia dos campos porcentagens
		*/		
	{
		var valor=input.value
		var segund_valor = input.value
		var valorSS=input.value
		valorSS = valorSS.replace(/[%]/g,'');
		var final
		
		valor = valor.replace(/[,]/g,'.').replace(/[.]/g,'').replace(/[%]/g,'');
		var a = valor;
		var x = a.length;
		b =  a.substring(0,3);
		c =  a.substring(3,7);
			
	
			
		if (valorSS > 100){
		if (parseInt(b) >= 100 && parseInt(c) > 000){
		alert('O valor da Porcentagem deve ser Menor ou Igual a 100%.');
		input.value = '';	
		input.focus();	
		}
		
		else if (parseInt(valor) > 10000000)
		{
		alert('O valor da Porcentagem deve ser Menor ou Igual a 100%.');
		input.value = '';	
		input.focus();	
		}
		else if(parseInt(segund_valor) > 100)
		{
		alert('O valor da Porcentagem deve ser Menor ou Igual a 100%.');
		input.value = '';	
		input.focus();	
		}	
		}
		else{
			input.value = input.value.replace(/[%]/g,'')
			if(input.value != '')
			{
			input.value = input.value + '%';
			//document.expectativa.submit();
			}
		}
	}
	//Validação de CPF e CNPJ
	  function cnpj_cpf(campo){
	  var Tm = campo.value.length;
      if (Tm <= 16){
         if(!(isCpf(campo))){alert('CPF Invalido');campo.value = '';}
      }

      else{
         if(!(isCnpj(campo))){alert('CNPJ Invalido');campo.value = '';}
      }
   }
   
function isCpf(val) {
	var soma;
	var resto;
	var i;
	var cpf = val.value;
	cpf = replaceAll(cpf,'.','');
	cpf = replaceAll(cpf,'-','');

	
	if ( (cpf.length != 11) || (cpf == "00000000000") || (cpf == "11111111111") || (cpf == "22222222222") || (cpf == "33333333333") || (cpf == "44444444444") || (cpf == "55555555555") || (cpf == "66666666666") || (cpf == "77777777777") || (cpf == "88888888888") || (cpf == "99999999999") ) 
	{
		return false;
	}
	else
	{
		
		soma = 0;
		
		for (i = 1; i <= 9; i++) 
		{
			soma += Math.floor(cpf.charAt(i-1)) * (11 - i);
		}
		
		resto = 11 - (soma - (Math.floor(soma / 11) * 11));
		
		if ( (resto == 10) || (resto == 11) ) 
		{
			resto = 0;
		}
		
		if ( resto != Math.floor(cpf.charAt(9)) ) 
		{
			return false;
		}
		
		soma = 0;
		
		for (i = 1; i<=10; i++) 
		{
			soma += cpf.charAt(i-1) * (12 - i);
		}
		
		resto = 11 - (soma - (Math.floor(soma / 11) * 11));
		
		if ( (resto == 10) || (resto == 11) ) 
		{
			resto = 0;
		}
		
		if (resto != Math.floor(cpf.charAt(10)) ) 
		{
			return false;
		}
		
		return true;
	}
}
 
function isCnpj(val){
var i;
var s = val.value;
s = replaceAll(s,'.','');
s = replaceAll(s,'-','');
s = replaceAll(s,'/','');
var c = s.substr(0,12);
var dv = s.substr(12,2);
var d1 = 0;
 
 for (i = 0; i < 12; i++){
 d1 += c.charAt(11-i)*(2+(i % 8));
 }
 
 if (d1 == 0) return false;
 
 d1 = 11 - (d1 % 11);
 
 if (d1 > 9) d1 = 0;
 if (dv.charAt(0) != d1){
 return false;
 }
 
 d1 *= 2;
 
 for (i = 0; i < 12; i++){
 d1 += c.charAt(11-i)*(2+((i+1) % 8));
 }
 
 d1 = 11 - (d1 % 11);
 
 if (d1 > 9) d1 = 0;
 if (dv.charAt(1) != d1){
 return false;
 }
 
 return true;
}
 
function ValidaTextSexo(sexo)
{
	if (sexo.value.toUpperCase() != "F" && sexo.value.toUpperCase() != "M" && sexo.value.toUpperCase() != "" )
	{
		
		replaceAll(sexo.value.toUpperCase(),sexo.value.toUpperCase(),'');
		sexo.value='';
	}
}

