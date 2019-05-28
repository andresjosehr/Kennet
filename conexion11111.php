<?php
error_reporting(0); //No mostrar mensajes de errores por version de PHP
date_default_timezone_set('America/Lima');
require_once 'excel/reader.php';
//require("class.phpmailer.php");
///////////////////////////////////////////////
$username="root";//"lqimport_adm"; 
$password="";//"2587744";
$database="amasynanas_starup";//"lqimport_demo";
$connect=mysql_connect("localhost",$username,$password);
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $connect);
///////////////////////////////////////
@mysql_select_db($database,$connect) or die("<b>Error al momento de intentar conectarse con la Base de Datos</b>");
/////////////////////////////////////////////////////////////////////////////
$StrHWND="";
function T($Str){
	if($Str=="TODOS" || $Str=="TODAS" || strlen($Str)==0){
		return "%";
	}else{
		return $Str;
	}
}
function shortText($text, $chars_limit) 
{ 
	// Check if length is larger than the character limit
	 if (strlen($text) > $chars_limit) 
	 { 
		 // If so, cut the string at the character limit 
		 $new_text = substr($text, 0, $chars_limit); 
		 // Trim off white space 
		 $new_text = trim($new_text); 
		 // Add at end of text ... 
		 return $new_text . "..."; 
	   }
		  // If not just return the text as is else 
	{ return $text; } 
 }
 function shortTextOneCharacter($text, $chars_limit) 
{ 
	// Check if length is larger than the character limit
	 if (strlen($text) > $chars_limit) 
	 { 
		 // If so, cut the string at the character limit 
		 $new_text = substr($text, 0, $chars_limit); 
		 // Trim off white space 
		 $new_text = trim($new_text); 
		 // Add at end of text ... 
		 return $new_text . "."; 
	   }
		  // If not just return the text as is else 
	{ return $text; } 
 }
 
function gr($t,$w){
	if(strlen($w)==0){
		$ss="SELECT * FROM ".$t;
	}else{
		$ss="SELECT * FROM ".$t." WHERE ".$w;
	}
	$rs = mysql_query($ss);
	$row = mysql_fetch_array($rs);			
	return $row;
}
function GetHW(){
	$Fecha=date("d-m-y");
	$Hora=time();
	$FechaYHora=$Fecha.$Hora;
	return $FechaYHora;
}
if(strlen($_SESSION['SYS_USER_ID'])>0){
	if(strlen($StrHWND)==0){
		$StrHWND=GetHW();
	}
}//
function CHSN($CH){
	if(strlen($CH)==0){
		return "N";
	}else{
		return "S";
	}
}
function cF($H,$W){
	echo "left:50%;top:50%;	margin:-".$H."px 0 0 -".$W."px;";
}
function cFx($H,$W){
	echo "left:50%;	margin: 0px 0 0 -".$W."px;";
}
function AddJsAdm(){
	echo "
	<script src=\"jquery-1.7.2.min.js\" type=\"text/javascript\"></script>
	<script src=\"jquery.maskedinput.min.js\" type=\"text/javascript\"></script>	
	";
}
function AddJs(){
	echo "
	<!-- Grid Css -->
<link rel=\"stylesheet\" href=\"dist/css/home.css\">	
	 <script src=\"src/js/jquery.min.js\"></script>
<script src=\"src/funciones.js\"></script>
	<!-- Grid Css -->
	<!-- bootstrap css -->
<link rel=\"stylesheet\" href=\"dist/css/bootstrap/css/bootstrap.css\">
<!-- bootstrap css -->
<!-- bootstrap js -->
<script src=\"dist/css/bootstrap/js/jquery-3.2.1.slim.min.js\"></script>
<script src=\"dist/css/bootstrap/js/popper.min.js\"></script>
<script src=\"dist/css/bootstrap/js/bootstrap.js\"></script>
<!-- bootstrap js -->  
	<script src=\"jquery-1.7.2.min.js\" type=\"text/javascript\"></script>
	<script src=\"jquery.maskedinput.min.js\" type=\"text/javascript\"></script>
	
		
	";
}
function VM($StrPhp){
	$i=gn("VA","al_vusu_men","UR LIKE '$StrPhp' AND IDU=".$_SESSION['SYS_USER_ID']);
	return $i;
}
//
require("fpdf.php");
class PDF extends FPDF
{
function Footer()
{// Posici�n: a 1,5 cm del final
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','',8);
// N�mero de p�gina
$this->Cell(0,10,'Pag '.$this->PageNo(),0,0,'C');
}
}

function AD($StrItem,$Sel){
	if($Sel==1){
		echo "<option value=\"$StrItem\" selected=\"selected\">$StrItem</option>";
	}else{
		echo "<option value=\"$StrItem\" >$StrItem</option>";
	}		
}
//
function dex_($StrDex){
	if(strlen($StrDex)==0){
		$StrDexT="1900-01-01";
	}else{
		if(IsDate($StrDex)==false){
			$StrDexT="1900-01-01";
		}else{
			$StrDexT=ToDate($StrDex);
		}
	}
	return $StrDexT;
}


