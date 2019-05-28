<?php

session_start();

include("conexion.php");	

if(strlen($_SESSION['SYS_USER_ID'])==0){JsDir("login.php");	return;}

if(strlen($_SESSION['SYS_USER_ALM'])==0){

	$_SESSION['SYS_USER_ALM']="%";

}



$IdUsuario=$_SESSION['SYS_USER_ID'];



if($IdUsuario==0){

	$SS_USER_NAME="< 'ADM_SYSTEM' >";

}else{	

	$SS_USER_NAME=gs("nom","al_usuarios","id_usuario=$IdUsuario");

}

//

$Menu="avs_menu";

$Menus="avs_menus";

//

$VMem="view_avs_mem";

$VMen="view_avs_men";

//

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<title>Sistema OnLine</title>

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

	background-color: #CCC;

	background-image: url();

	color: #666;

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

	height:600px;

	position:relative;

	top:50px;

	background-color:#3D3876;

}



/*

.AB{

	position:absolute;

	z-index: 2;

	text-align: left;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

	font-weight: bold;

	height: 18px;

	width:200px;

}*/

.AB {
    position: absolute;
    z-index: 2;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;
    height: 18px;
    line-height: 15px;
    width: 200px;
}
/*
.TI{

	position:absolute;

	z-index: 2;

	text-align: left; 

	font-family: Arial, Helvetica, sans-serif; 

	font-size: 14px;

	font-weight: bold;

	color:#FF0;

	width:154px;

}*/
.TI {
    position: absolute;
    z-index: 2;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #FF0;
    width: 154px;
}

#Frm center #DivFRM #layer .Estilo1 strong {

	color: #900;

}

.Estilo2 {

	font-family: Arial, Helvetica, sans-serif;

	color: #FFFFFF;

	font-size: 12px;

}

.Estilo21 {	font-family: Arial, Helvetica, sans-serif;

	font-weight: bold;

	color: #FFF;

	font-size: 12px;

}

.sT {

	font-family: Arial, Helvetica, sans-serif;text-align: left; font-size: 28px;

	font-weight: bold;color:#039;position:absolute;}

-->

</style>



</head>

<body  <?php echo $LStrMsg;?>>

<div align="center">

<form id="Frm" name="Frm" method="post" action="pre_menu.php">

<div Id="DivFRM"  class="centrarFrm" >

<div id="layer5" style="left: 2px; top: 94px; width: 900px">

<div style="position:absolute; left: 0px; top: 0px; width: 1000px; height: 100px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000; z-index: 0">



<img src="logo.png"   style="position:absolute;left: 7px;top: 7px;" /></div>

<?php

	$BX=20;$BY=120;$BZ=220;$BS=100;$c=0;$cc=0;

	$od="<br/><div style=\"left: ";$cd="</div>";$im="<img src=\"icono.png\"/>";

	$xt="px;top:";$ca="px\" class=\"AB\">";$ct="px;\" class=\"TI\">";	

	$cols=gn("max(col)","$Menu","");

	if($IdUsuario==0){

		for($c=1;$c<=$cols;$c++){

			if(gn("count(*)","$Menu","col=$c")>0){

				$cc=$cc+1;$l_m=$BX + (($cc-1)*$BZ);		

				$t_m=$BY;$m_it=0;

				$s_m="SELECT nombre,ord,nl,id_menu FROM $Menu ".

				     "WHERE col=$c ORDER BY ord";		

				$result_m = mysql_query($s_m);		

				while ($row_m = mysql_fetch_row($result_m)){			

					echo $od.($l_m+12).$xt.$t_m.$ct;

					echo $row_m[0].$cd;			

					$t_m=$t_m + (50* $row_m[2]);

					$s="SELECT sm,url,nl,np FROM $Menus ".

					   "WHERE id_menu=$row_m[3] ORDER BY orden";

					

					$result = mysql_query($s);		

					while ($row = mysql_fetch_row($result)){
						  
						 $np=$row[3];  
						$sm=$row[0];$ur=$row[1];$nl=$row[2];

						echo $od.$l_m.$xt.$t_m.$ca;

						echo $im.$cd;echo $od.($l_m+20).$xt.$t_m.$ca;
					 	if($np =="SI")
						{
						echo "<a target=\"_blank\" href=\"$ur\">$sm</a> ".$cd;
						}else
						{
						echo "<a  href=\"$ur\">$sm</a> ".$cd;
						}
							

						$t_m=$t_m + (40 * $nl);		// espacio entre botones Es como espacio entre lineas				

					}			

					$t_m=$t_m + (100* $row_m[2]);			

				}

			}

		}

	}else{

		for($c=1;$c<=$cols;$c++){

			if(gn("count(*)","$VMem","COL=$c AND IDU=$IdUsuario AND VA>0")>0){

				$cc=$cc+1;$l_m=$BX + (($cc-1)*$BZ);

				$t_m=$BY;$m_it=0;

				$s_m="SELECT ME,MO,ML,IDM FROM $VMen WHERE 

					 COL=$c AND IDU=$IdUsuario AND VA>0 

					 GROUP BY ME,MO,ML,IDM ORDER BY MO";

				$result_m = mysql_query($s_m);		

				while ($row_m = mysql_fetch_row($result_m)){			

					echo $od.($l_m+10).$xt.$t_m.$ct;echo $row_m[0].$cd;			

					$t_m=$t_m + (25* $row_m[2]);

					$s="SELECT SM,UR,SL,IDS FROM $VMen WHERE 

						IDM=$row_m[3] AND IDU=$IdUsuario AND VA>0 

						GROUP BY SM,UR,SL,IDS ORDER BY SO";

					$result = mysql_query($s);		

					while ($row = mysql_fetch_row($result)){

						$sm=$row[0];$ur=$row[1];$nl=$row[2];

						echo $od.$l_m.$xt.$t_m.$ca;

						echo $im.$cd;echo $od.($l_m+20).$xt.$t_m.$ca;

						echo "<a href=\"$ur\">$sm</a>".$cd;	

						$t_m=$t_m + (18 * $nl);						

					}			

					$t_m=$t_m + (30* $row_m[2]);			

				}

			}

		}

	}



?>

</div>

<div style="position:absolute; left: 0px; top: 574px; width: 1000px; height: 25px; background-color: #1DA15F; layer-background-color: #0066FF; border: 1px none #000000; z-index: 0">

  <div id="layer2" style="position:absolute; left: 12px; top: 4px; width: 875px;">

    <div align="center" class="Estilo2">Lima - Peru - <?php echo date("Y");?></div>

  </div>

</div>

</div>

</center>	

</form>

</div>

</body>

</html>