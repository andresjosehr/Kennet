function fCancelar(){

	FrmCls("Sue");

	//

	document.getElementById("CmdE").disabled =true;

	document.getElementById("CmdG").value="Guardar";

	document.getElementById("TxtId").value="";

	document.getElementById("TxtAc").value="L";

	document.getElementById("Frm").submit();

 

}

//-------------------------------------------------------------------------

function fGuardar(){
	
	var Sal=gv("Sal");
 
	if(jVac(Sal,"Ingrese sueldo","Sal"))return; 		
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