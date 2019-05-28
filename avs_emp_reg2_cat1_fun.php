<?php
session_start();

$StrId=$StrUSER_ID;

$StrCmd=V($_POST[TxtAc]);

$LIMPIAR=0;

$P_C="Tip";
 
$Sal=V($_POST[Sal]); 
$Bdp=V($_POST[Bdp]); 
$Cpy=V($_POST[Cpy]); 
$Tra=V($_POST[Tra]); 
$Ccs=V($_POST[Ccs]); 
$Sic=V($_POST[Sic]); 
$Win=V($_POST[Win]); 
$Esp=V($_POST[Esp]); 
$he1=V($_POST[he1]); 
$he2=V($_POST[he2]); 
$he3=V($_POST[he3]); 
$he4=V($_POST[he4]); 
$he5=V($_POST[he5]); 
 

//--------------------------------------------------------------------------

PID($StrId,V($_GET[Id]),$StrCmd,$LStrPag,V($_GET[Pag]));

 
//--------------------------------------------------------------------------

if($StrCmd=="C"){	


	if(strlen($StrGT)==0){
		
		$s="UPDATE avs_employee SET 

			emp_salary='$Sal', 
			emp_bdpay='$Bdp', 
			emp_cpayment='$Cpy', 
			emp_wtravel='$Tra',
			emp_ccst='$Ccs',
			emp_ccsick='$Sic',
			emp_etwins='$Win',
			emp_ecespecial='$Esp',
			emp_ghe1='$he1',
			emp_ghe2='$he2',
			emp_ghe3='$he3',
			emp_ghe4='$he4',
			emp_ghe5='$he5'

			WHERE emp_id=$StrId";
 
 
			ejt($s);
		 
			JsDir("avs_emp_reg3_cat1.php");
 
		if($LStrMM=="S")$LStrMsg="Datos actualizados";

		$LStrFoc="jF('$P_C');";

		$StrGT="S";

		$LIMPIAR=1;

	}

}


//--------------------------------------------------------------------------

$LStrMsg=BL($StrGT,$LStrMsg,$LStrFoc,$P_C);

?>