String.prototype.trim = function() {
	return this.replace(/^\s+|\s+$/g,"");
}
//**************************************************************************
function fCancelar(){
	document.getElementById("TxtNom").value="";
	document.getElementById("TxtPass").value="";
	document.getElementById("TxtId").value="";
	document.getElementById("TxtAc").value="";
	document.getElementById("TxtNom").focus();
}
function fGuardar(){
	var Nom=document.getElementById("TxtNom").value;
	var Pass=document.getElementById("TxtPass").value;
	if(Nom.trim().length==0){
		alert("Ingrese el nombre de usuario");
		document.getElementById("TxtNom").focus();
		return;
	}
	if(Pass.trim().length==0){
		alert("Ingrese el password");
		document.getElementById("TxtPass").focus();
		return;
	}

	document.getElementById("TxtAc").value="G";
	document.getElementById("Frm").submit();
}
//**************************************************************************
