<?php

	session_start();

	include("conexion.php");

	if(strlen($_SESSION['SYS_USER_ID'])==0){JsDir("avs_adm_login.php");	return;}

	/*/++++++++++++++++++++++++++++++++++++++/*

	if(strlen($_SESSION['SYS_USER_ID'])==0){

		JsDir("pre_login.php");

		return;

	}

	*///++++++++++++++++++++++++++++++++++++++

	$Usuarios="avs_usuarios";

	$Usu_Menus="avs_usuarios_menus";

	$Menus="avs_menus";

	$Menu="avs_menu";

	///+++++++++++++++++++++++++++++++++++++++

	$IdUsuario=V($_GET[IdUser]);

	if(strlen($IdUsuario)==0){

			$IdUsuario=V($_POST[TxtId]);

	}

	if(strlen($IdUsuario)==0) $IdUsuario=0;

	$StrUser_NA="Usuario";

	$StrUser_FN=gs("id_usuario","$Usuarios","id_usuario=$IdUsuario");

	$StrUser_NO=gs("nom","$Usuarios","id_usuario=$IdUsuario");

	$StrUser_NA=$StrUser_NA." ( ".$StrUser_FN." ) ";

	$StrCmd=V($_POST[CmdG]);

	if($StrCmd=="Guardar configuracion"){

		ejt("DELETE FROM $Usu_Menus WHERE id_usuario=$IdUsuario");

		$s="SELECT id,sm FROM $Menus ORDER BY id";

		$result = mysql_query($s);		

		while ($row = mysql_fetch_row($result)){

			$id=$row[0];

			$sm=$row[1];

			$Ok=V($_POST["CH_M_".$id]);

			if(strlen($Ok)==0) $Ok="0";

			$s="INSERT INTO $Usu_Menus VALUES ($IdUsuario,$id,$Ok)";

			ejt($s);

			$LStrMsg="onload=\"alert('La configuracion ha sido guardada correctamente');\"";	

		}

	}

	

	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<title>Asignacion de Menus</title>

<script type="text/javascript" src="funciones.js"></script>

<style type="text/css">   

a:link   

{   

 text-decoration:none;

 color:#FFF

}   

a:visited {

color:#FFF

}

a:hover {

color:#FDF000

}



</style>

<style type="text/css">

<!--

body {

	background-color: #9C6;

	background-image: url();

}

#Layer1 {

	position:absolute;

	left:345px;

	top:115px;

	width:123px;

	height:35px;

	z-index:1;

}

.centrarFrm{

	width:1000px;

	height:700px;

	position:absolute;

	left:50%;

	top:50%;

	background-color:#2D455D;

	margin:-350px 0 0 -500px;

}





.AB{

	position:absolute;

	z-index: 2;

	text-align: left;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

	font-weight: bold;

	height: 18px;

	width:154px;

}

.TI{

	position:absolute;

	z-index: 2;

	text-align: left; 

	font-family: Arial, Helvetica, sans-serif; 

	font-size: 14px;

	font-weight: bold;

	color:#FF0;

	width:154px;

}

#Frm center #DivFRM #layer .Estilo1 strong {

	color: #900;

}

.Estilo2 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; font-size: 12px; }

.AB1 {	position:absolute;

	z-index: 2;

	text-align: left;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

	font-weight: bold;

	height: 18px;

	color:#FF0

}

.Estilo11 {	font-family: Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #FFFFFF;

}

-->

</style>



</head>

<body  <?php echo $LStrMsg;?>>

<form id="Frm" name="Frm" method="post" action="avs_adm_menu_set.php">

<center> 

<div Id="DivFRM"  class="centrarFrm" >

<div id="layer5" style="left: 2px; top: 94px; width: 900px">

<div style="position:absolute; left: 0px; top: 0px; width: 1000px; height: 79px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000; z-index: 0">

  <input type="hidden" name="TxtId" id="TxtId" value="<?php echo $IdUsuario;?>"/>

  <div id="layer" style="position:absolute; left: 116px; top: 21px; width: 253px; height: 45px; z-index: 100;">

    CONFIGURAR MENUS

  </div>

</div>

<div style="left: 27px; top: 3px; width: 57px" class="AB"> <img src="img/almacen.jpg" width="71" height="72"/> </div>

<?php

	$BX=23;

	$BY=140;

	$BZ=184;

	$BS=22;

	$U_CO="";	

	$U_TO=$BX;

	$U_NL=0;

	$cols=gn("max(col)","$Menu","");

	echo $cols;
	$c=0;

	for($c=1;$c<=$cols;$c++){

		$l_m=$BX + (($c-1)*$BZ);		

		$t_m=$BY;

		$m_it=0;

		$s_m="SELECT nombre,ord,nl,id_menu FROM $Menu WHERE col=$c ORDER BY ord";

		$result_m = mysql_query($s_m);		

		while ($row_m = mysql_fetch_row($result_m)){			

			echo "<div ";

			echo "style=\"left:".($l_m+10)."px;top:".$t_m."px;\" class=\"TI\">" ;

			echo $row_m[0];

			echo "</div>";

			//

			$t_m=$t_m + (25* $row_m[2]);			

			//

			$id_menu=$row_m[3];

			$s="SELECT sm,url,nl,id FROM $Menus WHERE id_menu=$id_menu ORDER BY orden";

			$result = mysql_query($s);		

			while ($row = mysql_fetch_row($result)){

				$id=$row[3];

				$sm=$row[0];

				$ur=$row[1];

				$nl=$row[2];

				//

				echo "<div ";

				echo "style=\"left:".$l_m."px;top:".($t_m-3)."px\" class=\"AB\">";

				echo "<input type=\"checkbox\" ";

				echo "name=\"CH_M_".$id."\"  id=\"CH_M_".$id."\" value=\"1\"  ";

				$Ok=gn("valor","$Usu_Menus","id_usuario=$IdUsuario AND id_sm=$id");

				if($Ok==1){

					echo "checked=\"checked\"";			

				}

				echo "/>";

				echo "</div>";

				echo "<div ";

				echo "style=\"left:".($l_m+20)."px;top:".$t_m."px\" class=\"AB\">";

				echo "<a href=\"javascript:void(0);\">$sm</a>";

				echo "</div>";

				//

				$t_m=$t_m + (18 * $nl);	

				

			}			

			//

			$t_m=$t_m + (30* $row_m[2]);			

		}

	}



?>

</div>

<div style="left: 30px; top: 88px; width: 180px" class="AB1">ASIGNANDO MENUS PARA :</div>

<div style="left: 228px; top: 88px; width: 333px; color: #FFF;" class="AB1">

<?php

	echo $StrUser_NO;

?>

</div>

<div id="layer39" style="position:absolute; left: 594px; top: 84px; width: 290px; height: 25px;">

<div align="left" class="Estilo2">

<input type="submit" name="CmdG" id="CmdG" value="Guardar configuracion" />

<input name="CmdB" type="button" id="CmdZ" 

value="Volver" 

onclick="fBuscar('avs_adm_usuarios.php?Id=<?php echo $IdUsuario;?>');"  

tabindex="22"/>

  </div>

</div>

</div>

</center>	

</form>

</body>

</html>

