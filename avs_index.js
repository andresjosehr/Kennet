function fCancelar(){

	FrmCls("Nam");

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

/*var Fil = document.getElementsByName('Fil');*/
 
 
 
/*  for (var i = 0, length = Fil.length; i < length; i++) {
    if (Fil[i].checked) {
     alert(Fil[i]);
        break;
    }else
	{
		alert("Seleccione una Opción");
	}
}*/
 
	
//	var Ser=gv("Ser");
	var Nam=gv("Nam");
	var Lna=gv("Lna");	
	//var Dir=gv("Dir");
	var Ema=gv("Ema");	
	var Pas=gv("Pas");	
/* 	var Cop=gv("Cop");	
	
	var Mkt=gv("Mkt");	 */
	

/* 	if(jVac(Fil,"Seleccione una opcion","Fil"))return; */
//if(jVac(Ser,"Ingrese Nombre","Ser"))return;
	if(jVac(Nam,"Ingrese Nombre","Nam"))return;
 	if(jVac(Lna,"Ingrese Apellido","Lna"))return;
	//if(jVac(Dir,"Ingrese Dirección","Dir"))return; 
	if(jVac(Ema,"Ingrese Email","Ema"))return; 
	if(jVac(Pas,"Ingrese Contraseña","Pas"))return; 		
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





