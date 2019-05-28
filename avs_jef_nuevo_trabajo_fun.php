<?php

$StrId=V($_POST[TxtId]);

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

 $P_C="Usu"; //focus

//

$Usu=V($_POST[Usu]);
 
//


//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

//--------------------------------------------------------------------------

if(strlen($StrId)>0 && $StrCmd=="AR"){

	 
}	

//--------------------------------------------------------------------------

if($StrCmd=="G" || $StrCmd=="M"){


}

//--------------------------------------------------------------------------

if($StrCmd=="G"){
	
	echo $Usu; return;




	if(strlen($StrGT)==0){

		$Id=GenId("na1_id","avvs_nana1");	
		
		$s="INSERT INTO avvs_nana1 VALUES ($Id,'$Jobtip', '$Prov', '$Dis','$Dir' ,'$Kids',
		'$Edad1','2','3','4','5','6','7','8','9','10',
		'$Limlige','$Precomi','$Lavand','$Ayutare','$Dilicomp','$Comdmasc','$Tituniv','$Primauxi','$Nofuma','$Presu','$Fec_',$IdUsu )";
	 $Msg_mascts = "Los amantes de los animales por favor apliquen (tenemos mascotas)";
	 $Msg_prep_comi = "preparación de comidas.";
	 $Anun_Tit = "Se necesita niñera para $Kids niño en el distrito de $Dis";
	 $Anun_Desc = "$Dis Estoy buscando una gran niñera para $Kids niño. Un poco de orden sería parte de las responsabilidades de nuestro cuidador. $Msg_mascts ! Las responsabilidades incluirían la $Msg_prep_comi";

		ejt($s);

		$s="INSERT INTO avvs_nana1_id VALUES ($Id)";	
 
		ejt($s);

		
		
		$TrabId=GenId("trab_id","avvs_trabajo_nana1");
		
		$ss="INSERT INTO avvs_trabajo_nana1 VALUES ($TrabId,'$Anun_Tit', '$Anun_Desc',$IdUsu )";
		ejt($ss);
		
		if(strlen($Fot)>0){

			ImgG("Foto","emp".$Id);

		}

		//

		if($LStrMM=="S")$LStrMsg="Datos registrados ";		

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

if($StrCmd=="M"){	

	if(strlen($StrGT)==0){

		if(GetC("vis_medico","med_nom='$Nom' AND id_medico<>$StrId")>0){

		$LStrMsg="Nombre ya registrado";		

		$LStrFoc="jF('Nom');";

		$StrGT="S";

		}

	}

	

 

	if(strlen($StrGT)==0){

		if(strlen($Dni)>0){

			if(GetC("vis_medico","med_dni='$Dni' AND id_medico<>$StrId")>0){

			$LStrMsg="Numero de Dni ya Registrado";		

			$LStrFoc="jF('Dni');";

			$StrGT="S";

			}

		}

	}

	

	if(strlen($StrGT)==0){

		$s="UPDATE vis_medico SET 

			med_nom='$Nom',

			med_dni='$Dni',

			med_fec='$Fec_',

			med_tel='$Tel',

			med_dir='$Dir' WHERE id_medico=$StrId";

		ejt($s);

		//

		if(strlen($Fot)>0){

			$FActual=ImgA("emp".$StrId);

			ImgE($FActual);

			ImgG("Foto","emp".$StrId);

		}

		//

		if($LStrMM=="S")$LStrMsg="Datos actualizados";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

if($StrCmd=="E"){

	if(strlen($StrGT)==0){

		$FActual=ImgA("emp".$StrId);

		ImgE($FActual);

		//

		$s="DELETE FROM vis_medico WHERE id_medico=$StrId";

		ejt($s);

		//	

		if($LStrMM=="S")$LStrMsg="Registro Eliminado";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}



//--------------------------------------------------------------------------

if($StrCmd=="EF"){

	$FActual=ImgA("emp".$StrId);

	ImgE($FActual);

}



//--------------------------------------------------------------------------

if($StrCmd=="L"){$LIMPIAR=1;}

if($LIMPIAR==1){

	$StrId="";

	$P=gs("aux_tip","vis_auxiliar","aux_nom='MEDICO'");

	$Cod=$P.fSerie(3,"id_medico","vis_medico_id");

 

	$Nom="";

 

	$Dni="";

	$Fec=date("d-m-y");

	$Tel="";

 

	$Con="";

	$Dir="";

	 

 
	 
}

//--------------------------------------------------------------------------

$LStrMsg=BL($StrGT,$LStrMsg,$LStrFoc,$P_C);

?>