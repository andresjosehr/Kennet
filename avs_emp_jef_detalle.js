//------------------------------------------------------------------------

 


//------------------------------------------------------------------------

function fGuardar(){

	var Cod=gv("Cod");

	var Des=gv("Des");

	var Pre=gv("Pre");

	var Apc=gv("Apc");

	var Tco=gv("Tco");

	//
 

 

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

//------------------------------------------------------------------------

function Apc_OC(){

	var apc=gv("Apc");

	if(apc=="NO"){

		sv("Tco","");

		document.getElementById("Tco").style.backgroundColor="#CCCCCC";	

		document.getElementById("Tco").readOnly=true;

	}else{

		document.getElementById("Tco").style.backgroundColor="#FFFFFF";	

		document.getElementById("Tco").readOnly=false;		

	}

}