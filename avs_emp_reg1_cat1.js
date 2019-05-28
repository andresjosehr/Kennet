function fCancelar(){

	FrmCls("Sue");

	//

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
	
	var Fen=gv("Fen");
	 

 
	if(jVac(Fen,"Ingrese Fecha de Nacimiento","Fen"))return; 		
	//---------------------------------------------	

	if(gv("CmdG")=="Completar"){

		if(pre("Esta seguro que desea seguir")){

			SM("C");

		}

	}else{

		if(pre("Error")){

			SM("M");

		}

	}

}