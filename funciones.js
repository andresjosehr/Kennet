String.prototype.trim = function() {

	return this.replace(/^\s+|\s+$/g,"");

}

//Obtiene la propiedad value de un elemento

function gv(lpVar){	

	var a=document.getElementById(lpVar).value;

	return a.trim();

}
function ObtenerId(Cmd){
	var divMessage = document.getElementById("Cmd");
	return divMessage;
}
function divAparece(Cmd){
	Cmd.className = "visible";
}


//Copia la propiedad value de un elemento a otro

function cv(lpT1,lpT2){

	document.getElementById(lpT1).value=document.getElementById(lpT2).value;

}

//Asigna un valor lpVar a la propiedad value de O

function sv(O,lpVar){	

	document.getElementById(O).value=lpVar;	

}

//Invoca al submit asignando un Cmd a TxtAc opcional

function SM(Cmd){

	if(Cmd!=undefined){

		document.getElementById("TxtAc").value=Cmd;

	}

	document.getElementById("Frm").submit();

}


//Convierte un string a numerico similar al funcion Val de VB

function jVal(lpStr){

	if(typeof lpStr=='number'){

		return lpStr;

	}

	if(lpStr.trim().length==0){

		return parseFloat("0");

	}else{

		if(isNaN(lpStr)){

			return parseFloat("0");

		}else{

			return parseFloat(lpStr);

		}

	}

}

//Asigna el enfoque a un elemnto

function jF(lpVar){

	document.getElementById(lpVar).focus();

}

//Devuelve la cantidad de caracteres de un string

function jL(lpVar){

	return lpVar.trim().length;

}

//

function soloLetras(){

	 $(".lt").keydown(function (event) {

 	    var O=document.activeElement;var ti=O.tabIndex;	

		var k;k=(document.all) ? event.keyCode :event.which; 

		if(k==219){return false;

		}else{

			if(k==13){					

				GetNext(ti);return true;

			}

			return true;

		}

	});

	$(".lty").keydown(function (event) {

 	    var O=document.activeElement;var ti=O.tabIndex;	

		var k;k=(document.all) ? event.keyCode :event.which;

		//alert(k); 

		if(k==219){

			return false;

		}else{

			if(k==13){				

				GetNext(ti);				

				return true;

			}

			return true;

		}

	});

	//

	$(".ltx").keydown(function (event) {

 	    var O=document.activeElement;var ti=O.tabIndex;	

		var k;k=(document.all) ? event.keyCode :event.which;

		//alert(k); 

		if(k==219){

			return false;

		}else{

			if(k==13){		

				event.preventDefault();			

				//GetNext(ti);				

				return true;

			}

			return true;

		}

	});

}

//

function soloFechas(){

	 $(".fe").mask("99-99-99");

	 $(".fe").keydown(function (event) {

 	    var O=document.activeElement;var ti=O.tabIndex;	

		var k;k=(document.all) ? event.keyCode :event.which; 

		if(k==219){return false;

		}else{

			if(k==13){

				GetNext(ti);return true;

			}

			return true;

		}

	});

	$(".dm").mask("99-99");

	$(".dm").keydown(function (event) {

 	    var O=document.activeElement;var ti=O.tabIndex;	

		var k;k=(document.all) ? event.keyCode :event.which; 

		if(k==219){return false;

		}else{

			if(k==13){

				GetNext(ti);return true;

			}

			return true;

		}

	});

}

function FrmCls(lpF){

	frm = document.getElementById("Frm");

	if (!frm) return;var mayor=0;	

	for(i=0; i<frm.elements.length; i++){

		var t=frm.elements[i].type;		

		if (  t=="text" || t=="password" ){			

			frm.elements[i].value="";

		}

		if ( t=="select-one"  ){			

			frm.elements[i].selectedIndex=0;

		}

		if ( t=="checkbox" ){

			frm.elements[i].checked=false;

		}		

	}	

	if(jL(lpF)>0){

		jF(lpF);

	}

}

