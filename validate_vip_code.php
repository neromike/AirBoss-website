<?php
session_start();

$vip_code = isset($_REQUEST['vip_code'])?$_REQUEST['vip_code']:"";

require_once("vip_permission_list.php");

// Check if the VIP code is valid
if (array_key_exists($vip_code, $vip_permission_list)) {
  $_SESSION['vip_code'] = $vip_code;
  echo true;
} else {
  echo false;
}

?>