function hax_($StrHax){
	if(strlen($StrHax)==0){
		$StrHaxT="2100-01-01";
	}else{
		if(IsDate($StrHax)==false){
			$StrHaxT="2100-01-01";
		}else{
			$StrHaxT=ToDate($StrHax);
		}
	}
	return $StrHaxT;	
}
//
function extension($filename){
    return substr(strrchr($filename, '.'), 1);
}
function NF($Num,$Nd){
return number_format($Num,$Nd,'.','');
}
function NF2($Num,$Nd){
return number_format($Num,$Nd,'.',',');
}
//
include("n2l.php");
include("inicializar.php");
include("vbruntime.php");
include("pdf_runtime.php");
//
function PagGet($_StrPag,$StrCmd,$LStrTR,$VP_RegXPag){
$_RESTO=$LStrTR%$VP_RegXPag;
if($_RESTO!=0){
	$LStrTR=$LStrTR+($VP_RegXPag-$_RESTO);
}
if(strlen($_StrPag)==0 || $_StrPag==0 ){
	$_StrPag="1";	
}	
if($StrCmd=="MSig"){
	$_StrPag=$_StrPag +1;	
}
if($StrCmd=="MAnt"){
	$_StrPag=($_StrPag-1);
}
if($StrCmd=="MPri"){
	$_StrPag=1;
}
if($StrCmd=="MUlt"){
	$_StrPag=($LStrTR / $VP_RegXPag);
}
if($_StrPag>0){	
	if($LStrTR >$VP_RegXPag * $_StrPag){
		if(($_StrPag-1)*$VP_RegXPag==$LStrTR){
			$_StrPag=$_StrPag-1;
		}
	}
}
return $_StrPag;
}
//
function PagBtn($LStrTR,$VP_RegXPag,$LStrPag){	
$s="";
$_RESTO=$LStrTR%$VP_RegXPag;
if($_RESTO!=0){
	$LStrTR=$LStrTR+($VP_RegXPag-$_RESTO);
}
if($LStrTR>$VP_RegXPag){
if($LStrPag==1){
$s=$s."<input style=\"width:40px\" name=\"CmdNP\" type=\"button\" id=\"CmdNP\" value=\"|&lt;\"  onclick=\"fPrimero();\" disabled=\"disabled\"/>";
$s=$s."<input style=\"width:40px\" name=\"CmdNA\" type=\"button\" id=\"CmdNA\" value=\"<\"  onclick=\"fAnterior();\" disabled=\"disabled\" />";
}else{
$s=$s."<input style=\"width:40px\" name=\"CmdNP\" type=\"button\" id=\"CmdNP\" value=\"|&lt;\"  onclick=\"fPrimero();\"/>";
$s=$s."<input style=\"width:40px\" name=\"CmdNA\" type=\"button\" id=\"CmdNA\" value=\"<\"  onclick=\"fAnterior();\"/>";
}
if(($LStrPag==floor($LStrTR  /$VP_RegXPag)  ) ){
$s=$s."<input style=\"width:40px\" name=\"CmdNS\" type=\"button\" id=\"CmdNS\" value=\">\"  onclick=\"fSiguiente();\"  disabled=\"disabled\" />";
$s=$s."<input style=\"width:40px\" name=\"CmdNU\" type=\"button\" id=\"CmdNU\" value=\"&gt;|\"  onclick=\"fUltimo();\"  disabled=\"disabled\"/>";				
}else{
$s=$s."<input style=\"width:40px\" name=\"CmdNS\" type=\"button\" id=\"CmdNS\" value=\">\"  onclick=\"fSiguiente();\" />";
$s=$s."<input style=\"width:40px\" name=\"CmdNU\" type=\"button\" id=\"CmdNU\" value=\"&gt;|\"  onclick=\"fUltimo();\"/>";				
}
}
return "<center>".$s."</center>";
}
//
function PagSql($s,$LStrPag,$VP_RegXPag,$LStrTR){	
if($LStrTR<=$VP_RegXPag){
return $s;
}else{
$LStrPag=$LStrPag-1;$StrTemp=$LStrPag * $VP_RegXPag;
return $s." LIMIT $StrTemp,$VP_RegXPag";
}
}
//PRINTER FUNCTION
function Pxy($X,$Y,$Str,$A,$iDER){
if($iDER==1)$X=$X - $A;
$s="<div style=\"left:$X"."cm;top:$Y"."cm;width:$A"."cm;word-wrap:break-word;height:11px;";
if($iDER==0){
$s=$s."text-align:left\"";
}else{
$s=$s."text-align:right\"";
}
$s=$s." class=\"EX\">".$Str."</div>";
return $s."\n";
}
//
function xy($X,$Y,$Str,$A,$iDER){
if($iDER==1)$X=$X - $A;
$s="<div style=\"left:$X"."cm;top:$Y"."cm;width:$A"."cm;";
if($iDER==0){
$s=$s."text-align:left\"";
}else{
$s=$s."text-align:right\"";
}
$s=$s." class=\"EX\">".$Str."</div>";
echo $s."\n";
}
function xy2($X,$Y,$Str,$A,$iDER){
if($iDER==1)$X=$X - $A;
$s="<div style=\"left:$X"."cm;top:$Y"."cm;width:$A"."cm;";
if($iDER==0){
$s=$s."text-align:left\"";
}else{
$s=$s."text-align:right\"";
}
$s=$s." class=\"EX2\">".$Str."</div>";
echo $s."\n";
}

function xz($X,$Y,$Str,$A,$iDER){
if($iDER==1)$X=$X - $A;
$s="<div style=\"display:block;text-align:justify;left:$X"."cm;top:$Y"."cm;width:$A"."cm\"";
$s=$s." class=\"EX\">".$Str."</div>";
echo $s."\n";
}
//
function SER_NUM_EX($StrSerNum,&$STR_SER,&$STR_NUM){
$iHasta=0;
for($i=1;$i<=strlen($StrSerNum);$i++){
if(vbmid($StrSerNum,$i,1)=="-"){
$iHasta=$i;
break;
}
}
$STR_SER=trim(vbmid($StrSerNum,1,$iHasta -1));
$STR_NUM=trim(vbmid($StrSerNum,$iHasta+1,strlen($StrSerNum) - $iHasta));
}
//
function GenId($StrId,$sT){
	$ss="Select Count(*) From $sT";
	$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
	if($row[0]==0){
		$StrIdEx=1;
	}else{
		$ss="Select Max($StrId) From $sT";
		$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
		$StrIdEx=$row[0]+1;
	}
	return $StrIdEx;
}
function GenIdEX($StrId,$sT,$W){
	$ss="SELECT Count(*) FROM $sT WHERE $W";
	$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
	if($row[0]==0){
		$StrIdEx=1;
	}else{
		$ss="SELECT MAX($StrId) FROM $sT WHERE $W";
		$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
		$StrIdEx=$row[0]+1;
	}
	return vbr("00000".$StrIdEx,5);
}
//
function GetTC(){
	return NF(gn("valor","valores","tabla='T_CAMBIO'"),2);
}
//
function GetIGV(){return 18;}
//
function GenGI(){
$ss="Select Max(valor) From al_gindex";
$rs = mysql_query($ss);$row = mysql_fetch_row($rs);				
$StrIdEx=$row[0]+1;ejt("UPDATE al_gindex SET valor=valor+1");
return $StrIdEx;
}
//
function V($StrVar){return ($StrVar==null) ? "" : $StrVar;}
//
function TODOS($StrCer){
if($StrCer=="TODOS"){
echo "<option value=\"TODOS\" 
selected=\"selected\">TODOS</option>";
}else{
echo "<option value=\"TODOS\" >TODOS</option>";
}
}
//
function LIKE($StrV){
if($StrV=="TODOS"){
return "%";
}else{
return $StrV;
}	
}
//
function VV($StrVar){if($StrVar==null)return "&nbsp;";if(strlen(trim($StrVar))==0)return "&nbsp;";return $StrVar;}
//
function Gss($sC,$sT,$sW)
{return (strlen($sW)>0) ? "Select $sC From $sT Where $sW" : "Select $sC From $sT";}
/*
$sC Campo
$sT Tabla
$sW Where */
function gn($sC,$sT,$sW)
{
	$ss=Gss($sC,$sT,$sW);
	$rs = mysql_query($ss);
	$row = mysql_fetch_row($rs);
	return (is_null($row[0])) ? "0" : $row[0];
}
function gc($sT,$sW)
{
	$ss=Gss("count(*)",$sT,$sW);
	$rs = mysql_query($ss);
	$row = mysql_fetch_row($rs);
	return (is_null($row[0])) ? "0" : $row[0];
}