function GetNext(ti){

	frm = document.getElementById("Frm");

	if (!frm) return;var mayor=0;	

	for(i=0; i<frm.elements.length; i++){		

		var t=frm.elements[i].type;

		if ( t=="checkbox" || t=="text" || t=="button" || t=="select-one" || t=="password" ){						

			if(frm.elements[i].disabled==false){

				if(frm.elements[i].tabIndex==ti+1){

					if(t=="text"){					

						if(frm.elements[i].readOnly==false){												

							frm.elements[i].focus();return;

						}else{

							ti++;

						}

					}else{

						frm.elements[i].focus();return;

					}

				}else{

					mayor=frm.elements[i].tabIndex;

				}				

			}else{

				if(frm.elements[i].tabIndex==ti+1){

					ti++;

				}

			}

		}		

	}	

	if(mayor==ti)return;

}

function soloLectura(){	

	 $(".roi , .rod").attr('readonly', true);

}

function JQ_NUM_DEC_P(){	

	 $(".ndd").css("text-align","right");

	 $(".ndd , .ndi").keydown(function (event) {		

	 	var O=document.activeElement;var k;var v;v=trimm(O.value);

		var ti=O.tabIndex;		

		k=(document.all) ? event.keyCode :event.which;	

		if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) 

			|| k==110 || k==37 || k==39  || k==36 || k==35 || k==190){

			if(k==110 || k==190){

				if(v.length==0 ){

					return false;

				}else{

					if(v.indexOf(".")!=-1){

						return false;

					}

				}

			}				

			return true;

		}else{

			if(k==46 || k==9){

				return true;

			}

			if(k==13){

				GetNext(ti);return true;

			}else{

				return false;

			}

		}

		//

	});

}

//

function JQ_NUM_ENT_P(){

	$(".ned").css("text-align","right");

	$(".nei , .ned").keydown(function (event) { 

	 	var O=document.activeElement;var k;var v;v=trimm(O.value);

		var ti=O.tabIndex;

		k=(document.all) ? event.keyCode :event.which;

		if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || 

			k==37 || k==39 || k==46 || k==36 || k==35){

			

			return true;

		}else{

			if(k==46 || k==9){

				return true;

			}

			if(k==13){

				event.preventDefault();

				GetNext(ti);return true;

			}else{

				return false;

			}

		}

	});

	//	

	$(".NEIx , .NEDx").keydown(function (event) { 

	 	var O=document.activeElement;var k;var v;v=trimm(O.value);

		var ti=O.tabIndex;

		k=(document.all) ? event.keyCode :event.which;

		if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || 

			k==37 || k==39 || k==46 || k==36 || k==35){

			

			return true;

		}else{

			if(k==46 || k==9){

				return true;

			}

			if(k==13){

				event.preventDefault();

				return true;

			}else{

				return false;

			}

		}

	});

	//	

}

//

function JQ_NUM_ENT(){

	$(".ned_").css("text-align","right");

	$(".nei_ , .ned_").keydown(function (event) { 

	 	var O=document.activeElement;var k;var v;v=trimm(O.value)

		var val = O.value;

		pos=val.slice(0, O.selectionStart).length;

		var ti=O.tabIndex;

		k=(document.all) ? event.keyCode :event.which;

		

		if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || 

			k==37 || k==39 || k==46 || k==36 || k==35  || k==109 || k==189){

			if(k==109 || k==189){

				if(v.indexOf("-")!=-1){

					return false;

				}

				if(v.length==0){

					return true;

				}else{

					if(pos==0){

						return true;

					}else{

						return false;

					}

				}

			}

			return true;

		}else{

			if(k==46 || k==9){

				return true;

			}

			if(k==13){

				GetNext(ti);return true;

			}else{

				return false;

			}

		}

	});

	//	

}

//

function JQ_NUM_DEC(){	

	 $(".ndd_").css("text-align","right");

	 $(".ndd_ , .ndi_").keydown(function (event) {		

	 	var O=document.activeElement;var k;var v;v=trimm(O.value);

		var val = O.value;

		pos=val.slice(0, O.selectionStart).length;

		var ti=O.tabIndex;				

		k=(document.all) ? event.keyCode :event.which;	

		//alert(k);

		if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) 

			|| k==110 || k==37 || k==39  || k==36 || k==35 

			|| k==190 || k==109 || k==189 || k==107 || k==187){

			if(k==110 || k==190){

				if(v.length==0 ){

					return false;

				}else{

					if(v.indexOf(".")!=-1){

						return false;

					}

				}

			}	

			if(k==109 || k==189){

				if(v.indexOf("-")!=-1){

					return false;

				}

				if(v.length==0){

					return true;

				}else{

					if(pos==0){

						return true;

					}else{

						return false;

					}

				}

			}			

			if(k==107 || k==187){

				if(v.indexOf("+")!=-1){

					return false;

				}

				if(v.length==0){

					return true;

				}else{

					if(pos==0){

						return true;

					}else{

						return false;

					}

				}

			}			

			return true;

		}else{

			if(k==46 || k==9){

				return true;

			}

			if(k==13){

				GetNext(ti);return true;

			}else{

				return false;

			}

		}

		//

	});

}

