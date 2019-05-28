<?php
session_start();

$StrId=$StrUSER_ID;

$StrCmd=V($_POST[TxtAc]);


$P_C="Tip";

//--------------------------------------------------------------------------

$Fen=V($_POST[Fen]);   
$Sex=V($_POST[Sex]);   
$Hdy=V($_POST[Hdy]);   


//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

//--------------------------------------------------------------------------

if($StrCmd=="C"){	

 
	if(strlen($StrGT)==0){

		$s="UPDATE avs_employee SET 

			emp_birthday='$Fen',

			emp_gender='$Sex',
			
			emp_hdyh='$Hdy'

			WHERE emp_id=$StrId";
		
 
			ejt($s);

		JsDir("avs_emp_reg2_cat1.php");
 
		if($LStrMM=="S")$LStrMsg="Datos actualizados";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}

//--------------------------------------------------------------------------

$LStrMsg=BL($StrGT,$LStrMsg,$LStrFoc,$P_C);

?>