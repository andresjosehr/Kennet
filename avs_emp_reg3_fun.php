<?php
session_start();

$StrId=$StrUSER_ID;

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

$P_C="Tip";


//Paso 3
$Ama=V($_POST[Ama]);
$Fum=V($_POST[Fum]);


//buscas trabajo
$Ser=V($_POST[Ser]);
$Via=V($_POST[Via]); 

$Fil=V($_POST[Fil]);
$Nom=V($_POST[Nom]);
$Apa=V($_POST[Apa]);
$Dir=V($_POST[Dir]);
$Ema=V($_POST[Ema]);
$Pas=V($_POST[Pas]);
$Mkt=V($_POST[Mkt]);        

//buscas Cuidadora                   
$Cop=V($_POST[Cop]);
                       
//
 
 

//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

//--------------------------------------------------------------------------

if(strlen($StrId)>0 && $StrCmd=="AR"){

 	$Id=$StrId;

	$r=gr("lab_empresas","id_emp=$Id");

	$Nom=$r['p_nom'];
 

	$LStrFoc="jF('$P_C');";	 

}	

//--------------------------------------------------------------------------

if($StrCmd=="G" || $StrCmd=="M"){

 

}

//--------------------------------------------------------------------------

if($StrCmd=="C"){	

	if(strlen($StrGT)==0){

		$s="UPDATE avvs_personal SET 

			p_apaterno='$Apa',

			p_amaterno='$Ama',
			
			p_nofumador='$Fum'

			WHERE p_id=$StrId";
		

			ejt($s);
			JsDir("avs_emp_reg4.php");
 
		if($LStrMM=="S")$LStrMsg="Datos actualizados";

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