//

function Inicializar(){

   soloLetras();

   soloFechas();   

   soloLectura();

   //

   JQ_NUM_ENT_P();

   JQ_NUM_DEC_P();

   JQ_NUM_ENT();

   JQ_NUM_DEC();
   

}


function SumarPeriodo(){

	var Fec=document.getElementById("TxtFec").value;

	var Per=document.getElementById("CboDias").value;

	Fec=Fec.trim();

	Per=Per.trim();

	if(Per.length==0){

		document.getElementById("TxtFecVen").value="";

		return;

	}

	if(Fec.length==0){

		alert("Ingrese la fecha de emision correspondiente");

		document.getElementById("TxtFec").focus();

		return;

	}

	if(Fec.length!=8){

		alert("La fecha de emision debe tener el formato indicado DD-MM-YY");

		document.getElementById("TxtFec").focus();

		return;

	}



	var StrAni="20"+Fec.substring(6,8);

	var StrMes=Fec.substring(3,5);

	var StrDia=Fec.substring(0,2);

	var StrFEC=StrAni+"/"+StrMes+"/"+StrDia;

	//

	fecha= new Date(StrFEC);	

	milisegundos=parseInt(Per*24*60*60*1000);

	fecha.setTime(fecha.getTime()+milisegundos);

	if(fecha.getDay()==6){

		milisegundos=parseInt(2*24*60*60*1000);

		fecha.setTime(fecha.getTime()+milisegundos);

		alert("Por ser un dia sabado se sumo 2 dias mas");

	}

	if(fecha.getDay()==7){

		milisegundos=parseInt(1*24*60*60*1000);

		fecha.setTime(fecha.getTime()+milisegundos);

		alert("Por ser un dia domingo se sumo un dia mas");

	}

	var anio=fecha.getFullYear()-2000;

	var mes= fecha.getMonth()+1;

	var dia= fecha.getDate();

	

	if(mes.toString().length<2){

		mes="0".concat(mes);        

	}

	if(dia.toString().length<2){

		dia="0".concat(dia);        

	}

	document.getElementById("TxtFecVen").value=dia+"-"+mes+"-"+anio;

}

//**************************************************************************



//**************************************************************************

function SumarDias(){

	var sumarDias=parseInt(5);

	var fecha="2012-07-30";

	fecha=fecha.replace("-", "/").replace("-", "/");   

	fecha= new Date(fecha);

	fecha.setDate(fecha.getDate()+sumarDias);

	var anio=fecha.getFullYear();

	var mes= fecha.getMonth()+1;

	var dia= fecha.getDate();

	if(mes.toString().length<2){

		mes="0".concat(mes);        

	}

	if(dia.toString().length<2){

		dia="0".concat(dia);        

	}	

	alert(anio+"-"+mes+"-"+dia);

}

function GetFec(){

	var today = new Date(); 

	var dd = today.getDate(); 

	var mm = today.getMonth()+1;

	var yyyy = today.getFullYear();

	yyyy=yyyy-2000;

	if(dd<10){dd='0'+dd} 

	if(mm<10){mm='0'+mm} 

	return mm+'-'+dd+'-'+yyyy;

}

function GetFecDMY(){

	var today = new Date(); 

	var dd = today.getDate(); 

	var mm = today.getMonth()+1;

	var yyyy = today.getFullYear();

	yyyy=yyyy-2000;

	if(dd<10){dd='0'+dd} 

	if(mm<10){mm='0'+mm} 

	return dd+"-"+mm+'-'+yyyy;

}

function CreateAJAX(){

        var xmlhttp=false;

        try {

               xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

        } catch (e) {

               try {

                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

               } catch (E) {

                       xmlhttp = false;

               }

        } 

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {

               xmlhttp = new XMLHttpRequest();

        }

        return xmlhttp;

}

