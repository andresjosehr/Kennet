<?php
session_start();

$StrId=V($_POST[TxtId]);

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

$P_C="Tip";


//Register Employee
$Typ=V($_POST[Typ]);
$Nam=V($_POST[Nam]);
$Lna=V($_POST[Lna]);		
$Add=V($_POST[Add]);
$Ema=V($_POST[Ema]);
$Pas=V($_POST[Pas]);
$Hdy=V($_POST[Hdy]);     
$Ser=V($_POST[Ser]);

//Paso 2 Actualzacion de la info step2
$Sue=V($_POST[Sue]);
$Pag=V($_POST[Pag]);
$Exp=V($_POST[Exp]);
$Dni=V($_POST[Dni]);


//buscas trabajo

$Via=V($_POST[Via]); 

//buscas Cuidadora                   
$Zip=V($_POST[Zip]);                  
//
 
$dat= date("Y-m-d"); 

//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

//--------------------------------------------------------------------------

if(strlen($StrId)>0 && $StrCmd=="AR"){

	$Id=$StrId;

	$r=gr("lab_empresas","id_emp=$Id");

	$Nom=$r['p_nom'];

 

	// $Tip=gn("aux_nom","lab_auxiliar","id_aux=$Tip_");
 

	$LStrFoc="jF('$P_C');";	

}	

//--------------------------------------------------------------------------

if($StrCmd=="G" || $StrCmd=="M"){

	 $Ser_=gn("ser_id","avs_service","ser_name='$Ser' ");
 

}

//--------------------------------------------------------------------------

if($StrCmd=="G"){

/*	if(strlen($StrGT)==0){

		if(GetC("avvs_personal","p_nom='$Nom'")>0){

		$LStrMsg="Nombre ya registrado";		

		$LStrFoc="jF('Nom');";

		$StrGT="S";

		}

	}
*/


	if(strlen($StrGT)==0){

	if($Typ=='b_cuidadora'){
		
		$Id=GenId("jf_id","avvs_jefe");	

		$s="INSERT INTO avvs_jefe VALUES ($Id,'$Nom','$Apa','Ama',0,0,'$Dir','2019-05-17','bio','$Ema','$Pas','','noimageperfil.png','1','0','0','SI','$Cop','$Mkt')";
 
 
		ejt($s);			 
	}
	else
	{
		
		$Id=GenId("emp_id","avs_employee");	
		$_SESSION['SYS_USER_ID'] = $Id;
 		
		$s="INSERT INTO avs_employee VALUES ($Id,
		'$Nam','$Lna','','','','$Ema','$Pas','','',
		'',0,0,'$Add','','$dat','Soltera(a)','noimageperfil.png','','',
		'1999-01-01','','',
		'','','','','','','','','','','',
		'','SI','$Ser_','','','$Hdy',
		'','','','','','','','','','','','')";
 
 		JsDir("avs_emp_reg1_cat1.php");
		
	 ejt($s);
		return;

	}		
		
 
		



 

		if($LStrMM=="S")$LStrMsg="Datos registrados ";		

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

if($StrCmd=="M"){	

/*
$Sue=V($_POST[Sue]);
$Pag=V($_POST[Pag]);
$Exp=V($_POST[Exp]);
$Dni=V($_POST[Dni]);
*/

	if(strlen($StrGT)==0){

		$s="UPDATE avvs_personal SET 

			p_sueldo='$Sue',

			p_pago_efectivo='$Pag',
			
			p_experiencia='$Exp',
			
			p_numidentificacion='$Dni'

			WHERE p_id=$StrId";
		
		echo $s;

			ejt($s);

 
		if($LStrMM=="S")$LStrMsg="Datos actualizados";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

if($StrCmd=="E"){

	if(strlen($StrGT)==0){

		//

		$s="DELETE FROM avvs_personal WHERE p_id=$StrId";

		ejt($s);

		//	

		if($LStrMM=="S")$LStrMsg="Registro Eliminado";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}


//--------------------------------------------------------------------------

if($StrCmd=="L"){$LIMPIAR=1;}

if($LIMPIAR==1){

	$Nom="";
 

}

//--------------------------------------------------------------------------

$LStrMsg=BL($StrGT,$LStrMsg,$LStrFoc,$P_C);

?>