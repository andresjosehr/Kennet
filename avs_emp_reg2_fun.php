<?php
session_start();

$StrId=$StrUSER_ID;

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

$P_C="Tip";

//
//Paso 1 Actualzacion de la info step1
$Sue=V($_POST[Sue]);
$Pag=V($_POST[Pag]);
$Exp=V($_POST[Exp]);
$Dni=V($_POST[Dni]);

//Paso 2 Actualzacion de la info step2
$Via=V($_POST[Via]);
$Lim=V($_POST[Lim]);
$Equi=V($_POST[Equi]);



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
		$Via=V($_POST[Via]);
		$Lim=V($_POST[Lim]);
		$Equi=V($_POST[Equi]);

		
		$s="UPDATE avvs_personal SET 

			p_puedeviajar='$Via',

			p_sumprodlimpieza='$Lim',
			
			p_tiequilimpieza='$Equi'

			WHERE p_id=$StrId";
		
 
			ejt($s);
			JsDir("avs_emp_reg3.php");
 
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