function GetHora(){

	var f= new Date();

	h=f.getHours()*3600;

	m=f.getMinutes()*60;

	s=f.getSeconds();

	return h+m+s;

}

//**************************************************************************

function GetKey(){

	var k;

	k=(document.all) ? e.keyCode :e.which; 

	return k;

}

//**************************************************************************

function Ow(url,ancho,alto)

{

var xPos=(screen.width-ancho)/2; 

var yPos=(screen.height-alto)/2;

window.open(url, 1, 'location=no, directories=no,status=no,menubar=no,scrollbars=yes,resizable=no, Left=' + xPos + ', Top=' + yPos + ',width=' + ancho + ',height=' + alto + '');       

}

function trimm(myString)

{

	return myString.replace(/^\s+/g,'').replace(/\s+$/g,'')

}

//**************************************************************************

function formato_numero(numero, decimales, separador_decimal, separador_miles){ 

    numero=parseFloat(numero);

if(isNaN(numero)){

return "";

}

if(decimales!==undefined){     

numero=numero.toFixed(decimales);

}

separador_decimal=".";

numero=numero.toString().replace(".", separador_decimal!==undefined ? 	separador_decimal : ",");

return numero;

}



function ff(numero, decimales, separador_decimal, separador_miles){ 

    numero=parseFloat(numero);

if(isNaN(numero)){

return "";

}

if(decimales!==undefined){     

numero=numero.toFixed(decimales);

}

separador_decimal=".";

numero=numero.toString().replace(".", separador_decimal!==undefined ? 	separador_decimal : ",");

return numero;

}

//**************************************************************************

function fSiguiente(){		

	document.getElementById("TxtAc").value="MSig";

	document.getElementById("Frm").submit();

}

function fAnterior(){

	document.getElementById("TxtAc").value="MAnt";

	document.getElementById("Frm").submit();

}

function fPrimero(){

	document.getElementById("TxtAc").value="MPri";

	document.getElementById("Frm").submit();

}

function fUltimo(){

	document.getElementById("TxtAc").value="MUlt";

	document.getElementById("Frm").submit();

}

//**************************************************************************

function fVolver(StrUrl){

	window.location = StrUrl;

}

function fBuscar(StrUrl){

	window.location = StrUrl;

}

//**************************************************************************

function fActivar(reg){	

	document.getElementById("TxtId").value=reg;	

	document.getElementById("TxtAc").value="AR";

	document.getElementById("Frm").submit();

}

function fAddDatatoInput(reg){	 
 var tdElem = document.getElementById ( "tdDesc"+reg);
 var tdText = tdElem.innerHTML;
 
 window.opener.document.Frm.Diag1.value=tdText;
 window.close();
}
function fAddDatatoInput2(reg){	 
 var tdElem = document.getElementById ( "tdDesc"+reg);
 var tdText = tdElem.innerHTML;
 
 window.opener.document.Frm.Diag2.value=tdText;
 window.close();
}

function fAddDatatoInput3(reg){	 
 var tdElem = document.getElementById ( "tdDesc"+reg);
 var tdText = tdElem.innerHTML;
 
 window.opener.document.Frm.Diag3.value=tdText;
 window.close();
}
function fAddDatatoInput4(reg){	 
 var tdElem = document.getElementById ( "tdDesc"+reg);
 var tdText = tdElem.innerHTML;
 
 window.opener.document.Frm.Diag4.value=tdText;
 window.close();
}


//**************************************************************************

function fFiltrar(){	

	document.getElementById("TxtAc").value="F";

	document.getElementById("Frm").submit();

}

function fImprimirR(){	
	document.getElementById("f1t").style.display = "none";
    document.getElementById("btn_imprimir").style.visibility = "hidden";
	
	document.getElementById("Ex").style.visibility = "hidden";	
 	document.getElementById("fecha").style.display = "block";		
	document.getElementById("floro").style.display = "block";	
	document.getElementById("total").style.display = "block";	
	document.getElementById("firma").style.display = "block";	
	 
    window.print();
 
}



