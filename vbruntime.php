<?php
function vbr($StrCad,$iLen){
	$i=strlen($StrCad);
	if($i==0){
		return "";
	}else{
		if($iLen>$i)$iLen=$i;
		return substr($StrCad,$i - $iLen,$iLen);
	}
}
//
function vbl($StrCad,$iLen){
	$i=strlen($StrCad);
	if($i==0){
		return "";
	}else{
		if($iLen>$i)$iLen=$i;
		return substr($StrCad,0,$iLen);
	}
}
//
function vbmid($StrCad,$iI,$iLen){
	$i=strlen($StrCad);
	$StrCad=$StrCad.vbfill(" ",300);
	$iI=$iI - 1;
	return substr($StrCad,$iI,$iLen);
}
//
function vbfill($Str,$iLen){
	$StrTemp="";
	for($i=1;$i<=$iLen;$i++){
		$StrTemp=$StrTemp.$Str;
	}
	return $StrTemp;
}
function vbval($Str){
	$Str=trim($Str);
	if(strlen($Str)==0){
		return 0;
	}else{
		if(is_numeric($Str)==true){
			return $Str;
		}else{
			return 0;
		}
	}
}
?>