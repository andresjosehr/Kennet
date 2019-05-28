function fCancelar(){



	document.getElementById("CmdE").disabled =true;

	document.getElementById("CmdG").value="Guardar";

	document.getElementById("TxtId").value="";

	document.getElementById("TxtAc").value="L";

	document.getElementById("Frm").submit();

	/*R=fSerie(6,"id_plato","res_platos");	

	document.getElementById("Cod").value=R;

	sv("Cod",R);*/

}

//-------------------------------------------------------------------------

function fGuardar(){
	alert('entro');

 var Usu=gv("Usu");

 if(jVac(Usu,"Ingrese Nombre del ","Usu"))return; 

 
	//---------------------------------------------
 

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