function fAdjuntarD2(IDD){

	var IDA=gv("TxtId");

	if(jL(IDA)==0){IDA=0;}

	Ow("ver_adjuntos_emp2.php?IdD="+IDD+"&IDA="+IDA,850,620);

}


function fAdjuntarD(ID){

	var IDA=gv("TxtId");

	if(jL(IDA)==0){IDA=0;}

	Ow("ver_adjuntos2.php?IdD="+ID+"&IDA="+IDA,850,620);

}
function fPDF(){

	document.getElementById("TxtAc").value="PDF";

	document.getElementById("Frm").submit();

}

function ffGuardar(){

	document.getElementById("TxtAc").value="G";

	document.getElementById("Frm").submit();

}

function fEnviarPDF(){

	var Rpta = confirm("Esta seguro que desea enviar un email?")		

	if (Rpta==true){

		document.getElementById("TxtAc").value="ENV_PDF";

		document.getElementById("Frm").submit();

	}

}

function fEliminar(){

	var Rpta = confirm("Esta seguro que desea eliminar?")		

	if (Rpta==true){

		document.getElementById("TxtAc").value="E";

		document.getElementById("Frm").submit();

	}

}

function fAnular(){

	var Rpta = confirm("Esta seguro que desea anular?")		

	if (Rpta==true){

		document.getElementById("TxtAc").value="A";

		document.getElementById("Frm").submit();

	}

}

function fValidar(){

	var Rpta = confirm("Esta seguro que desea validar?")		

	if (Rpta==true){

		document.getElementById("TxtAc").value="VAL";

		document.getElementById("Frm").submit();

	}

}

/**************************************************************************

	onKeyDown="return SoloTexto(event);" 

***************************************************************************/

function SoloTexto(e){	

	var k;

	k=(document.all) ? e.keyCode :e.which; 

	if(k==219){

		return false;

	}else{

		return true;

	}

}

function SoloTextoEx(e,Sig){	

	var k;

	k=(document.all) ? e.keyCode :e.which; 

	if(k==219){

		return false;

	}else{

		if(k==13){

			document.getElementById(Sig).focus();

			return true;

		}

		return true;

	}

}

function SoloTextoExF(e,Sig){	

	var k;

	k=(document.all) ? e.keyCode :e.which; 

	if(k==219){

		return false;

	}else{

		if(k==13){

			document.getElementById("TxtAc").value="F";

			document.getElementById("Frm").submit();

			return true;

		}

		return true;

	}

}

function SoloTextoEx2(e,Sig,Sig2){	

	var k;

	k=(document.all) ? e.keyCode :e.which; 

	if(k==219){

		return false;

	}else{

		if(k==13){

			if(document.getElementById(Sig).readOnly==false){

			document.getElementById(Sig).focus();

			}else{

			document.getElementById(Sig2).focus();

			}

			return true;

		}

		return true;

	}

}

/**************************************************************************

	onKeyDown="return SoloNum(this, event);"

***************************************************************************/

function SoloEnterosEx(O,e,Sig){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || 

		k==37 || k==39 || k==46 || k==36 || k==35){

		return true;

	}else{

		if(k==46 || k==9){

			return true;

		}

		if(k==13){

			document.getElementById(Sig).focus();

			return true;

		}else{

			return false;

		}

	}

}

//

function SoloNum(O,e,Sig){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;	

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) 

		|| k==110 || k==37 || k==39  || k==36 || k==35){

		if(k==110){

			if(v.length==0 ){

				return false;

			}else{

				if(v.indexOf(".")!=-1){

					return false;

				}

			}

		}				

		return true;

	}else{

		if(k==46 || k==9){

			return true;

		}

		if(k==13){

			document.getElementById(Sig).focus();

			return true;

		}else{

			return false;

		}

	}

}



function SoloNumCN(O,e,Sig){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;	

	//alert(k);

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) 

		|| k==110 || k==37 || k==39  || k==36 || k==35 || k==109 || k==189){

		if(k==110){

			if(v.length==0 ){

				return false;

			}else{

				if(v.indexOf(".")!=-1){

					return false;

				}

			}

		}		

		if(k==109 || k==189){

			if(v.length==0 ){

				return true;

			}else{				

				return false;

			}

		}				

		return true;

	}else{

		if(k==46 || k==9){

			return true;

		}

		if(k==13){

			document.getElementById(Sig).focus();

			return true;

		}else{

			return false;

		}

	}

}

