<?php
	session_start();
	include("conexion.php");
	if(strlen($_SESSION['SYS_USER_ID'])==0){JsDir("login.php");	return;}
	$_SESSION['SYS_USER_ID']="";
	$_SESSION['SYS_USER_NO']="";	
	$_SESSION['SYS_USER_SUC']="";	
	$_SESSION['SYS_HW']="";	
	session_destroy();
	JsDir("login.php");
?>