<?php
function returnMacAddress() {
$location = `which arp`;
$arpTable = `$location`;
$arpSplitted = split("\n",$arpTable);
$remoteIp = $GLOBALS['REMOTE_ADDR'];
foreach ($arpSplitted as $value) {
$valueSplitted = split(" ",$value);
foreach ($valueSplitted as $spLine) {
if (preg_match("/$remoteIp/",$spLine)) {
$ipFound = true;
}
if ($ipFound) {
reset($valueSplitted);
foreach ($valueSplitted as $spLine) {
if (preg_match("/[0-9a-f][0-9a-f][:-]".
"[0-9a-f][0-9a-f][:-]".
"[0-9a-f][0-9a-f][:-]".
"[0-9a-f][0-9a-f][:-]".
"[0-9a-f][0-9a-f][:-]".
"[0-9a-f][0-9a-f]/i",$spLine)) {
return $spLine;
}}}
$ipFound = false;
}}
return false;
}
//
function Saber_IP(){
if(getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")){
$ip = getenv("HTTP_CLIENT_IP");
}
elseif(getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")){
$ip = getenv("HTTP_X_FORWARDED_FOR");
}
elseif(getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")){
$ip = getenv("REMOTE_ADDR");
}
elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")){

$ip = $_SERVER['REMOTE_ADDR'];
}
else {
$ip = "Unknown";
}
return $ip;
}
//
function getRealIP()
{

if( $_SERVER['HTTP_X_FORWARDED_FOR'] != '' )
{
$client_ip = 
( !empty($_SERVER['REMOTE_ADDR']) ) ? 
$_SERVER['REMOTE_ADDR'] 
: 
( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
$_ENV['REMOTE_ADDR'] 
: 
"unknown" ); 
$entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']); 
reset($entries);
while (list(, $entry) = each($entries)) 
{
$entry = trim($entry);
if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
{
// http://www.faqs.org/rfcs/rfc1918.html
$private_ip = array(
'/^0\./', 
'/^127\.0\.0\.1/', 
'/^192\.168\..*/', 
'/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/', 
'/^10\..*/');

$found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

if ($client_ip != $found_ip)
{
$client_ip = $found_ip;
break;
}
}
}
}
else
{
$client_ip = 
( !empty($_SERVER['REMOTE_ADDR']) ) ? 
$_SERVER['REMOTE_ADDR'] 
: 
( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
$_ENV['REMOTE_ADDR'] 
: 
"unknown" );
}

return $client_ip;

}
//
function getIP(){
if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];
else $ip = null ;
return $ip;}

?>