//**************************************************************************

function SoloFec(O,e,Sig){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) 

		||  k==37 || k==39 || k==109 || k==36 || k==35){

		if(k==109){

			if(v.length==0 ){

				return false;

			}else{

				p1=v.indexOf("-");

				p2=v.lastIndexOf("-");

				if(p1==-1 && p2==-1){

					return true;

				}

				if(p1==p2){

					return true;

				}

				if(p1!=p2){

					return false;

				}

				if(v.indexOf("-")!=-1){

					return false;

				}

			}

		}

		return true;

	}else{

		if(k==46 || k==9){

			return true;

		}

		if(k==13){

			document.getElementById(Sig).focus();

			return true;

		}else{

			return false;

		}

	}

}

function SoloFec2(O,e,Sig,Sig2){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) 

		||  k==37 || k==39 || k==109 || k==36 || k==35){

		if(k==109){

			if(v.length==0 ){

				return false;

			}else{

				p1=v.indexOf("-");

				p2=v.lastIndexOf("-");

				if(p1==-1 && p2==-1){

					return true;

				}

				if(p1==p2){

					return true;

				}

				if(p1!=p2){

					return false;

				}

				if(v.indexOf("-")!=-1){

					return false;

				}

			}

		}

		return true;

	}else{

		if(k==46 || k==9){

			return true;

		}

		if(k==13){

			if(document.getElementById(Sig).disabled==false){

				document.getElementById(Sig).focus();

				return true;

			}

			if(document.getElementById(Sig2).disabled==false){

				document.getElementById(Sig2).focus();

				return true;

			}



		}else{

			return false;

		}

	}

}

/**************************************************************************

	onKeyDown="return SoloEnteros(this, event);"

***************************************************************************/

function SoloEnteros(O,e){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || k==37 || k==39){

		return true;

	}else{

		if(k==13){

			return true;

		}else{

			return false;

		}

	}

}

//**************************************************************************



//**************************************************************************

function SoloEnterosEx2(O,e,Sig,Sig2){	

	var k;

	var v;

	v=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || 

		k==37 || k==39 || k==46 || k==36 || k==35){

		return true;

	}else{

		if(k==13){

			if(document.getElementById(Sig).readOnly==false){

				document.getElementById(Sig).focus();

			}else{

				document.getElementById(Sig2).focus();

			}

			return true;

		}else{

			return false;

		}

	}

}

//**************************************************************************

function EsFecha(fecha){

	var dtCh= "-";

	var minYear=1900;

	var maxYear=2100;

	function isInteger(s){

		var i;

		for (i = 0; i < s.length; i++){

			var c = s.charAt(i);

			if (((c < "0") || (c > "9"))) return false;

		}

		return true;

	}

	function stripCharsInBag(s, bag){

		var i;

		var returnString = "";

		for (i = 0; i < s.length; i++){

			var c = s.charAt(i);

			if (bag.indexOf(c) == -1) returnString += c;

		}

		return returnString;

	}

	function daysInFebruary (year){

		return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );

	}

	function DaysArray(n) {

		for (var i = 1; i <= n; i++) {

			this[i] = 31

			if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}

			if (i==2) {this[i] = 29}

		}

		return this

	}

	function isDate(dtStr){

		var daysInMonth = DaysArray(12)

		var pos1=dtStr.indexOf(dtCh)

		var pos2=dtStr.indexOf(dtCh,pos1+1)

		var strDay=dtStr.substring(0,pos1)

		var strMonth=dtStr.substring(pos1+1,pos2)

		var strYear=dtStr.substring(pos2+1)

		strYr=strYear

		strYear=String(parseInt(strYear)+2000)

		if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)

		if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)		

		for (var i = 1; i <= 3; i++) {

			if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)

		}		

		month=parseInt(strMonth)

		day=parseInt(strDay)

		year=parseInt(strYr) +2000

		

		if (pos1==-1 || pos2==-1){

			return false

		}

		if (strMonth.length<1 || month<1 || month>12){

			return false

		}

		if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){

			return false

		}

		if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){

			return false

		}

		if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){

			return false

		}

		return true

	}

	if(isDate(fecha)){

		return true;

	}else{

		return false;

	}

}

