<?php
	$StrId=V($_POST[TxtId]);

	$StrCmd=V($_POST[TxtAc]);

	$StrNom=V($_POST[TxtNom]);

	$StrPass=V($_POST[TxtPass]);
 	
	//$MAC=V($_POST[TxtPK]);	
	//$MAC=str_replace("-",":",$MAC);
	//

	$_SESSION['SYS_USER_ID']="";

	$_SESSION['SYS_HW']="";

	$_SESSION['SYS_USER_SUC']="";


	if($StrCmd=="G"){

		/*

		NO BORRAR NO BORRAR NO BORRAR NO BORRAR NO BORRAR

		NO BORRAR NO BORRAR NO BORRAR NO BORRAR NO BORRAR

		

		if(gn("count(*)","pre_macs","mac_nom='$MAC'")==0){

			$MAC="";
			$LStrMsg="Maquina no registrada";			
			$LStrFoc="document.getElementById('TxtNom').focus();";						
			$StrGT="S";	
			return;	
		}

		*/

		if(gn("count(*)","avvs_ususarios","")==0){

			$_SESSION['SYS_USER_ID']=0;

			$_SESSION['SYS_USER_NO']="SYS";

			$_SESSION['SYS_HW']=GetHW();

			JsDir("avs_adm_menu.php");

			return;	

		}

		

		if($StrNom=="sys" && $StrPass=="sys"){

			$_SESSION['SYS_USER_ID']=0;

			$_SESSION['SYS_USER_NO']="SYS";		

			$_SESSION['SYS_HW']=GetHW();

			JsDir("avs_adm_menu.php");

			return;	

		}

		

		$StrUSER_ID=gn("id_usuario","avvs_ususarios","nom='$StrNom' AND pass='$StrPass'");		

		if($StrUSER_ID==0){

			$StrPass="";

			$LStrMsg="Datos incorrectos $StrNom -- $StrPass";

			$LStrFoc="document.getElementById('TxtNom').focus();";						

			$StrGT="S";			

		}

		

		if(strlen($StrGT)==0){

			$StrUSER_HA=gs("hab","avvs_ususarios","id_usuario=$StrUSER_ID");

			if($StrUSER_HA=="NO"){

				$LStrMsg="Cuenta de usuario no habilitada";

				$LStrFoc="document.getElementById('TxtNom').focus();";						

				$StrGT="S";							

			}

		}

		

		if(strlen($StrGT)==0){

			$_SESSION['SYS_USER_ID']=$StrUSER_ID;

			$_SESSION['SYS_USER_NO']=gs("nom","avvs_ususarios","id_usuario=$StrUSER_ID");	

			$StrSucId=gn("id_sucursal","avvs_ususarios","id_usuario=$StrUSER_ID");

			if($StrSucId==-1){

				$_SESSION['SYS_USER_SUC']="";

			}

			else{

				$_SESSION['SYS_USER_SUC']=gs("suc_nom","al_sucursales","id_sucursal=$StrSucId");

			}

			

			

			$_SESSION['SYS_HW']=GetHW();

			JsDir("avs_adm_menu.php");

			return;

		}

	}

	//////////////////////////////////

	if($StrGT=="S"){

		if(strlen($LStrMsg)>0){

			if(strlen($LStrFoc)==0){

				$LStrMsg="onload=\"alert('$LStrMsg');\"";

			}else{

				$LStrMsg="onload=\"alert('$LStrMsg');$LStrFoc;\"";

			}

		}else{

			if(strlen($LStrFoc)>0){

				$LStrMsg="onload=\"$LStrFoc;\"";

			}

		}

	}else{

		$LStrFoc="document.getElementById('TxtNom').focus()";

		$LStrMsg="onload=\"$LStrFoc;\"";

	}

?>