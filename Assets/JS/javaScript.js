function lib(campo){
 document.getElementById(campo).disabled = false;
 document.getElementById(campo).focus();
 return false; 
 }

 function dlib(campo){
 document.getElementById(campo).disabled = true;
 document.getElementById(campo).value = "";
 return false;
 }

 function libMult(){}
 
 function dlibMult(){}
 
 function libb(campo, campoo){
 document.getElementById(campo).disabled = false;
 document.getElementById(campoo).disabled = false;
 return false;
 }

 function dlibb(campo, campoo){
 document.getElementById(campo).disabled = true;
 document.getElementById(campoo).disabled = true;
 document.getElementById(campo).value = "";
  document.getElementById(campoo).value = "";

 return false;
 }
 
 function libbb(campo, campoo, campooo){
 document.getElementById(campo).disabled = false;
 document.getElementById(campoo).disabled = false;
 document.getElementById(campooo).disabled = false;
 return false;
 }

 function dlibbb(campo, campoo, campooo){
 document.getElementById(campo).disabled = true;
 document.getElementById(campoo).disabled = true;
 document.getElementById(campooo).disabled = true;
 document.getElementById(campo).value = "";
 document.getElementById(campoo).value = "";
 document.getElementById(campooo).value = "";

 return false;
 }
 
 function HinternacaoHospit(txt_a, txt_b, txt_c, txt_d, txt_e){
 document.getElementById(txt_a).disabled = false;
 document.getElementById(txt_b).disabled = false;
 document.getElementById(txt_c).disabled = false;
 document.getElementById(txt_d).disabled = false;
 document.getElementById(txt_e).disabled = false;
 }
 
 function DinternacaoHospit(txt_a, txt_b, txt_c, txt_d, txt_e){
 document.getElementById(txt_a).disabled = true;
 document.getElementById(txt_a).value="";
 document.getElementById(txt_b).disabled = true;
 document.getElementById(txt_b).value="";
 document.getElementById(txt_c).disabled = true;
 document.getElementById(txt_c).value="";
 document.getElementById(txt_d).disabled = true;
 document.getElementById(txt_d).value="";
 document.getElementById(txt_e).disabled = true;
 document.getElementById(txt_e).value="";
 }
 
 
 
 
 function sequela(txt_c, txt_ca, txt_cam, txt_camp){
 document.getElementById(txt_c).disabled = true;
 document.getElementById(txt_c).checked = false;
  
 document.getElementById(txt_ca).disabled = true;
 document.getElementById(txt_ca).checked = false;

 document.getElementById(txt_cam).disabled = true;
 document.getElementById(txt_cam).value = "";

 document.getElementById(txt_camp).disabled = true;
 document.getElementById(txt_camp).value = "";

 }
 
 
 function individual(){
 document.form.custeio[0].disabled = true;
 document.form.custeio[0].checked = false;
 
 document.form.custeio[1].disabled = true;
 document.form.custeio[1].checked = false;
 
 document.form.situacao[0].disabled = true;
 document.form.situacao[0].checked = false;
 
 document.form.situacao[1].disabled = true;
 document.form.situacao[1].checked = false;
 
 document.form.situacao[2].disabled = true;
 document.form.situacao[2].checked = false;
 
 document.form.situacao[3].disabled = true;
 document.form.situacao[3].checked = false;
 
 document.form.afastamentos[0].disabled = true;
 document.form.afastamentos[0].checked = false;
 
 document.form.afastamentos[1].disabled = true;
 document.form.afastamentos[1].checked = false;
 
 document.form.situacao[1].disabled = true;
 document.form.situacao[1].checked = false;
 
 document.form.txt_NomeEmpre.disabled = true;
 document.form.txt_NomeEmpre.value = "";
 
 document.form.dte_DtaAdmi.disabled = true;
 document.form.dte_DtaAdmi.value = "";
 
 document.form.dte_DtaUltimDia.disabled = true;
 document.form.dte_DtaUltimDia.value = "";
 
 document.form.dataSituacao.disabled = true;
 document.form.dataSituacao.value = "";
 
 document.form.txt_espe.disabled = true;
 document.form.txt_espe.value = "";
 
 document.form.txt_especif1.disabled = true;
 document.form.txt_especif1.value = "";
 
 document.form.txt_esp.disabled = true;
 document.form.txt_esp.value = "";
 }
 
 function coletivo(){
 
 
 document.form.custeio[0].disabled = false;
 document.form.custeio[1].disabled = false;
 document.form.situacao[0].disabled = false;
 document.form.situacao[1].disabled = false;
 document.form.situacao[2].disabled = false;
 document.form.situacao[3].disabled = false;
 document.form.afastamentos[0].disabled = false;
 document.form.afastamentos[1].disabled = false;
 document.form.situacao[1].disabled = false;
 document.form.txt_NomeEmpre.disabled = false;
 document.form.dte_DtaAdmi.disabled = false;
 document.form.dte_DtaUltimDia.disabled = false;
 document.form.dataSituacao.disabled = false;
 document.form.txt_especif1.disabled = false;
 
 
 }
 
 
 function individual2(){
 document.form.custSeg[0].disabled = true;
 document.form.custSeg[0].checked = false;
 
 document.form.custSeg[1].disabled = true;
 document.form.custSeg[1].checked = false;
 
 document.form.SituacaoEvento[0].disabled = true;
 document.form.SituacaoEvento[0].checked = false;
 
 document.form.SituacaoEvento[1].disabled = true;
 document.form.SituacaoEvento[1].checked = false;
 
 document.form.SituacaoEvento[2].disabled = true;
 document.form.SituacaoEvento[2].checked = false;
 
 document.form.SituacaoEvento[3].disabled = true;
 document.form.SituacaoEvento[3].checked = false;
 
 document.form.afastamentos[0].disabled = true;
 document.form.afastamentos[0].checked = false;
 
 document.form.afastamentos[1].disabled = true;
 document.form.afastamentos[1].checked = false;
 
 document.form.SituacaoEvento[1].disabled = true;
 document.form.SituacaoEvento[1].checked = false;
 
 document.form.InfMotivo1[1].disabled = true;
 document.form.InfMotivo1[1].checked = false;
 
 document.form.InfMotivo2[1].disabled = true;
 document.form.InfMotivo2[1].checked = false;
 
 document.form.InfMotivo3[1].disabled = true;
 document.form.InfMotivo3[1].checked = false;
 
 document.form.nome_emp.disabled = true;
 document.form.nome_emp.value = "";
 
 document.form.dt_admissEmp.disabled = true;
 document.form.dt_admissEmp.value = "";
 
 document.form.dt_ultDia.disabled = true;
 document.form.dt_ultDia.value = "";
 
 document.form.dataSituacao.disabled = true;
 document.form.dataSituacao.value = "";
 
 document.form.txt_espe.disabled = true;
 document.form.txt_espe.value = "";
 
 document.form.txt_especif1.disabled = true;
 document.form.txt_especif1.value = "";
 
 document.form.txt_esp.disabled = true;
 document.form.txt_esp.value = "";
 }
 
 function coletivo2(){
 
 
 document.form.custeio[0].disabled = false;
 document.form.custeio[1].disabled = false;
 document.form.situacao[0].disabled = false;
 document.form.situacao[1].disabled = false;
 document.form.situacao[2].disabled = false;
 document.form.situacao[3].disabled = false;
 document.form.afastamentos[0].disabled = false;
 document.form.afastamentos[1].disabled = false;
 document.form.situacao[1].disabled = false;
 document.form.txt_NomeEmpre.disabled = false;
 document.form.dte_DtaAdmi.disabled = false;
 document.form.dte_DtaUltimDia.disabled = false;
 document.form.dataSituacao.disabled = false;
 document.form.txt_especif1.disabled = false;
 
 
 }
 
 
 
 
 
 
 
 
 

 
 function situacaoSeg(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla==49 || tecla==50 || tecla==51)){
	return true;
	}else{
    	return false;
}
 }
 

 function radio2(){
 
  document.getElementById('InfMotivo1').disabled = false;
  document.getElementById('InfMotivo2').disabled = false;
  document.getElementById('InfMotivo3').disabled = false;
 }

 function dradio2(){
 
  document.getElementById('InfMotivo1').disabled = true;
  document.getElementById('InfMotivo2').disabled = true;
  document.getElementById('InfMotivo3').disabled = true;
 }
 
  function radio3(){
 
  document.getElementById('CobFun1').disabled = false;
  document.getElementById('CobFun2').disabled = false;
 }

 function dradio3(){
 
  document.getElementById('CobFun1').disabled = true;
  document.getElementById('CobFun2').disabled = true;
 }
 
 function falencia(txt_Evo, rDia, rMes, rAno, dt_ini, txt_org, txt_indi){
 document.getElementById(txt_Evo).disabled = false;
 document.getElementById(rDia).disabled = false;
 document.getElementById(rMes).disabled = false;
 document.getElementById(rAno).disabled = false;
 document.getElementById(dt_ini).disabled = false;
 document.getElementById(txt_org).disabled = false;
 document.getElementById(txt_indi).disabled = false;
 
 }

