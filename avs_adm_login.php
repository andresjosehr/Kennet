<?php

session_start();

$MAC="";

include("ip.php");	

include("conexion.php");

//-------------------------	

$StrGT="";
$VP_RegXPag=10;
$LStrMsg="";
$LStrFoc="";
$LStrMM="";	

include("avs_adm_login_fun.php");

/*

NO BORRAR NO BORRAR NO BORRAR NO BORRAR NO BORRAR

NO BORRAR NO BORRAR NO BORRAR NO BORRAR NO BORRAR	



$P_K=V($_POST[TXT_KEY]);

if(strlen($P_K)==0){

	if(strlen($MAC)==0){		

		header('Location: http://www.google.com');			

		return;

	}

}

*/



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Iniciar sesion</title>

<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="avs_adm_login.js"></script>


<style type="text/css">

<!--
body {

	background-color:#3D3876;

}

#Layer1 {

position:absolute;

left:345px;	top:115px;

width:123px;	height:35px;

z-index:1;

}

.centrarFrm{

	width:400px;

	height:400px;

	position:absolute;

	left:50%;

	top:50%;

	background-color:#333333;

	margin:-200px 0 0 -200px;

}

#Layer2 {

position:absolute;

left:409px;

top:205px;

width:82px;

height:24px;

z-index:1;

}

.Estilo1 {

font-family: Arial, Helvetica, sans-serif;

font-weight: bold;

color: #FFFFFF;

}

.Estilo2 {

font-family: Arial, Helvetica, sans-serif;

font-weight: bold;

color: #FFF;

font-size: 12px;

}

.Estilo3 {color: #FFFFFF; font-size: 12px; font-family: Arial, Helvetica, sans-serif;}

.Estilo4 {color: #000099}

.Estilo5 {color: #000000}

#Frm center #DivFRM #layer .Estilo1 strong {

color: #900;

}

body,td,th {

	color: #000;

}
.div.logo {
    width: 100%;
    background: white;
    padding-bottom: 7px;
    padding-top: 7px;
}
-->

</style>



</head>

<body  <?php echo $LStrMsg;?>>

<form id="Frm" name="Frm" method="post" action="avs_adm_login.php">

<input name="TxtId" type="hidden" id="TxtId" value="<?php echo $StrId;?>"/>

<input name="TxtPK" type="hidden" id="TxtPK" value="<?php echo $P_K;?>"/>

<input name="TxtAc" type="hidden" id="TxtAc" value="" />

<input name="TxtPag" type="hidden" id="TxtPag" value="<?php echo $LStrPag; ?>" />

<center> 

<div Id="DivFRM"  class="centrarFrm" >

<div id="layer5" style="position:absolute; left: 60px; top: 207px; width: 153px;">

<div align="left" class="Estilo2">NOMBRE DE USUARIO</div>

</div>

<div 

style="position:absolute; left: 63px; top: 257px; width: 276px; height: 26px; text-align:right">  

<input name="CmdG" type="button" id="CmdG"	 value="Iniciar sesion"	

onclick="fGuardar();" style="width:100px" tabindex="3"/>

</div>

 

<div id="layer" style="position: absolute; left: 9px; top: 106px; width: 382px; height: 18px; z-index: 100; font-weight: bold; font-family: Verdana; color: #3d3876;">

<div align="center" >	

<strong>AVVS AMAS Y NANAS</strong> - OnLine</div>

</div>    

<input name="TxtNom" type="text" id="TxtNom" 

style="position:absolute; left: 60px; top: 227px; width: 133px;" 

tabindex="1"  onKeyDown="return SoloTextoEx(event,'TxtPass');" value="sys" maxlength="15" />



<div id="layer8" style="position:absolute; left: 0px; top: 0px; width: 400px; height: 164px; background-color: #CCCCCC; layer-background-color: #CCCCCC; border: 1px none #000000; z-index: 0;">

<div class="div logo">
<img src="logo.png"   />
</div>

<div id="layer9" style="position:absolute; left: 9px; top: 129px; width: 384px; height: 32px; z-index: 100; font-size:11px; font-family: Arial, Helvetica, sans-serif;">

  <div align="center" >

<strong>Bienvenido </strong>al proceso de validacion y acceso de usuarios, para obtener un usuario y password comuniquese con el administrador del sistema.</div>

</div>

<div id="layer12" style="position:absolute; left: 60px; top: 183px; width: 272px;">

<div align="left" class="Estilo2">INGRESE LOS DATOS CORRESPONDIENTES</div>

</div>

</div>

<div style="position:absolute; left: 201px; top: 207px; width: 134px;">

<div align="left" class="Estilo2">PASSWORD</div>

</div>



<input name="TxtPass" type="password" id="TxtPass" 

style="position:absolute; left: 203px; top: 227px; width: 133px;" 

tabindex="2"  

onkeydown="return SoloTextoEx(event,'CmdG');" value="sys" maxlength="10" />



<div id="layer10" style="position: absolute; left: 60px; top: 332px; width: 157px;">

<div align="left" class="Estilo2"><?php echo "FECHA : ".date("d-m-Y");?></div>

</div>

<div id="layer11" style="position: absolute; left: 60px; top: 349px; width: 174px;">

<div align="left" class="Estilo2"><?php echo "INICIANDO DESDE : ".Saber_IP()?> </div>

</div>

<div id="layer3" style="position:absolute; left: 0px; top: 162px; width: 400px; background-color: #BCBCBC; layer-background-color: #BCBCBC; border: 1px none #000000; height: 7px;">

<div align="left" class="Estilo2"></div>

</div>

</div>

</center>	

</form>

<p>&nbsp;</p>

</body>

</html>