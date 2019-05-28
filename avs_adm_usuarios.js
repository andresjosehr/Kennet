function fCancelar(){

	FrmCls("Usu");

	//---------------------------------------------

	document.getElementById("CmdE").disabled =true;

	document.getElementById("CmdG").value="Guardar";

	document.getElementById("TxtId").value="";

	document.getElementById("TxtAc").value="L";

	//document.getElementById("Frm").submit();

}

//-----------------------------------------------------------------



function fGuardar(){

	//var Per=gv("Per");

	var Usu=gv("Usu");

	var Pas=gv("Pas");

	var PAS=gv("PAS");

	//var Suc=gv("Suc");

	var Hab=gv("Hab");

	

	//if(jVac(Per,"Seleccione un Usuario","Per"))return;

	if(jVac(Usu,"Ingrese Nombre de Usuario","Usu"))return;	

	if(jVac(Pas,"Ingrese un Password","Pas"))return;

	if(jVac(PAS,"Confirme Password","PAS"))return;

	if(jVac(Hab,"Seleccione un Estado","Hab"))return;

	

	if(Pas!=PAS){

		alert("Los password son distintos");

		document.getElementById("Pas").focus();

		return;

	}

	//

	if(gv("CmdG")=="Guardar"){

		if(pre("Esta seguro que desea guardar")){

			SM("G");

		}

	}else{

		if(pre("Esta seguro que desea modificar")){

			SM("M");

		}

	}

}



function Personalizar(){

	var id=gv("TxtId");

	if(jVal(id)==0){

		alert("Seleccione o active un usuario");

		return;

	}

	fBuscar("avs_adm_menu_set.php?IdUser="+id);

}