function dfalencia(txt_Evo, rDia, rMes, rAno, dt_ini, txt_org, txt_indi){
 document.getElementById(txt_Evo).disabled = true;
  document.getElementById(txt_Evo).value = "";

 document.getElementById(rDia).disabled = true;
  document.getElementById(rDia).value = "";

 document.getElementById(rMes).disabled = true;
  document.getElementById(rMes).value = "";

 document.getElementById(rAno).disabled = true;
  document.getElementById(rAno).value = "";

 document.getElementById(dt_ini).disabled = true;
  document.getElementById(dt_ini).value = "";

 document.getElementById(txt_org).disabled = true;
  document.getElementById(txt_org).value = "";

 document.getElementById(txt_indi).disabled = true;
  document.getElementById(txt_indi).value = "";

 
 }


 
 function porcentagem(campo){
var str = campo.value;
if(str=="%"){
return false;
}else{

str = remove(str, "%");
if(str>100){
alert("Deve ser inserido uma porcentagem de 0 atÃ© 100. Tente Novamente.");
campo.value="";
} else {

var n = str.indexOf("%");
var p = str.indexOf("."); 
 if (n == -1){
 campo.value += "%";}
 }
 }
 }

 
 function porcentagemm(campo){
var str = campo.value;
if(str=="%"){
return false;
}else{

str = remove(str, "%");
if(str>100){
alert("Deve ser inserido uma porcentagem de 0 atÃ© 100. Tente Novamente.");
campo.value="";
} else {

var n = str.indexOf("%");
var p = str.indexOf("."); 
 if (n == -1){
 campo.value += "%";}
 }
 }
 }
 
 
 
  function porcentagem1(campo){
  
 var str = campo.value;
var n = str.indexOf("1");
 
 alert(n);
 
}
 
 function n(){
 document.form.txt_esp.disabled = false;
 return false;
 }
 
 
 function m(){
 document.form.txt_esp.disabled = true;
 return false;
 }
 
 function n2(){
 document.form.txt_espp.disabled = false;
 return false;
 }
 
 
 function m2(){
 document.form.txt_espp.disabled = true;
 return false;
 }
 
 
 function n3(){
 document.form.txt_esppp.disabled = false;
 return false;
 }
 
 
 function m3(){
 document.form.txt_esppp.disabled = true;
 return false;
 }
 
 function n4(){
 document.form.txt_espppp.disabled = false;
 return false;
 }
 
 
 function m4(){
 document.form.txt_espppp.disabled = true;
 return false;
 }
 
 function j(){
 document.form.txt_pos.disabled = false;
 return false;
 }
 
 
 function k(){
 document.form.txt_pos.disabled = true;
 return false;
 }
 
 function l(){
 document.form.txt_poss.disabled = false;
 return false;
 }
 
 
 function o(){
 document.form.txt_poss.disabled = true;
 return false;
 }
 
 function p(){
 document.form.txt_posss.disabled = false;
 return false;
 }
 
 
 function q(){
 document.form.txt_posss.disabled = true;
 return false;
 }
 
 
 function a(){
 document.form.txt_espe.disabled = false;
 return false;
 }
 
 
 function b(){
 document.form.txt_espe.disabled = true;
 return false;
 }
 
 
 
 
 
 function cifrao(campo){
 
 var doisprim = campo.value.substring(0,2);
 
 if(doisprim != "R$"){
 var cifrao = "R$ " + campo.value;

campo.value = cifrao; 
 }else{
 campo.value = "";
 campo.facus();
 }
 }
 
 
 
 
 function soma1(campo1, campo2){
 
 var soma = (campo1) + (campo2);
 
document.getElementById("campo3").value = soma;
 
 }
 

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==46 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}


