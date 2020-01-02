<?php
session_start();

$vip_code = isset($_REQUEST['vip_code'])?$_REQUEST['vip_code']:"";

require_once("vip_permission_list.php");

//Open log file
$myfile = fopen("vip_log.txt", "a");
$date = (new DateTime('NOW'))->format("y:m:d h:i:s");
$ip_address = $_SERVER['REMOTE_ADDR'];

// Check if the VIP code is valid
if (array_key_exists($vip_code, $vip_permission_list)) {
  $_SESSION['vip_code'] = $vip_code;
  echo true;
  fwrite($myfile, $date . "|" . $ip_address . "|" . $vip_code . "|" . "good" . "\n");
} else {
  echo false;
  fwrite($myfile, $date . "|" . $ip_address . "|" . $vip_code . "|" . "bad" . "\n");
}

fclose($myfile);

?>
