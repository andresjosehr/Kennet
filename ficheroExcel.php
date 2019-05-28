<?php
error_reporting(0);
date_default_timezone_set('America/Lima');
header("Content-type: application/vnd.ms-excel; name='excel'");
$StrT=$_GET[N];
if($StrT==null)$StrT="Expotar";
if($StrT=="1")$StrT="RptSaldos";
$StrT=$StrT.date("d-m-y")."-".date("H:i:s");
$StrT=$StrT.".xls";
header("Content-Disposition: filename=$StrT");
header("Pragma: no-cache");
header("Expires: 0");
echo str_replace('\"','"', $_POST['datos_a_enviar']);
?>