function gs($sC,$sT,$sW)
{$ss=Gss($sC,$sT,$sW);$rs = mysql_query($ss);$row = mysql_fetch_row($rs);return (is_null($row[0])) ? "" : $row[0];}
function GetC($sT,$sW)
{$ss=Gss("count(*)",$sT,$sW);$rs = mysql_query($ss);$row = mysql_fetch_row($rs);return (is_null($row[0])) ? "0" : $row[0];}
//
function GetSO($sC,$sT,$sW,$StrOrden){
$ss="Select $sC From $sT ";
if(strlen($sW)>0)
$ss=$ss." WHERE $sW ORDER BY $StrOrden";		
else
$ss=$ss." ORDER BY $StrOrden";		
$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
return (is_null($row[0])) ? "" : $row[0];
}
//
function ejt($ss){$rs = mysql_query($ss);}
function DelAll($sT){$rs = mysql_query("DELETE FROM $sT ");}
function INSERT($sT,$StrValues){$rs = mysql_query("INSERT INTO $sT VALUES ($StrValues)");}
function DELETE($sT,$sW){$rs = mysql_query("DELETE From $sT WHERE $sW");}
function UPDATE($sT,$StrValues,$sW){$rs = mysql_query("UPDATE $sT SET $StrValues WHERE $sW");}
//
function JsMsg($StrMsg,$StrUrl){
echo "
<script language='javascript'> 
alert('$StrMsg'); 
location.href='$StrUrl';
</script>
";
}
//
function JsDir($StrUrl){
echo "
<script language='javascript'> 				
location.href='$StrUrl';
</script>
";
}
function JsDirN($StrUrl){
echo "
<script language='javascript'> 				
window.location='$StrUrl';
</script>
";
}
//
function SetVar($StrVar,$StrVal){
if(gn("count(*)","variables","variable='$StrVar'")==0){
ejt("INSERT INTO variables VALUES ('$StrVar','$StrVal')");
}else{
ejt("UPDATE variables SET valor='$StrVal' WHERE variable='$StrVar'");
}
}
//
function GetVar($StrVar){
return gs("valor","variables","variable='$StrVar'");
}
//
function IsNumber($StrNum){
if(is_numeric($StrNum))
return true;
else
return false;
}
//
function IsDate($StrFecha){
$StrAnio="20".substr($StrFecha,6,2);
$StrMes=substr($StrFecha,3,2);
$StrDia=substr($StrFecha,0,2);	
if(!is_numeric($StrDia)) return false;
if(!is_numeric($StrMes)) return false;
if(!is_numeric($StrAnio)) return false;	
if (checkdate((int) $StrMes,(int) $StrDia, (int)$StrAnio)){
return true;
}else{
return false;
}
}
//
function ToDate($StrFecha){
if(strlen($StrFecha)==0){
return "1900-01-01";
}else{
$StrAnio="20".substr($StrFecha,6,2);
$StrMes=substr($StrFecha,3,2);
$StrDia=substr($StrFecha,0,2);	
return $StrAnio."-".$StrMes."-".$StrDia;
}
}
//
function GetHoraServer(){
$StrDate=date("r");
return $StrDate;}
function GetHora(){
$StrDate=date("H:i:s");
$StrHor=substr($StrDate,0,2);$StrMin=substr($StrDate,3,2);
$StrSeg=substr($StrDate,6,2);$StrHor=$StrHor;
if(strlen($StrHor)==1){
$StrHor="0".$StrHor;
}
return $StrHor.":".$StrMin.":".$StrSeg;
}
//
function GetHoraAP(){
$StrDate=GetHora();
$StrHor=substr($StrDate,0,2);$StrMin=substr($StrDate,3,2);
$StrSeg=substr($StrDate,6,2);$StrAP="AM";
if($StrHor>=13){
$StrAP="PM";$StrHor=$StrHor - 12;
}
if(strlen($StrHor)==1){
$StrHor="0".$StrHor;
}
return $StrHor.":".$StrMin.":".$StrSeg." ".$StrAP;
}
//
function GetHoraAPBasic(){
$StrDate=GetHora();
$StrHor=substr($StrDate,0,2);$StrMin=substr($StrDate,3,2);
$StrSeg=substr($StrDate,6,2);$StrAP="AM";
if($StrHor>=12){
	$StrAP="PM";
}
if($StrHor>=13){	
	$StrHor=$StrHor - 12;
}
if(strlen($StrHor)==1){
$StrHor="0".$StrHor;
}
return $StrHor.":".$StrMin." ".$StrAP;
}
//
function GetHor($lpStrH){
	return vbmid($lpStrH,1,2);
}
function GetMin($lpStrH){
	return vbmid($lpStrH,4,2);
}
function GetSeg($lpStrH){
	return vbmid($lpStrH,7,2);
}

//
function EnviarEmail($StrTit,$StrAsunto,$StrCliente,$StrEmail,$StrTexto,$StrF1,$StrF2){
$mail = new PHPMailer();	
$mail->Host = "localhost";
$mail->From = "remite@email.com";//Correo de quien esta enviando.
$mail->FromName = $StrTit; //Quien esta enviando esto aparece en la bandeja
$mail->Subject = $StrAsunto; //Titulo del correo aparecen en la bandeja
$mail->AddAddress($StrEmail,$StrCliente);//Nombre 01->cliente ejt. Marco sayas
//$mail->AddAddress("destino2@correo.com","Nombre 02");	
$mail->Body =$StrTexto;
$mail->AltBody = "***";
if(strlen($StrF1)>0 && strlen($StrF2)>0){
$mail->AddAttachment($StrF1,$StrF2);
}
if(strlen($StrF1)>0 && strlen($StrF2)==0){
$mail->AddAttachment($StrF1);
}
if(strlen($StrF1)==0 && strlen($StrF2)>0){
$mail->AddAttachment($StrF2);
}
$mail->Send();
}
//
function GetMES($i){
if($i==1) return "Enero";		if($i==2) return "Febrero";if($i==3) return "Marzo";
if($i==4) return "Abril";		if($i==5) return "Mayo";if($i==6) return "Junio";
if($i==7) return "Julio";		if($i==8) return "Agosto";if($i==9) return "Septiembre";
if($i==10) return "Octubre";	if($i==11) return "Noviembre";if($i==12) return "Diciembre";
return "****";}
function FECHA_ADD($lpDias,$lpMeses,$lpAnios){
$Fecha = mktime(0, 0, 0, date("m")+$lpMeses, date("d")+$lpDias, date("Y")+$lpAnios);
$StrFechaA= date("d-m-y", $Fecha);return $StrFechaA;}

