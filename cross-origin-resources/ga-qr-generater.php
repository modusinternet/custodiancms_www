<?php
header("Access-Control-Allow-Origin: *");

require_once 'ga-lib.php';

$domain = $_REQUEST["domain"];

$ga = new PHPGangsta_GoogleAuthenticator();
$ga_qr_secret = $ga->createSecret();

if($domain){
  $title = "Admin (" . $domain . ")";
} else {
  $title = "Admin";
}

$ga_qr_url = $ga->getQRCodeGoogleUrl($title, $ga_qr_secret);

$array = array();
$array["ga_qr_secret"] = $ga_qr_secret;
$array["ga_qr_url"] = $ga_qr_url;

echo json_encode($array);
