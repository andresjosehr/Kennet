<?php

$StrId=V($_POST[TxtId]);

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

//

$P_C="Usu";

//

//$Per=V($_POST[Per]);

$Usu=V($_POST[Usu]);

$Pas=V($_POST[Pas]);

$Hab=V($_POST[Hab]);

//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

//--------------------------------------------------------------------------

if(strlen($StrId)>0 && $StrCmd=="AR"){

	$Id=$StrId;	

	$r=gr("avs_usuarios","id_usuario=$Id");	

	$Usu=$r['nom'];

	$Pas=$r['pass'];

	$Hab=$r['hab'];

	//

	$PAS=$Pas;

	//

	$LStrFoc="jF('$P_C');";		

}

//--------------------------------------------------------------------------

if($StrCmd=="G" || $StrCmd=="M"){

	//$Suc_=gn("ID","al_sucursales_v","SUC='$Suc'");	

	//$Per_=gn("ID","res_personal_v","NOM='$Per'");

}

//--------------------------------------------------------------------------

if($StrCmd=="G"){

	if(strlen($StrGT)==0){	

		$Id=GenId("id_usuario"," avs_usuarios");	

		$s="INSERT INTO  avs_usuarios VALUES ($Id,'$Usu','$Pas','$Hab')";

		ejt($s);

		

		if($LStrMM=="S")$LStrMsg="Datos registrados ";		

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

if($StrCmd=="M"){	

	if(strlen($StrGT)==0){

		$s="UPDATE  avs_usuarios SET

			nom='$Usu',

			pass='$Pas',

			hab='$Hab'

			WHERE id_usuario=$StrId";

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

		$s="DELETE FROM res_usuarios WHERE id_usuario=$StrId";	

		ejt($s);	

			

		if($LStrMM=="S")$LStrMsg="Registro Eliminado";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

if($LIMPIAR==1){

	$StrId="";	

	//$Per="";

	$Pas="";

	$PAS="";

	$Suc="";

	$Usu="";

	$Hab="";

}

//--------------------------------------------------------------------------

$LStrMsg=BL($StrGT,$LStrMsg,$LStrFoc,$P_C);

?>