function selecciona_value(objInput) { 

    var valor_input = objInput.value; 

    var longitud = valor_input.length; 



    if (objInput.setSelectionRange) { 

        objInput.focus(); 

        objInput.setSelectionRange (0, longitud); 

    } 

    else if (objInput.createTextRange) { 

        var range = objInput.createTextRange() ; 

        range.collapse(true); 

        range.moveEnd('character', longitud); 

        range.moveStart('character', 0); 

        range.select(); 

    } 

} 





function fRound(numero) {

	var original = parseFloat(numero);

	var result = Math.round(original * 100) / 100;

	return result;

}



function jFNs(Obj){

	var c=trimm(Obj.value);

	var n=6;

	if(jL(c)>0){

		c="000000000000000000"+c;

		c=c.substr(jL(c)-parseInt(n));

		Obj.value=c;

	}

}

function Ceros(LpStr,LpZ){

	var c=trimm(LpStr);

	if(LpZ>jL(c)){

		c="000000000000000000000000"+c;

		c=c.substr(jL(c)-parseInt(LpZ));

	}

	return c;

}

function MF(m,p){

	alert(m);jF(p);

}
function ALE(m){

	alert(m);

}

//

function AE(msg,obj){

	alert(msg);

	jF(obj);

}

//
 

function jVac(lpVar,m,p){

	if(lpVar.trim().length==0){

		alert(m);jF(p);

		return true;

	}else{

		return false;

	}

}

function jZer(lpVar,m,p){

	if(jL(m)==0){

		m="La lista se encuentra vacia";

	}

	if(jVal(lpVar)==0){

		alert(m);jF(p);

		return true;

	}else{

		return false;

	}

}

function jFec(lpVar,m,p){	

	if(jL(lpVar)==0){

		return false;

	}	

	if(jL(m)==0){

		m="Fecha no valida, ingrese segun el formato : dd-mm-yy ";

	}	

	if(!EsFecha(lpVar)){

		alert(m);jF(p);

		return true;

	}else{		

		return false;

	}

}

//

function pre(lpM){

	return confirm(lpM)

}

//

function SF(lpO){

	document.getElementById(lpO).value=document.getElementById("FEC").value;

	document.getElementById(lpO).focus();

}

//

function AJ(URL){

	//prompt(URL,URL);

	ajax=CreateAJAX();

	ajax.open("GET",URL,false);	

	ajax.send(null);

	var StrHtml=ajax.responseText;

	return StrHtml.trim();

}

function CBO_FILL(lpCbo,lpArr){

	var Cbo=document.getElementById(lpCbo);

	Cbo.options.length = 0;

	var Arr=lpArr.split("|");

	for(i=0;i<Arr.length;i++){		

		Cbo.options[i]= new Option (Arr[i], Arr[i]);

	}

	if(Arr.length>0)Cbo.selectedIndex=0;

}

//

function AX(C,P1,P2,P3,P4,P5,P6,P7,P8,P9){

	var s="?C="+C;

	if(P1!=undefined)s=s+"&P1="+P1;

	if(P2!=undefined)s=s+"&P2="+P2;

	if(P3!=undefined)s=s+"&P3="+P3;

	if(P4!=undefined)s=s+"&P4="+P4;

	if(P5!=undefined)s=s+"&P5="+P5;

	if(P6!=undefined)s=s+"&P6="+P6;

	if(P7!=undefined)s=s+"&P7="+P7;

	if(P8!=undefined)s=s+"&P8="+P8;

	if(P9!=undefined)s=s+"&P9="+P9;

	//

	var php="ajax.php"+s;

	//prompt(php,php);

	ajax=CreateAJAX();

	ajax.open("GET",php,false);	

	ajax.send(null);

	var StrHtml=ajax.responseText;

	return StrHtml.trim();

}

//48-57  ->Numeros regulares

//96-105 ->Numeros del teclado numerico

//35-40->Inicio/Fin/Flechas



//46->Delete

//09->Tab

//8->BackSpace



//110 / 190 ->Punto del teclado numerico

//109 / 189 ->Menos

//Solo numero decimales (inc. enteros) positivos

function sndp(O,e,Sig){

	c=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;	

	if(k==13){		

		jF(Sig);

		return false;

	}else{

		return NDP(k,c);

	}

}

//Solo numero enteros positivos

