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
	
//	var Ser=gv("Ser");
	var Apa=gv("Apa");
	 

 
	if(jVac(Apa,"Ingrese Apellido","Apa"))return; 		
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
 

//-------------------------------------------------------------------------
// Validaciones Jquery
//-------------------------------------------------------------------------

	$(document).ready(function(){

		$('.burger-button').click(function(){
			$('.cabecera-logo').removeClass("ocultar");
			$('.mobil').addClass("mostrar");
			$('.container').addClass("ocultar");
 
		});

		

  		$('.divContratar').show();

		$('.burger-button').hide();
 
		$('#contratar').click(function(){
			$('.divContratar').show();
	 
			$('.divTrabajo').hide();
		});

		$('#trabajo').click(function(){
			$('.divTrabajo').show();
            $('.divContratar').hide();
         
		}); 
});