function SomenteLetra(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if(( tecla==65 || tecla==66 || tecla==67 || tecla==68 || tecla==69 || tecla==70 || tecla==71 || tecla==72 || tecla==73 || tecla==74 || tecla==75 || tecla==76 || tecla==77 || tecla==78 || tecla==79 || tecla==80 || tecla==81 || tecla==82 || tecla==83 || tecla==84 || tecla==85 || tecla==86 || tecla==87 || tecla==88 || tecla==89 || tecla==90  || tecla==97 || tecla==98 || tecla==99 || tecla==100 || tecla==101 || tecla==102 || tecla==103 || tecla==104 || tecla==105 || tecla==106 || tecla==107 || tecla==108 || tecla==109 || tecla==110 || tecla==111 || tecla==112 || tecla==113 || tecla==114 || tecla==115 || tecla==116 || tecla==117 || tecla==118 || tecla==119 || tecla==120 || tecla==121 || tecla==122 || tecla==199 || tecla==231 || tecla==211 || tecla==212 || tecla==213 || tecla==32 || tecla==192 || tecla==193 || tecla==194 || tecla==195 || tecla==196 || tecla==200 || tecla==201 || tecla==202 || tecla==203 || tecla==204 || tecla==205 || tecla==206 || tecla==217 || tecla==218 || tecla==219 || tecla==224 || tecla==225 || tecla==226 || tecla==227 || tecla==232 || tecla==233 || tecla==234 || tecla==235 || tecla==236 || tecla==237 || tecla==238 || tecla==239 || tecla==242 || tecla==244 || tecla==245 || tecla==249 || tecla==250 || tecla==251 || tecla==252 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function SomenteLetraNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if(( tecla>47 && tecla<58 || tecla==45 || tecla==65 || tecla==66 || tecla==67 || tecla==68 || tecla==69 || tecla==70 || tecla==71 || tecla==72 || tecla==73 || tecla==74 || tecla==75 || tecla==76 || tecla==77 || tecla==78 || tecla==79 || tecla==80 || tecla==81 || tecla==82 || tecla==83 || tecla==84 || tecla==85 || tecla==86 || tecla==87 || tecla==88 || tecla==89 || tecla==90  || tecla==97 || tecla==98 || tecla==99 || tecla==100 || tecla==101 || tecla==102 || tecla==103 || tecla==104 || tecla==105 || tecla==106 || tecla==107 || tecla==108 || tecla==109 || tecla==110 || tecla==111 || tecla==112 || tecla==113 || tecla==114 || tecla==115 || tecla==116 || tecla==117 || tecla==118 || tecla==119 || tecla==120 || tecla==121 || tecla==122 || tecla==199 || tecla==231 || tecla==211 || tecla==212 || tecla==213 || tecla==32 || tecla==192 || tecla==193 || tecla==194 || tecla==195 || tecla==196 || tecla==200 || tecla==201 || tecla==202 || tecla==203 || tecla==204 || tecla==205 || tecla==206 || tecla==217 || tecla==218 || tecla==219 || tecla==224 || tecla==225 || tecla==226 || tecla==227 || tecla==232 || tecla==233 || tecla==234 || tecla==235 || tecla==236 || tecla==237 || tecla==238 || tecla==239 || tecla==242 || tecla==244 || tecla==245 || tecla==249 || tecla==250 || tecla==251 || tecla==252 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

 /*
function verificaRadio(str)  
{  
var testa;  
var itemchecked = false;  
for(var i = 0 ; i < str.length ; i++)  
{  
   testa = str[i];  
   if(testa.checked)  
   {  
     itemchecked = true;  
   }  
}          
   if(!itemchecked)  
   {  
     return false;  
    }else  
   {  
    return true;  
    }  
} 
*/

  function tecla(){
    evt = window.event;
    var tecla = evt.keyCode;

    if(tecla > 64 && tecla < 123){ 
      alert('Digite Corretamente');
      evt.preventDefault();
    }
  }

function validaDat(cData, cData2) {
 
 var data = cData.value;

var dataHoje = new Date();
var anoH = dataHoje.getFullYear();
 
 var ano = data.substr(0,4)

	var mes = data.substr (5,2)

	var dia = data.substr (8,2)
 
 if(ano < 1910){
 
 alert('Data muito antiga');
 cData.value = "";
 cData.focus();
 }
 
 if(ano > anoH){
 
 alert('Este ano ainda nÃ£o chegou');
 cData.value = "";
 cData.focus();
 } 
 
if(mes > 12){

alert('Este mÃªs nÃ£o existe!');
 cData.value = "";
 cData.focus();

}

if(dia > 31){
alert('Insira um dia menor que 31!');
 cData.value = "";
 cData.focus();

}
 
} 


function validaDat2(cData, cData2) {
 
 var data = cData.value;

var dataHoje = new Date();
var anoH = dataHoje.getFullYear();
 
 var ano = data.substr(6,4)

	var mes = data.substr (3,2)

	var dia = data.substr (0,2)
 
 
 if(ano < 1910){
 
 alert('Data muito antiga');
 cData.value = "";
 cData.focus();
 }
 
 if(ano > anoH){
 
 alert('Este ano ainda nÃ£o chegou');
 cData.value = "";
 cData.focus();
 } 
 
if(mes > 12){

alert('Este mÃªs nÃ£o existe!');
 cData.value = "";
 cData.focus();

}

if(dia > 31){
alert('Insira um dia menor que 31!');
 cData.value = "";
 cData.focus();

}
 
} 

function validaData(cDate){
var filtro = /^\d{4}-\d{2}-\d{2}$/
var data = cDate.value;

if(!filtro.test(data))
	{
		window.alert("Data invalida. Tente novamente.");
		cDate.value="";
		return false;
	}
/*var ano = data.substring(0,4);
 
 if(ano<1900)
    {
        alert('NÃ£o devem haver anos menores que 1900');
     
		cDate.value = "";
        return false;
    }*/
	}
	
	
	
function valData(date){
var dataHoje = new Date();
var data = date.value;
var dia = data.substring(0,2)
var mes = data.substring(3,5)
var ano = data.substring(6,10)
var anoSup = dataHoje.getFullYear();

    
    var novaData = new Date(ano,(mes-1),dia);
 
    var mesmoDia = parseInt(dia,10) == parseInt(novaData.getDate());
    var mesmoMes = parseInt(mes,10) == parseInt(novaData.getMonth())+1;
    var mesmoAno = parseInt(ano) == parseInt(novaData.getFullYear());
 
    if (!((mesmoDia) && (mesmoMes) && (mesmoAno)))
    {
        alert('Essa data esta invalida!');
		date.value = "";
        return false;
    }
	 if (ano>anoSup)
    {
        alert('Ano superior ao atual');
		date.value = "";
        return false;
    }
	}
function validacaoEmail(){
if( document.forms[0].email.value=="" 
   || document.forms[0].email.value.indexOf('@')==-1 
     || document.forms[0].email.value.indexOf('.')==-1 )
	{
	   alert( "EMAIL incorreto !" );
	   return false;
	}
}


//Valida Email//
 function ValidaEmail(EMAIL, campo){
/*if (EMAIL == "") {
alert('Preencha o Email!');
campo.value = "";
return false; 
}
  var txt = EMAIL;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7) || (txt.indexOf('.') < 3)))
  {
    alert('Email incorreto');
	campo.value = "";
	obj.focus();
  }
}
*/
var filtro_mail = /^.+@.+\..{2,3}$/
if (!filtro_mail.test(EMAIL) || EMAIL=="") {
alert("Preencha o e-mail corretamente.");
campo.value = "";

}


}

function email(e){
var tecla=(window.event)?event.keyCode:e.which;   
    if(( tecla>47 && tecla<58 || tecla==45 || tecla==65 || tecla==66 || tecla==67 || tecla==68 || tecla==69 || tecla==70 || tecla==71 || tecla==72 || tecla==73 || tecla==74 || tecla==75 || tecla==76 || tecla==77 || tecla==78 || tecla==79 || tecla==80 || tecla==81 || tecla==82 || tecla==83 || tecla==84 || tecla==85 || tecla==86 || tecla==87 || tecla==88 || tecla==89 || tecla==90  || tecla==97 || tecla==98 || tecla==99 || tecla==100 || tecla==101 || tecla==102 || tecla==103 || tecla==104 || tecla==105 || tecla==106 || tecla==107 || tecla==108 || tecla==109 || tecla==110 || tecla==111 || tecla==112 || tecla==113 || tecla==114 || tecla==115 || tecla==116 || tecla==117 || tecla==118 || tecla==119 || tecla==120 || tecla==121 || tecla==122 || tecla==199 || tecla==231 || tecla==211 || tecla==212 || tecla==213 || tecla==32 || tecla==192 || tecla==193 || tecla==194 || tecla==195 || tecla==196 || tecla==200 || tecla==201 || tecla==202 || tecla==203 || tecla==204 || tecla==205 || tecla==206 || tecla==217 || tecla==218 || tecla==219 || tecla==224 || tecla==225 || tecla==226 || tecla==227 || tecla==232 || tecla==233 || tecla==234 || tecla==235 || tecla==236 || tecla==237 || tecla==238 || tecla==239 || tecla==242 || tecla==244 || tecla==245 || tecla==249 || tecla==250 || tecla==251 || tecla==252 || tecla==64 || tecla==46 || tecla==95)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}



    	  
		  
      



function setFocus(COND) {

if(COND == def){
  document.getElementById("txtQual").focus(); 
  }  
}

function Sumir(COD){

if(COD == 1){
document.getElementById("txtQual").disabled=false;
}
if(COD == 2){
document.getElementById("txtQual").disabled=true;
}
}
/*
	function maskCPF(cpf){
	if(cpf.value.length== 3){
	cpf.value+="."
	}
	if(cpf.value.length== 7){
	cpf.value+="."
	}
	if(cpf.value.length== 11){12
	cpf.value+="-"
	}
	}
*/
	

function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
	var length = 5;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
	function MaskCep(cep){
	if(cep.value.length== 2){
	cep.value+="."
	}
	if(cep.value.length== 6){7
	cep.value+="-"
	}
	}


	function maskcel(cel){
	if(cel.value.length==2 ){
	cel.value+="-"
	}
	if(cel.value.length== 8){9
	cel.value+="-"
	}
	}
	
	function maskdata(data){
	if(data.value.length== 2){
	data.value+="/"
	}
	if(data.value.length==5 ){
	data.value+="/"
	}
	}

	function masktel(tel){
	if(tel.value.length== 0){
	tel.value+="("
	}
	if(tel.value.length==3 ){
	tel.value+=")"
	}
	if(tel.value.length== 8){9
	tel.value+="-"
	}
	}
	
	function SomenteLETRADX(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if(( tecla==65 || tecla==66 || tecla==67 || tecla==68 || tecla==69 || tecla==70 || tecla==71 || tecla==72 || tecla==73 || tecla==74 || tecla==75 || tecla==76 || tecla==77 || tecla==78 || tecla==79 || tecla==80 || tecla==81 || tecla==82 || tecla==83 || tecla==84 || tecla==85 || tecla==86 || tecla==87 || tecla==88 || tecla==89 || tecla==90  || tecla==97 || tecla==98 || tecla==99 || tecla==100 || tecla==101 || tecla==102 || tecla==103 || tecla==104 || tecla==105 || tecla==106 || tecla==107 || tecla==108 || tecla==109 || tecla==110 || tecla==111 || tecla==112 || tecla==113 || tecla==114 || tecla==115 || tecla==116 || tecla==117 || tecla==118 || tecla==119 || tecla==120 || tecla==121 || tecla==122 || tecla==199 || tecla==231 || tecla==211 || tecla==212 || tecla==213 || tecla==32 || tecla==192 || tecla==193 || tecla==194 || tecla==195 || tecla==196 || tecla==200 || tecla==201 || tecla==202 || tecla==203 || tecla==204 || tecla==205 || tecla==206 || tecla==217 || tecla==218 || tecla==219 || tecla==224 || tecla==225 || tecla==226 || tecla==227 || tecla==232 || tecla==233 || tecla==234 || tecla==235 || tecla==236 || tecla==237 || tecla==238 || tecla==239 || tecla==242 || tecla==244 || tecla==245 || tecla==249 || tecla==250 || tecla==251 || tecla==252 || tecla==8 || tecla==0 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}


function validarCPF( cpf, campo ){
	var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
	
	if(!filtro.test(cpf))
	{
		window.alert("CPF incorreto. Tente novamente...");
		campo.value = "";
		return false;
	}
   
	cpf = remove(cpf, ".");
	cpf = remove(cpf, "-");
	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
		cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
		cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
		cpf == "88888888888" || cpf == "99999999999")
	{
		window.alert("CPF incorreto. Tente novamente.");
		campo.value = "";
		campo.focus();
		return false;
		
   }

	soma = 0;
	for(i = 0; i < 9; i++)
	{
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	if(resto != parseInt(cpf.charAt(9))){
		window.alert("CPF incorreto. Tente novamente.");
		campo.value = "";
		return false;
	}
	
	soma = 0;
	for(i = 0; i < 10; i ++)
	{
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	
	if(resto != parseInt(cpf.charAt(10))){
		window.alert("CPF incorreto. Tente novamente.");
		campo.value = "";
		return false;
	}
	
	return true;
 }
 
function remove(str, sub) {
	i = str.indexOf(sub);
	r = "";
	if (i == -1) return str;
	{
		r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
	}
	
	return r;
}

/**
   * MASCARA ( mascara(o,f) e execmascara() ) CRIADAS POR ELCIO LUIZ
   * elcio.com.br
   */
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

	
function validaHora(time, campo){
status = "";
hora = time.substring(0,2);
minuto = time.substring(3,5);
if(hora < 0 || hora > 23){
status+="hora";
}

if ( minuto < 0 || minuto > 60){
status+="minuto"
}

if(status=="horaminuto"){
alert("Hora e minuto invÃ¡lidos");
campo.value="";
return false; 
} 

if(status=="hora"){
alert("Hora invÃ¡lida");
campo.value="";
}

if(status=="minuto"){
alert("Minuto InvÃ¡lido");
campo.value="";
return false;
}

}
	
	
function mascara(t, mask)
{


var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 
 

};	

function cpf_mask(v){
	v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dígitos
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dígitos
	v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dígitos
	return v
}


function SomentePorcentagem(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==37 || tecla==46)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function NumeroSomente(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function SomenteNumeroTracoX(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==45 || tecla==88 || tecla==120)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function SomenteNumeroX(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==88 || tecla==120 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

function avisaData(campo){

var data = campo.value;

var quebra_data=data.split("-"); // VocÃª pode usar qualquer tipo de separador entre ("")
alert(quebra_frase[0]); // mostra apenas a palavra "Separando"
alert(quebra_frase[1]); // mostra apenas a palavra "Strings"
alert(quebra_frase[2]); // mostra apenas a palavra "por"

}

//-----------------------------------------------------------------------------------------------------------------------------------------------------
