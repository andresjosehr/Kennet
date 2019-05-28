<?php
session_start();

$StrId=$StrUSER_ID;

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

$P_C="Tip";

$Pti=V($_POST[Pti]); 
$Bio=V($_POST[Bio]); 
$Edu=V($_POST[Edu]); 
$Yex=V($_POST[Yex]); 

//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

//--------------------------------------------------------------------------

if($StrCmd=="C"){	

	if(strlen($StrGT)==0){

		$s="UPDATE avs_employee SET 

	emp_ptitle='$Pti',
			emp_bio='$Bio',
			emp_leducation='$Edu',
			emp_experience='$Yex'


			WHERE emp_id=$StrId";
		

			ejt($s);
			 
			JsDir("avs_emp_backoffice.php");
 
		if($LStrMM=="S")$LStrMsg="Datos actualizados";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

$LStrMsg=BL($StrGT,$LStrMsg,$LStrFoc,$P_C);

?>