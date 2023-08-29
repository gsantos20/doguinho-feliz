
 function libMult1(campo1,campo2,campo3,campo4,campo5,campo6){
  document.getElementById(campo1).disabled = false;
   document.getElementById(campo2).disabled = false;
    document.getElementById(campo3).disabled = false;
	 document.getElementById(campo4).disabled = false;
	  document.getElementById(campo5).disabled = false;
	   document.getElementById(campo6).disabled = false;
  document.getElementById(campo1).focus();
 }

 function libMult2(campo1,campo2,campo3,campo4){
  document.getElementById(campo1).disabled = false;
   document.getElementById(campo2).disabled = false;
    document.getElementById(campo3).disabled = false;
	 document.getElementById(campo4).disabled = false;
  document.getElementById(campo1).focus();
 }

 function libMult3(campo1,campo2,campo3,campo4,campo5,campo6,campo7,campo8){
  document.getElementById(campo1).disabled = false;
   document.getElementById(campo2).disabled = false;
    document.getElementById(campo3).disabled = false;
	 document.getElementById(campo4).disabled = false;
	  document.getElementById(campo5).disabled = false;
	   document.getElementById(campo6).disabled = false;
	    document.getElementById(campo7).disabled = false;
		 document.getElementById(campo8).disabled = false;
  document.getElementById(campo1).focus();
 }
 
 function dlibMult1(campo1,campo2,campo3,campo4,campo5,campo6,campo7,campo8,campo9,campo10,campo11,campo12){
  document.getElementById(campo1).disabled = true;
   document.getElementById(campo2).disabled = true;
    document.getElementById(campo3).disabled = true;
	 document.getElementById(campo4).disabled = true;
	  document.getElementById(campo5).disabled = true;
	   document.getElementById(campo6).disabled = true;
	    document.getElementById(campo7).disabled = true;
		 document.getElementById(campo8).disabled = true;
		  document.getElementById(campo9).disabled = true;
		   document.getElementById(campo10).disabled = true;
		    document.getElementById(campo11).disabled = true;
			 document.getElementById(campo12).disabled = true;
			 
  document.getElementById(campo1).value="";
   document.getElementById(campo2).value="";
    document.getElementById(campo3).value="";
	 document.getElementById(campo4).value="";
	  document.getElementById(campo5).value="";
	   document.getElementById(campo6).value="";
	    document.getElementById(campo7).value="";
		 document.getElementById(campo8).value="";
		  document.getElementById(campo9).value="";
		   document.getElementById(campo10).value="";
		    document.getElementById(campo11).value="";
			 document.getElementById(campo12).value="";
			 
 }
 
 function dlibMult2(campo1,campo2,campo3,campo4,campo5,campo6,campo7,campo8,campo9,campo10,campo11,campo12,campo13,campo14){
  document.getElementById(campo1).disabled = true;
   document.getElementById(campo2).disabled = true;
    document.getElementById(campo3).disabled = true;
	 document.getElementById(campo4).disabled = true;
	  document.getElementById(campo5).disabled = true;
	   document.getElementById(campo6).disabled = true;
	    document.getElementById(campo7).disabled = true;
		 document.getElementById(campo8).disabled = true;
		  document.getElementById(campo9).disabled = true;
		   document.getElementById(campo10).disabled = true;
		    document.getElementById(campo11).disabled = true;
			 document.getElementById(campo12).disabled = true;
			  document.getElementById(campo13).disabled = true;
			   document.getElementById(campo14).disabled = true;
			   
			   
			   
  document.getElementById(campo1).value="";
   document.getElementById(campo2).value="";
    document.getElementById(campo3).value="";
	 document.getElementById(campo4).value="";
	  document.getElementById(campo5).value="";
	   document.getElementById(campo6).value="";
	    document.getElementById(campo7).value="";
		 document.getElementById(campo8).value="";
		  document.getElementById(campo9).value="";
		   document.getElementById(campo10).value="";
		    document.getElementById(campo11).value="";
			 document.getElementById(campo12).value="";
			  document.getElementById(campo13).value="";
			   document.getElementById(campo14).value="";
 }

 
 function dlibMult3(campo1,campo2,campo3,campo4,campo5,campo6,campo7,campo8, campo9, campo10){
  document.getElementById(campo1).disabled = true;
   document.getElementById(campo2).disabled = true;
    document.getElementById(campo3).disabled = true;
	 document.getElementById(campo4).disabled = true;
	  document.getElementById(campo5).disabled = true;
	   document.getElementById(campo6).disabled = true;
	    document.getElementById(campo7).disabled = true;
		 document.getElementById(campo8).disabled = true;
		  document.getElementById(campo9).disabled = true;
		   document.getElementById(campo10).disabled = true;
		   
		   
  document.getElementById(campo1).value="";
   document.getElementById(campo2).value="";
    document.getElementById(campo3).value="";
	 document.getElementById(campo4).value="";
	  document.getElementById(campo5).value="";
	   document.getElementById(campo6).value="";
	    document.getElementById(campo7).value="";
		 document.getElementById(campo8).value="";
		  document.getElementById(campo9).value="";
		   document.getElementById(campo10).value="";
 }
 
 
 
 
 function SomenteLetraTraco(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if(( tecla==65 || tecla==66 || tecla==67 || tecla==68 || tecla==69 || tecla==70 || tecla==71 || tecla==72 || tecla==73 || tecla==74 || tecla==75 || tecla==76 || tecla==77 || tecla==78 || tecla==79 || tecla==80 || tecla==81 || tecla==82 || tecla==83 || tecla==84 || tecla==85 || tecla==86 || tecla==87 || tecla==88 || tecla==89 || tecla==90  || tecla==97 || tecla==98 || tecla==99 || tecla==100 || tecla==101 || tecla==102 || tecla==103 || tecla==104 || tecla==105 || tecla==106 || tecla==107 || tecla==108 || tecla==109 || tecla==110 || tecla==111 || tecla==112 || tecla==113 || tecla==114 || tecla==115 || tecla==116 || tecla==117 || tecla==118 || tecla==119 || tecla==120 || tecla==121 || tecla==122 || tecla==199 || tecla==231 || tecla==211 || tecla==212 || tecla==213 || tecla==32 || tecla==192 || tecla==193 || tecla==194 || tecla==195 || tecla==196 || tecla==200 || tecla==201 || tecla==202 || tecla==203 || tecla==204 || tecla==205 || tecla==206 || tecla==217 || tecla==218 || tecla==219 || tecla==224 || tecla==225 || tecla==226 || tecla==227 || tecla==232 || tecla==233 || tecla==234 || tecla==235 || tecla==236 || tecla==237 || tecla==238 || tecla==239 || tecla==242 || tecla==244 || tecla==245 || tecla==249 || tecla==250 || tecla==251 || tecla==252 || tecla==45 || tecla==150 || tecla==151 )) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}

 
 
 
 
 
 
 
 
 
 
 
 
//-----------------------------------------------------------------------------------------------------------------------------------------------------
