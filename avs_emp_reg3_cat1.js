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
	
//	var Ser=gv("Ser");
	var Edu=gv("Edu");
	 

 
	if(jVac(Edu,"Ingrese Nivel","Edu"))return; 		
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