function snep(e,Sig){

	k=(document.all) ? e.keyCode :e.which;	

	if(k==13){		

		jF(Sig);

		return false;

	}else{

		return NEP(k);

	}

}

//

function sndp_c(O,e,Sig){

	c=trimm(O.value);

	k=(document.all) ? e.keyCode :e.which;	

	if(k==13){		

		document.getElementById(Sig).click();

		return false;

	}else{

		return NDP(k,c);

	}

}

//Solo numero enteros positivos

function snep_c(e,Sig){

	k=(document.all) ? e.keyCode :e.which;	

	if(k==13){		

		document.getElementById(Sig).click();

		return false;

	}else{

		return NEP(k);

	}

}

//

function svv(objs){

	o=objs.split(",");

	for(i=0;i<o.length;i++){

		document.getElementById(o[i]).value="";

	}

}

function sva(objs,str){

	o=objs.split(",");

	a=str.split("|");

	for(i=0;i<o.length;i++){

		document.getElementById(o[i]).value=a[i];

	}

}

/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////

function NDP(k,c){

	if(NEP(k)){

		return true;

	}else{

		if(k==110 || k==190){			

			if(jL(c)==0 ){

				return false;

			}else{								

				if(c.indexOf(".")!=-1){

					return false;

				}else{

					return true;

				}

			}			

		}else{

			return false;

		}		

	}

}

function NEP(k){

	if((k>=48 && k<=57) || (k>=96 && k<=105) || (k>=35 && k<=40) || k==46 || k==9 || k==8 ){

		return true;

	}else{

		return false;

	}

}

//

function ON(k){

	if((k>=48 && k<=57) || k==8 || (k>=96 && k<=105) || 

		(k>=37 && k<=40) || k==46 ){

		return 1;

	}else{

		if(k==46 || k==9 || k==13){

			return 1;

		}

	}

	return 0;

}



function CBO_CLS(lpCbo){

	var Cbo=document.getElementById(lpCbo);

	Cbo.options.length = 0;

}

function AL(lpStr){

	alert("ALERTA +!* "+lpStr+" *!+ ALERTA");

}

function OO(lpUrl){

	var a = document.createElement("a");

	a.target = "_blank";

	a.href = lpUrl;

	a.click();

}



//**------------------------------------------------------------

function fFecha(Cam){

	var Fecha=gv("TxtFec");

	document.getElementById(Cam).value=Fecha;

	jF(Cam);

}
function fFechaReg(Cam){

	var Fecha=gv("TxtFec");

	document.getElementById(Cam).value=Fecha;

	jF(Cam);

}
//**------------------------------------------------------------

function fClear(lpCbo){

	var Cbo=document.getElementById(lpCbo);

	document.getElementById(lpCbo).value="";

	Cbo.options.length = 0;	

}

//**------------------------------------------------------------

function fLimpiar(objs){

	o=objs.split(",");

	for(i=0;i<o.length;i++){

		document.getElementById(o[i]).value="";

	}

}

//**------------------------------------------------------------

function fSerie(Lon,IdTab,Tabla){

	R=AX("GSer",Lon,IdTab,Tabla);

	return R;

}

//**------------------------------------------------------------

function gs(Cam,Tab,Con){

	R=AX("gs",Cam,Tab,Con);

	return R;

}

//**------------------------------------------------------------

function el(Tab,Con){

	R=AX("el",Tab,Con);

}

//**------------------------------------------------------------

function gr(Tab,Con){

	S=AX("gr",Tab,Con);

	r=S.split("|");

	return r;

}

//**------------------------------------------------------------

function gc(Tab,Con){

	R=AX("gc",Tab,Con);

	return parseInt(R);

}

//**------------------------------------------------------------

function fLista(Cam,Tab,Com){

	R=AX("LISTA",Cam,Tab,Com);

	return R;

}

//**------------------------------------------------------------

function FCBO(lpCbo,lpArr){

	var Cbo=document.getElementById(lpCbo);

	document.getElementById(lpCbo).value="";

	Cbo.options.length = 0;

	var Arr=lpArr.split("|");

	for(i=0;i<Arr.length;i++){		

		Cbo.options[i]= new Option (Arr[i], Arr[i]);

	}

	if(Arr.length>0)Cbo.selectedIndex=0;

}

 