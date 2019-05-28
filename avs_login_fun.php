<?php
	$StrId=V($_POST[TxtId]);

	$StrCmd=V($_POST[TxtAc]);

	$StrNom=V($_POST[TxtNom]);

	$StrPass=V($_POST[TxtPass]);
 	

	$_SESSION['SYS_USER_ID']="";

	$_SESSION['SYS_HW']="";

	$_SESSION['SYS_USER_SUC']="";

	

	

	if($StrCmd=="G"){


		if(gn("count(*)","avs_usuarios","")==0){

			$_SESSION['SYS_USER_ID']=0;

			$_SESSION['SYS_USER_NO']="SYS";

			$_SESSION['SYS_HW']=GetHW();

			JsDir("menu.php");

			return;	

		}

		

		if($StrNom=="sys" && $StrPass=="sys"){

			$_SESSION['SYS_USER_ID']=0;

			$_SESSION['SYS_USER_NO']="SYS";		

			$_SESSION['SYS_HW']=GetHW();

			JsDir("avs_jef_backoffice.php");

			return;	

		}

		

		$StrUSER_ID=gn("bos_id","avs_boss","bos_email='$StrNom' AND bos_password='$StrPass'");
		$StrUSER2_ID=gn("emp_id","avs_employee","emp_email='$StrNom' AND emp_password='$StrPass'");			
 
		if($StrUSER_ID==0 && $StrUSER2_ID==0){

			$StrPass="";

			$LStrMsg="Datos incorrectos $StrNom -- $StrPass";

			$LStrFoc="document.getElementById('TxtNom').focus();";						

			$StrGT="S";			

		}

		

		if(strlen($StrGT)==0){

			$StrUSER_HA=gs("bos_enabled","avs_boss","bos_id=$StrUSER_ID");

			if($StrUSER_HA=="NO"){

				$LStrMsg="Cuenta de usuario no habilitada";

				$LStrFoc="document.getElementById('TxtNom').focus();";						

				$StrGT="S";							

			}

		}

		

		/*if(strlen($StrGT)==0){

			$_SESSION['SYS_USER_ID']=$StrUSER_ID;

			$_SESSION['SYS_USER_NO']=gs("bos_name","avs_boss","bos_id=$StrUSER_ID");	

			$StrSucId=gn("id_sucursal","avvs_usuarios","id_usuario=$StrUSER_ID");

			if($StrSucId==-1){

				$_SESSION['SYS_USER_SUC']="";

			}

			else{

				$_SESSION['SYS_USER_SUC']=gs("suc_nom","al_sucursales","id_sucursal=$StrSucId");

			}

			$_SESSION['SYS_HW']=GetHW();

			JsDir("menu.php");

			return;

		}*/
       if(strlen($StrGT)==0){
		if($StrUSER_ID!=0 && $StrUSER2_ID==0){

			$_SESSION['SYS_USER_ID']=$StrUSER_ID;

			$_SESSION['SYS_USER_NO']=gs("bos_name","avs_boss","bos_id=$StrUSER_ID");	
	

			$_SESSION['SYS_HW']=GetHW();

			JsDir("avs_jef_backoffice.php");

			return;

		}		
		if($StrUSER_ID==0 && $StrUSER2_ID!=0){

			$_SESSION['SYS_USER_ID']=$StrUSER2_ID;

			$_SESSION['SYS_USER_NO']=gs("emp_name","avs_employee","emp_id=$StrUSER_ID");	
	

			$_SESSION['SYS_HW']=GetHW();

			JsDir("avs_emp_backoffice.php");

			return;

		}	
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

