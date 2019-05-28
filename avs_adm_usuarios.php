<?php

session_start();

include("conexion.php");

if(strlen($_SESSION['SYS_USER_ID'])==0){JsDir("avs_adm_login.php");	return;}

//if(VM("usuarios%")==0){JsDir("pre_login.php");return;}

//------------------------------------------------------------------

$UsuFo=ImgA("per".$_SESSION['SYS_USER_ID']);

$UsuNo=$_SESSION['SYS_USER_NO'];

$IdUsu=$_SESSION['SYS_USER_ID'];

//$UsuHW=$_SESSION['SYS_HW'];

//------------------------------------------------------------------

$StrGT="";$LStrMsg="";$LStrFoc="";$LStrMM="";

$LStrPag=V($_POST[TxtPag]);

include("avs_adm_usuarios_fun.php");

//------------------------------------------------------------------

/*$SUC_USU=V($_SESSION['SYS_USER_SUC']);

if($IdUsu>0){

	if(strlen($Suc)==0){

	$Suc_=GetSO("SUC","al_sucursales_v","ID>0  AND SUC='$SUC_USU'","SUC");

	$Suc=$Suc_;

	}else{

	$Suc_=$Suc;

	}

	$W="AND SUC='$Suc'";

}

//if(strlen($R_Ger)>0){$Suc_="%";}*/

//------------------------------------------------------------------

$VP_RegXPag=10;

$LStrTR=gn("count(*)","al_usuarios_v","ID>0");

$LStrPag=PagGet($LStrPag,$StrCmd,$LStrTR,$VP_RegXPag);	

$TI=0;

?>

<html >

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Usuarios</title>

<!--INI_SCRIPT------------------------------------------------------------------------------>

<?php AddJsAdm(); ?>

<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="avs_adm_usuarios.js"></script>

<!--FIN_SCRIPT------------------------------------->

<link rel="stylesheet" type="text/css" href="dist/css/adm.css"  />

<style type="text/css">

.cF{background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #FFF), color-stop(1, #E9F8FF) );}

.cF{height:600px;width:1000px;position:relative; <?php echo "top:50px";?>}

</style>

<script>

$(document).ready(function(){  

   Inicializar();

});

</script>

</head>



<body  <?php echo $LStrMsg;?>  >

<div align="center">



<div Id="DivFRM"  class="cF" style="background-color:#FFFFFF;" >

<form id="Frm" name="Frm" method="post" action="avs_adm_usuarios.php">

<!--INI_TITULO-->

<div id="DivT" class="dT" >

	<div class="tT">PERSONAL</div>    

    <div class="s1" style="left: 114px; top: 41px; width: 251px; height: 16px; color: #FFF">

    USUARIO: <?php echo $UsuNo; ?></div>

    <div style="position: absolute; left: 36px; top: 3px; width: 60; height: 60;">

    <img class="img-circle" src="<?php if(strlen($UsuFo)==0){$UsuFo="img/adm.png";} echo $UsuFo;?>" width="60" height="60">

    </div>
<img src="logo.png" class="logoCedimagen">
</div>



<!--FIN_TITULO-->

<div class="s1" style="left: 35px; top: 115px; width: 62px; height: 18px;">

Usuario *</div>

<input  type="text"  id="Usu" name="Usu" 

class="lt" style="left: 35px; top: 134px; width: 589px;"

value="<?php echo $Usu;?>"

tabindex="<?php echo ++$TI;?>"/>



<div class="s1" style="left: 640px; top: 115px; width: 86px; height: 18px;">

* Password</div>

<input name="Pas" type="password" id="Pas"

class="lt" style="position: absolute; left: 638px; top: 134px; width: 100px;"

tabindex="<?php echo ++$TI;?>"

value="<?php echo $Pas;?>"/>



<div class="s1" style="left: 752px; top: 115px; width: 101px; height: 18px;">

Confirmar Pas *</div>

<input  name="PAS" type="password"  id="PAS" 

class="lt" style="position: absolute; left: 752px; top: 134px; width: 100px;"

value="<?php echo $PAS;?>"

tabindex="<?php echo ++$TI;?>" />



<div class="s1" style="left: 867px; top: 115px; width: 89px; height: 18px;">

* HABILITADO</div>

<select name="Hab" id="Hab" 

class="lt" style="left: 867px; top: 134px; width: 98px;"

tabindex="<?php echo ++$TI;?>">

<?php echo FCBO("aux_nom","	avvs_auxiliar","aux_tip='AFI'",$Hab,"N","S");?>

</select>



<!--INI_BOTONES----->

<?php $BUSCAR="avs_adm_usuarios_b.php";?>

<?php include("botones.php");?>;



<input name="CmdB" type="button" id="CmdZ" class="bt" style="position: absolute; left: 768px; top: 74px; width: 200px"

value="Personalizar menu" onClick="Personalizar('<?php echo $StrId;?>');"  

tabindex="<?php echo ++$TI;?>" />

<!--FIN_BOTONES-->

<!--INI_TABLA----->

<div class="datagrid" style="position:absolute; left: 35px; top: 170px; width: 931px; height: 377px; overflow:auto">

<table width="100%">

<thead>

<tr>

<td colspan="3" height="18"><?php echo PagBtn($LStrTR,$VP_RegXPag,$LStrPag);?></td>

</tr>

<tr>

<th width="71%">USUARIO</th>

<th width="26%">HABILITADO</th>

<th width="3%">&nbsp;</th>

</tr>

</thead>

<tbody>

<?php

$s="SELECT id_usuario,nom,hab FROM avs_usuarios

	WHERE id_usuario>0 ORDER BY id_usuario DESC";	

$s=PagSql($s,$LStrPag,$VP_RegXPag,$LStrTR);	  				

$result = mysql_query($s);

while ($row = mysql_fetch_array($result)){

?>

	<tr onDblClick="fActivar(<?php echo $row[0];?>);">

	<!----------------------------------------------->

	<td ><?php echo $row['nom'];?></td>

    <td ><?php echo $row['hab'];?></td>

	<!----------------------------------------------->

	<td>

	<a href="javascript:void(0)" onClick="fActivar(<?php echo $row[0];?>);">

	<img src="img/b_edit.png"  border="0"/></a></td>

	</tr>

<?php

}

?>

</tbody>

</table>

</div>

<!--FIN_TABLA----->

<!--INI_OCULTOS-------------------------------->

<?php include("ocultos.php");?>

<!--FIN_OCULTOS-------------------------------->

</form>

</div>

</div>

</body>

</html>