function FEC_ADD($StrFecDMA,$lpDias,$lpMeses,$lpAnios){
$StrDia=vbmid($StrFecDMA,1,2);	
$StrMes=vbmid($StrFecDMA,4,2);	
$StrAni=vbmid($StrFecDMA,7,2);	
$StrAni=$StrAni+2000;
$Fecha = mktime(0, 0, 0, $StrMes+$lpMeses, $StrDia+$lpDias,$StrAni +$lpAnios);
$StrFechaA= date("d-m-y", $Fecha);
return $StrFechaA;
}
function WD($D2M2A4){
	$f=explode("-",$D2M2A4);
	$DIA=$f[0];
	$MES=$f[1];
	$ANI=$f[2];
	$d=0;
	$i=date("w", mktime(0, 0, 0, $MES,$DIA, $ANI));
	if($i==0)$d=7;
	if($i==1)$d=1;
	if($i==2)$d=2;
	if($i==3)$d=3;
	if($i==4)$d=4;
	if($i==5)$d=5;
	if($i==6)$d=6;
	return $d;
}
function FEC_ADD_($StrFecD2M2A4,$lpDias,$lpMeses,$lpAnios){
	$StrDia=vbmid($StrFecD2M2A4,1,2);	
	$StrMes=vbmid($StrFecD2M2A4,4,2);	
	$StrAni=vbmid($StrFecD2M2A4,7,4);	
	$Fecha = mktime(0, 0, 0, $StrMes+$lpMeses, $StrDia+$lpDias,$StrAni +$lpAnios);
	$StrFechaA= date("d-m-Y", $Fecha);
	return $StrFechaA;
}
function dmY2Ymd($dmY){
	$f=explode("-",$dmY);
	return $f[2]."-".$f[1]."-".$f[0];
	
}

function FECHA_DIASEM(){
$fecha= date("Y-m-d");$i = strtotime($fecha);
return jddayofweek(cal_to_jd(CAL_GREGORIAN, date("m",$i),date("d",$i), date("Y",$i)) , 0 );
}
function FECHA_SEM_PD(){
$iDia=(FECHA_DIASEM()-1)* -1;$StrFec=FECHA_ADD($iDia,0,0);
return $StrFec;}
function FECHA_HOY(){return date("d-m-y");}



//
function PDF_COTI($Id){
$_CxL=90;
$_S=10;
$pdf = new PDF('P','mm',A4);
$pdf->AddPage();$pdf->SetFont('courier','B',16);	
$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,"INREVA S.A.C.",0,1);	
$pdf->SetFont('courier','',10);
$pdf->Cell(0,4,"SUMINISTROS ELECTRONICOS - EQUIPOS Y REPUESTOS ",0,1);	
$pdf->Cell(0,4,"AV. LAS MALVINAS 315 OF. 152",0,1);	

$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,vbl("PROFORMA".vbfill(" ",$_S),$_S)." : ".gs("CONCAT(SER,'-',NUM)","vcotizaciones","ID=$Id"),0,1);	
$pdf->Cell(0,4,vbl("FECHA".vbfill(" ",$_S),$_S)." : ".gs("DATE_FORMAT(FEC,'%d-%m-%Y')","vcotizaciones","ID=$Id"),0,1);	
$pdf->Cell(0,4,vbl("CLIENTE".vbfill(" ",$_S),$_S)." : ".gs("CLI","vcotizaciones","ID=$Id"),0,1);	
$pdf->Cell(0,4,vbl("RUC".vbfill(" ",$_S),$_S)." : ".gs("RUC","vcotizaciones","ID=$Id"),0,1);
$_MON=gs("MON","vcotizaciones","ID=$Id");
if($_MON=="S"){
	$_MON="Soles   (S/.) ";
}else{
	$_MON="Dolares ($) ";
}
$_IIG=gs("IIG","vcotizaciones","ID=$Id");
if($_IIG=="0"){
	$_IIG="Los precios NO incluyen IGV";
}else{
	$_IIG="Los precios incluyen IGV";
}

$pdf->Cell(0,4,vbl("MONEDA".vbfill(" ",$_S),$_S)." : ".$_MON,0,1);	
$pdf->Cell(0,4,vbl("NOTA".vbfill(" ",$_S),$_S)." : ".$_IIG,0,1);	
$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,vbfill("-",$_CxL),0,1);	
$_ENC="CODIGO".vbfill(" ",15)." "."DESCRIPCION".vbfill(" ",30)." "."PRECIO"." "."DSCTO"." "."CANT"."  "."IMPORTE";
$pdf->Cell(0,4,$_ENC,0,1);	
$pdf->Cell(0,4,vbfill("-",$_CxL),0,1);	
//
$s="SELECT COD,DES,FORMAT(PR,1),FORMAT(DT,1),KA,FORMAT(IMP,1) FROM vcotizaciones_det WHERE ID=$Id";
$result = mysql_query($s);
while ($row = mysql_fetch_row($result)){
	$_COD=vbl($row[0].vbfill(" ",21),21);
	$_DES=vbl($row[1].vbfill(" ",41),41);
	$_PRE=vbr(vbfill(" ",6).$row[2],6);
	$_DST=vbr(vbfill(" ",5).$row[3],5);
	$_KAN=vbr(vbfill(" ",4).$row[4],4);
	$_IMP=vbr(vbfill(" ",7).$row[5],7);
	$pdf->Cell(0,4,$_COD." ".$_DES." ".$_PRE." ".$_DST." ".$_KAN."  ".$_IMP,0,1);	
}
$pdf->Cell(0,4,vbfill("-",$_CxL),0,1);	
$_TOT="TOTAL : ".gs("FORMAT(TOT,1)","vcotizaciones","ID=$Id");
$pdf->Cell(0,4,vbfill(" ",$_CxL-strlen($_TOT)).$_TOT,0,1);	
//
$_S=20;
$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,"",0,1);	

$_FDP=vbl("FORMA DE PAGO".vbfill(" ",$_S),$_S)." : ".gs("fdp","cotizaciones_con","");	
$_TDE=vbl("TIEMPO DE ENTREGA".vbfill(" ",$_S),$_S)." : ".gs("tde","cotizaciones_con","");	
$_GAR=vbl("GARANTIA".vbfill(" ",$_S),$_S)." : ".gs("gar","cotizaciones_con","");	
$_VAL=vbl("VALIDES DE OFERTA".vbfill(" ",$_S),$_S)." : ".gs("val","cotizaciones_con","");	
$_STO=vbl("STOCK".vbfill(" ",$_S),$_S)." : ".gs("stock","cotizaciones_con","");	
$pdf->Cell(0,4,$_FDP,0,1);
$pdf->Cell(0,4,$_TDE,0,1);
$pdf->Cell(0,4,$_GAR,0,1);	
$pdf->Cell(0,4,$_VAL,0,1);	
$pdf->Cell(0,4,$_STO,0,1);	
$pdf->Cell(0,4,"",0,1);	
$pdf->Cell(0,4,"",0,1);	

//
$PDF_NAME="Cotizacion".gs("CONCAT(SER,'-',NUM)","vcotizaciones","ID=$Id").".pdf";
$pdf->Output($PDF_NAME);		
return $PDF_NAME;
}

///////////////////////////////////////////////////////////
function XLS_IMPORTAR($StrIdE){
	$data = new Spreadsheet_Excel_Reader();
	$data->setOutputEncoding('CP1251');
	$data->read('Registro.xls');
	error_reporting(E_ALL ^ E_NOTICE);
	$Fil=$data->sheets[0]['numRows'];
	$Col=$data->sheets[0]['numCols'];	
	for ($i = 2; $i <= $Fil; $i++) {
		$REG=V($data->sheets[0]['cells'][$i][1]); 		
		$APE=V($data->sheets[0]['cells'][$i][2]); 		
		$EMP=V($data->sheets[0]['cells'][$i][4]); 		
		$CC=V($data->sheets[0]['cells'][$i][5]); 		
		$CC2=V($data->sheets[0]['cells'][$i][6]); 		
		$CCN=V($data->sheets[0]['cells'][$i][7]);
		$UNI=V($data->sheets[0]['cells'][$i][8]); 		
		$ARE=V($data->sheets[0]['cells'][$i][9]); 		
		$PUE=V($data->sheets[0]['cells'][$i][10]); 		
		$TDO=""; 		
		$TDN=""; 		
		if(strlen($REG)==0) break;
		//
		if(gn("COUNT(*)","registros","reg_registro='$REG'")==0){
			$StrId=GenId("id_registro","registros");
			$s="INSERT INTO registros VALUES ($StrId,$StrIdE,".
			"'$REG','$EMP','$CC','$CCN','$UNI','$ARE','$PUE',".
			"'$TDO','$TDN','$APE','','','','$CC2','$REG','','','')";
			ejt($s);			
		}else{
			$s="UPDATE registros SET reg_id_cliente=$StrIdE,".
			"reg_empresa='$EMP',reg_cc='$CC',reg_cc2='$CC2'".
			"reg_cc_nombre='$CCN',reg_unidad='$UNI',".
			"reg_area='$ARE',reg_puesto='$PUE',".
			"reg_tdoc='$TDO',reg_tdoc_nro='$TDN',reg_ape_nom='$APE' ".
			"WHERE reg_registro='$REG'";
			ejt($s);
		}
	}
}
//
function HTL($StrH,$StrM,$StrA){
	if($StrA=="a.m."){
		if($StrH==12){
			$StrH=0;
		}
		return ($StrH*60)+$StrM;
	}else{
		if($StrH==12){
			$StrH=0;
		}	
		return (($StrH+12)*60)+$StrM;
	}
	return 0;
}

class Google
{
    public $origen;
    public $destino;
    public $idioma  = "es";
    public $sensor  = "false";
    public $region  = "es";
    public $country = "ES";
    private function parseJSON($url)
    {
		$url = str_replace (" ", "+", $url);
		$file = file_get_contents($url);
		$json = json_decode($file, true);
		return $json;
    }
    public function gps($O,$D)
    {
		$origen = $O;
		$destino = $D;
		$url = "http://maps.googleapis.com/maps/api/distancematrix/json?"
			. "origins=" . $origen . "&destinations=" . $destino . ""
			. "&mode=driving&"
			. "language=" . $this->idioma . "&"
			. "sensor=" . $this->sensor ."&region=es";
		$data = self::parseJSON($url);
		return $data;
    }
}


//
if(gn("COUNT(*)","usuarios","id_usuario=0")==0){
	ejt("INSERT INTO usuarios VALUES (0,'','','','NO',0,0,0,0,'',0)");	
}
//////////////////////////////////////////////////////////////////////////////////////
function GOM($StrId){
	if(strlen($StrId)==0){
		echo "value=\"Guardar\"";
	}else{
		echo "value=\"Modificar\"";
	}
}

function GOM_COMPLETARDATOS($StrId){
	if(strlen($StrId)==0){
		echo "value=\"SALDEAQUI\"";
	}else{
		echo "value=\"Completar\"";
	}
}


function DIS($StrId){
	if(strlen($StrId)==0){
		echo "disabled=\"disabled\"";
	}
}

function F_CARGOS($StrCar){
	$s="SELECT car_nombre FROM cargos WHERE id_cargo>= 0 ORDER BY car_nombre";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrCar==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
//-----------------------------------------------------------------------
function GES(){
	$SUC=V($_SESSION['SYS_USER_SUC']);
	return $SUC;
}
function GEL(){
	$SUC=V($_SESSION['SYS_USER_SUC']);
	return strlen($SUC);
}
function SES_SUC(){
	$SUC=V($_SESSION['SYS_USER_SUC']);
	if(strlen($SUC)==0 ){
		$SUC="%";
	}
	return $SUC;
}

function SES_SUCB($StrSuc){
	if(strlen($_SESSION['SYS_USER_SUC'])==0){
		if(strlen($StrSuc)==0) {
			$StrSuc="TODOS";		
		}
	}else{
		$StrSuc=$_SESSION['SYS_USER_SUC'];
	}
	return $StrSuc;
}
function SES_SUCR($StrSuc){
	if(strlen($_SESSION['SYS_USER_SUC'])==0){
		if(strlen($StrSuc)==0) {
			$StrSuc="";		
		}
	}else{
		$StrSuc=$_SESSION['SYS_USER_SUC'];
	}
	return $StrSuc;
}
function SUC_VT($StrSuc){
	if($StrSuc=="TODOS"){
		$StrSuc="%";
	}
	return $StrSuc;
}
//-----------------------------------------------------------------------
function F_SUCD($StrSucO,$StrSucD,$Todos=0){
	if($Todos==1){
		if($StrSucD=="TODOS"){
			echo "<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
		}else{
			echo "<option value=\"TODOS\" >TODOS</option>";
		}
	}
	if(strlen($StrSucO)>0){
		if($Todos==1){
		$s="SELECT suc_nombre FROM sucursales ".
	   	   "WHERE id_sucursal>0 AND suc_nombre<>'$StrSucO' ".
	       "ORDER BY suc_nombre";

		}else{
		$s="SELECT suc_nombre FROM sucursales ".
	   	   "WHERE id_sucursal>=0 AND suc_nombre<>'$StrSucO' ".
	       "ORDER BY suc_nombre";
		}
	}else{
		if($Todos==1){
		$s="SELECT suc_nombre FROM sucursales ".
	   	   "WHERE id_sucursal>0  ".
	       "ORDER BY suc_nombre";		
		}else{
		$s="SELECT suc_nombre FROM sucursales ".
	   	   "WHERE id_sucursal>=0  ".
	       "ORDER BY suc_nombre";		
		}
	}
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrSucD==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}  
}
function F_SUC($StrSuc,$Todos="N"){
	$SUC=V($_SESSION['SYS_USER_SUC']);
	if(strlen($SUC)==0 ){
		$SUC="%";
	}else{
		$Todos="N";
	}
	if($Todos=="N"){
	$s="SELECT suc_nombre FROM sucursales ".
	   "WHERE id_sucursal>=0 AND suc_nombre LIKE '$SUC' ".
	   "ORDER BY suc_nombre";	
	}else{
	$s="SELECT suc_nombre FROM sucursales WHERE id_sucursal> 0 ORDER BY suc_nombre";
	}
	if($Todos=="S"){	
	if($StrSuc=="TODOS"){
		echo "<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
	}else{
		echo "<option value=\"TODOS\" >TODOS</option>";
	}
	}
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrSuc==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
function F_MON($StrMon){
	$s="SELECT nom FROM monedas WHERE id_moneda>= 0 ORDER BY id_moneda";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrMon==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
function F_PAI($StrPais){
	$s="SELECT pai_nom FROM paises WHERE id_pais>= 0 ORDER BY pai_nom";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrPais==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
function F_GRU($StrGru,$Todos="N"){
	if($Todos=="S"){	
		if($StrGru=="TODOS"){
			echo "<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
		}else{
			echo "<option value=\"TODOS\" >TODOS</option>";
		}
	}
	if($Todos=="N"){
		$s="SELECT gru_nom FROM grupos WHERE id_grupo>= 0 ORDER BY gru_nom";
	}else{
		$s="SELECT gru_nom FROM grupos WHERE id_grupo> 0 ORDER BY gru_nom";
	}
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrGru==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
//
function F_STOCK($StrStock){	
	$s="SELECT aux_valor FROM auxiliar WHERE ".
	"aux_ext='RPT_STOCK' ORDER BY id_aux";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrStock==$row[0]){
		echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
function F_MND($StrMon){
	$s="SELECT valor ".
	"FROM valores ".
	"WHERE tabla='MONEDA' ORDER BY orden";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrMon==$row[0]){
			echo "<option value=\"$row[0]\" ".
			"selected=\"selected\">$row[0]</option>";		
		}else{
			echo "<option value=\"$row[0]\">$row[0]</option>";
		}
	}
}
//


function FCBOO_($StrCam,$StrTab,$StrCon,$StrSel,$StrTod,$StrVac="N",$StrOrd){
	$c="";
	if($StrTod=="S"){
		if(strlen($StrSel)==0 || $StrSel=="TODOS"){
		$c=$c."<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
		}else{
		$c=$c. "<option value=\"TODOS\" >TODOS</option>";
		}
	}
	if($StrVac=="S"){
		if(strlen($StrSel)==0 ){
		$c=$c. "<option value=\"\" selected=\"selected\"></option>";
		}else{
		$c=$c. "<option value=\"\" ></option>";
		}
	}
	//
	if(strlen($StrCon)==0){
		$s="SELECT $StrCam FROM $StrTab ORDER BY $StrOrd";
	}else{
		$s="SELECT $StrCam FROM $StrTab WHERE $StrCon ORDER BY $StrOrd";
	}
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrSel==$row[0]){
			$c=$c. "<option value=\"$row[0]\" ".
			"selected=\"selected\">$row[0]</option>";
		}else{
			$c=$c. "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
	return $c;
}
function FCBO($StrCam,$StrTab,$StrCon,$StrSel,$StrTod,$StrVac="N",$StrOrd){	
	if($StrTod=="S"){
		if(strlen($StrSel)==0 || $StrSel=="TODOS"){
		echo "<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
		}else{
		echo "<option value=\"TODOS\" >TODOS</option>";
		}
	}
	if($StrVac=="S"){
		if(strlen($StrSel)==0 ){
		echo "<option value=\"\" selected=\"selected\"></option>";
		}else{
		echo "<option value=\"\" ></option>";
		}
	}
	
	if(strlen($StrOrd)>0){$Ord="ORDER BY $StrOrd";}else{$Ord="ORDER BY $StrCam";}
	
	if(strlen($StrCon)==0){
		$s="SELECT $StrCam FROM $StrTab $Ord";
	}else{
		$s="SELECT $StrCam FROM $StrTab WHERE $StrCon $Ord";
	}
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrSel==$row[0]){
			echo "<option value=\"$row[0]\" ".
			"selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}	
}
//
function F_AT($StrSN){	
	if(strlen($StrSN)==0){
		echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
	}else{
		echo "<option value=\"\" ></option>";
	}
	$s="SELECT aux_valor FROM auxiliar WHERE ".
	"aux_ext='ABO_TIP' ORDER BY id_aux ";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrSN==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
//
function F_CLI_COB($StrSN){
	$s="SELECT aux_valor FROM auxiliar WHERE ".
	"aux_ext='CLI_COB' ORDER BY id_aux";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrSN==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
function F_AUT($StrAut){	
	$s="SELECT aut_nom FROM autores WHERE id_autor>=0 ORDER BY aut_nom";
	$result = mysql_query($s);
	while ($row = mysql_fetch_row($result)){
		if($StrAut==$row[0]){
			echo "<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
		}else{
			echo "<option value=\"$row[0]\" >$row[0]</option>";
		}
	}
}
function ToNum($StrNum){
	if(strlen($StrNum)==0)$StrNum=0;
	if(is_numeric($StrNum)==false)$StrNum=0;
	return $StrNum;
}
//

function GenTxt($Nom,$Val){
	return "<input name=\"$Nom\" type=\"hidden\"  id=\"$Nom\" value=\"$Val\" />";
}
//FUNCIONES_LIBROS_INI
function GVENTAS_COB_ADD($IdVen,$IdCob){
	$Id=GenId("id_gvco","gventas_cob ");
	$s="INSERT INTO gventas_cob VALUES ($Id,$IdVen,$IdCob)";
	ejt($s);
}
function GVENTAS_COB_GET($IdVen){	
	if(gn("count(*)","gventas_cob","gvco_id_gventa=$IdVen")==0){
		if(gn("count(*)","gventas","id_gventa=$IdVen")>0){
			$StrCod=gn("gv_id_cobrador","gventas","id_gventa=$IdVen");
			return $StrCod;	
		}else{
			return 0;
		}
	}else{
		$Max=gn("MAX(id_gvco)","gventas_cob","gvco_id_gventa=$IdVen");
		$StrCod=gn("gvco_id_cobrador","gventas_cob","id_gvco=$Max");
		return $StrCod;
	}
}
function STOCK_INI_SET($Suc_,$Pro_,$Sto_){
	if(gn("count(*)","stocks_ini",
	      "si_id_sucursal=$Suc_ AND si_id_existencia=$Pro_")==0){
		ejt("INSERT INTO stocks_ini VALUES ($Suc_,$Pro_,$Sto_)");		  
	}else{
		ejt("UPDATE stocks_ini ".
		    "SET si_stock=$Sto_ ".
			"WHERE si_id_sucursal=$Suc_ AND si_id_existencia=$Pro_");
	}
}
function STOCK_SET($Suc_,$Pro_,$Sto_){
	if(gn("count(*)","stocks",
	      "st_id_sucursal=$Suc_ AND st_id_existencia=$Pro_")==0){
		ejt("INSERT INTO stocks VALUES ($Suc_,$Pro_,$Sto_)");		  
	}else{
		ejt("UPDATE stocks ".
		    "SET st_stock=$Sto_ ".
			"WHERE st_id_sucursal=$Suc_ AND st_id_existencia=$Pro_");
	}
}
function STOCK_ADD($Suc_,$Pro_,$Can_){
	if(gn("count(*)","stocks",
	      "st_id_sucursal=$Suc_ AND st_id_existencia=$Pro_")==0){
		ejt("INSERT INTO stocks VALUES ($Suc_,$Pro_,$Can_)");		  
	}else{
		ejt("UPDATE stocks ".
		    "SET st_stock=st_stock + $Can_ ".
			"WHERE st_id_sucursal=$Suc_ AND st_id_existencia=$Pro_");
	}
}
function STOCK_SUB($Suc_,$Pro_,$Can_){
	if(gn("count(*)","stocks",
	      "st_id_sucursal=$Suc_ AND st_id_existencia=$Pro_")==0){
		$Can_=$Can_ * -1;	  
		ejt("INSERT INTO stocks VALUES ($Suc_,$Pro_,$Can_)");		  
	}else{
		ejt("UPDATE stocks ".
		    "SET st_stock=st_stock - $Can_ ".
			"WHERE st_id_sucursal=$Suc_ AND st_id_existencia=$Pro_");
	}
}
function TSOLES($StrTot,$StrMnd,$StrTc){
	if($StrMnd=="S" || $StrMnd=="SOLES"){
		return $StrTot;
	}else{
		return round($StrTot * $StrTc,2);
	}
}
//FUNCIONES_LIBROS_FIN
function COMPRAS_GN(){
	$StrNro="";
	if(strlen(GES())>0){
		$StrNro=gn("MAX(CX)","vis_compras","SUC='".GES()."'")+1;
		$StrNro=vbr("00000".$StrNro,6);
	}else{
		$StrNro="";	
	}
	return $StrNro;
}
//

function OK_PR($cx){
	if($cx==0){
		return "OK";
	}else{
		return "PR";
	}
}
function PID(&$StrId,$GET_ID,&$StrCmd,&$LStrPag,$GET_PAG){
	if(strlen($StrId)==0){
		$StrId=$GET_ID;
		if(is_numeric($StrId)==false){
			$StrId="";		
		}else{
			$StrCmd="AR";
			$LStrPag=$GET_PAG;
			if(!is_numeric($LStrPag)){
				$LStrPag="";
			}
		}
	}
}

function BL($StrGT,$LStrMsg,$LStrFoc,$P_C){
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
		if(strlen($LStrFoc)==0){
			$LStrFoc="jF('$P_C');";	
		}
		$LStrMsg="onload=\"$LStrFoc;\"";
	}
	return $LStrMsg;
}

function PGT($StrGT,$LStrFoc,$LStrMsg){
	if($StrGT=="S"){
		if(strlen($LStrMsg)>0){
			if(strlen($LStrFoc)==0){
				$LStrMsg="onload=\"alert('$LStrMsg');\"";
			}else{
				$LStrMsg="onload=\"alert('$LStrMsg');jF('$LStrFoc');\"";
			}
		}else{
			if(strlen($LStrFoc)>0){
				$LStrMsg="onload=\"jF('$LStrFoc');\"";
			}
		}
	}else{	
		$LStrFoc="document.getElementById('$P_C').focus();";
		$LStrMsg="onload=\"$LStrFoc;\"";
	}
	return $LStrMsg;
}
//--------------------------------------------------------------------------
function ListSuc($Suc,$Tod,$Vac){
$IdUsu=$_SESSION['SYS_USER_ID'];
//
if($Tod=="S"){
	if($IdUsu==0){
		$ss=$ss."<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
	}	
	if($IdUsu>0 && strlen($R_Ger)>0){
		$ss=$ss."<option value=\"TODOS\" selected=\"selected\">TODOS</option>";
	}
}

if($Vac=="S"){
	if(strlen($StrSel)==0 ){
	$ss=$ss. "<option value=\"\" selected=\"selected\"></option>";
	}else{
	$ss=$ss. "<option value=\"\" ></option>";
	}
}

if($IdUsu==0){
	$s="SELECT SUC FROM al_sucursales_v 
		WHERE ID>0 AND SUC LIKE '%' ORDER BY SUC";
}


$S_Suc=V($_SESSION['SYS_USER_SUC']);
if($IdUsu>0){
	$s="SELECT SUC FROM al_sucursales_v 
		WHERE ID>0 AND SUC LIKE '$S_Suc' ORDER BY SUC";
}

$result = mysql_query($s);
while ($row = mysql_fetch_row($result)){
if($Suc==$row[0]){
$ss=$ss."<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>";
}else{
$ss=$ss."<option value=\"$row[0]\" >$row[0]</option>";
}
}
return $ss;
}
//--------------------------------------------------------------------------
function Sel_Suc($Suc){
	if($_SESSION['SYS_USER_SUC']==""){
		if(strlen($Suc)==0) {
			//$Suc=GetSO("SUC","pre_v_sucursales","ID>0","SUC");
		$Suc="%";		
		}
	}else{
		$Suc=$_SESSION['SYS_USER_SUC'];
	}
	return $Suc;
}
//--------------------------------------------------------------------------
function EsFeriado($A4M2D2){
	//
	$f=explode("-",$A4M2D2);
	$d=$f[2];
	$m=$f[1];
	$dm=$d."-".$m;
	if(gn("count(*)","pre_feriados_continuos","pre_dia_mes='$dm'")>0){
		return true;
	}
	//
	if(gn("count(*)","pre_feridos","fer_fecha='$A4M2D2'")>0){
		return true;
	}
	return false;	
}

//**------------------------------------------------------------------------
function Ex($filename){
    return substr(strrchr($filename, '.'), 1);
}
//**------------------------------------------------------------------------
function ImgA($P){
	$F1=$P.".jpg";
	$F2=$P.".png";
	$F3=$P.".gif";
	//
	if (file_exists($F1)){$FO=$F1;}
	if (file_exists($F2)){$FO=$F2;}
	if (file_exists($F3)){$FO=$F3;}
	//
	return $FO;	
}
//**------------------------------------------------------------------------
function ImgG($Nom,$P){
	$Fot=$_FILES[$Nom]['name'];
	if(strlen($Fot)>0){
		$F1=$P.".jpg";
		$F2=$P.".png";
		$F3=$P.".gif";
		//
		if (file_exists($F1)){$FO=$F1;}
		if (file_exists($F2)){$FO=$F2;}
		if (file_exists($F3)){$FO=$F3;}
		//	
		if(strlen($FO)>0){unlink($FO);}
		//
		$Ext=Ex($Fot);
		$Fot_=$P.".".$Ext;
		if (move_uploaded_file($_FILES[$Nom]['tmp_name'], $Fot_)){}
	}
}
//**------------------------------------------------------------------------
function ImgE($Img){
	unlink($Img);
}

//**------------------------------------------------------------------------
function fSerie($Lon,$IdTabla,$Tabla){
	$SNum=GenId($IdTabla,$Tabla);
	$F=vbval($Lon);
	$Lon="";
	//
	for($i=1; $i<=$F; $i++){
		$Lon=$Lon."0";
	}
	//
	$G=vbl($Lon,strlen($Lon)-strlen($SNum));
	return $G.$SNum;
}
//**------------------------------------------------------------------------
function D($StrDex){
	if(strlen($StrDex)==0){
		$StrDexT="1900-01-01";
	}else{
		if(IsDate($StrDex)==false){
			$StrDexT="1900-01-01";
		}else{
			$StrDexT=ToDate($StrDex);
		}
	}
	return $StrDexT;
}
//**------------------------------------------------------------------------
function H($StrHax){
	if(strlen($StrHax)==0){
		$StrHaxT="2100-01-01";
	}else{
		if(IsDate($StrHax)==false){
			$StrHaxT="2100-01-01";
		}else{
			$StrHaxT=ToDate($StrHax);
		}
	}
	return $StrHaxT;	
}
//**------------------------------------------------------------------------
function UltimoDiaMes($elAnio,$elMes) {
  return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));  
}
//**------------------------------------------------------------------------
function IntF($Fecha){
	$F=explode("-",$Fecha); 
	$A=$F[0].$F[1].$F[2]; 
	return $A;
}
//**------------------------------------------------------------------------
function GenIdW($StrId,$sT,$W){
	$ss="SELECT Count(*) FROM $sT WHERE $W";
	$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
	if($row[0]==0){
		$StrIdEx=1;
	}else{
		$ss="SELECT MAX($StrId) FROM $sT WHERE $W";
		$rs = mysql_query($ss);$row = mysql_fetch_row($rs);		
		$StrIdEx=$row[0]+1;
	}
	return $StrIdEx;
}
//**------------------------------------------------------------------------
function TD($StrFecha){
if(strlen($StrFecha)==0){
return "1900-01-01";
}else{
$StrAnio="20".substr($StrFecha,6,2);
$StrMes=substr($StrFecha,3,2);
$StrDia=substr($StrFecha,0,2);	
return $StrAnio."-".$StrMes."-".$StrDia;
}
}
function TDMASUNO($StrFecha){
if(strlen($StrFecha)==0){
return "1900-01-01";
}else{
$StrAnio="20".substr($StrFecha,6,2);
$StrAnio_=$StrAnio+1;
$StrMes=substr($StrFecha,3,2);
$StrDia=substr($StrFecha,0,2);	
return $StrAnio_."-".$StrMes."-".$StrDia;
}
}
//**------------------------------------------------------------------------
function GMenDia($Tur){
	
	$Fecha=date("Y-m-d");
	if($Tur=="DESAYUNO"){
		$W=" AND pla_mos_d='1'";
		
		if(GetC("res_menu_d","me_fecha='$Fecha'")==0){	
			$s="SELECT id_plato,pla_precio,pla_mos_d,pla_mos_a,pla_mos_c
				FROM res_platos
				WHERE id_plato>0 $W ORDER BY id_plato";
				
			$result = mysql_query($s);
			while ($row = mysql_fetch_array($result)){
				$s="INSERT INTO res_menu_d
					VALUES ($row[0],$row[1],0,0,'$Fecha','NO','SI')";
				ejt($s);				
			}		
		}	
	}
	
	if($Tur=="ALMUERZO"){
		$W=" AND pla_mos_a='1'";
		
		if(GetC("res_menu_a","me_fecha='$Fecha'")==0){	
			$s="SELECT id_plato,pla_precio,pla_mos_d,pla_mos_a,pla_mos_c
				FROM res_platos
				WHERE id_plato>0 $W ORDER BY id_plato";
			
			$result = mysql_query($s);
			while ($row = mysql_fetch_array($result)){
				$s="INSERT INTO res_menu_a 
					VALUES ($row[0],$row[1],0,0,'$Fecha','NO','SI')";
				ejt($s);				
			}		
		}
	
	}
	//
	if($Tur=="CENA"){
		$W=" AND pla_mos_c='1'";
		
		if(GetC("res_menu_c","me_fecha='$Fecha'")==0){	
			$s="SELECT id_plato,pla_precio,pla_mos_d,pla_mos_a,pla_mos_c
				FROM res_platos
				WHERE id_plato>0 $W ORDER BY id_plato";
			$result = mysql_query($s);
			while ($row = mysql_fetch_array($result)){
				$s="INSERT INTO res_menu_c 
					VALUES ($row[0],$row[1],0,0,'$Fecha','NO','SI')";
				ejt($s);
			}		
		}
	}
}
?>