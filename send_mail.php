<?php

$name = isset($_REQUEST['name'])?$_REQUEST['name']:"";
$email = isset($_REQUEST['email'])?$_REQUEST['email']:"";
$subject = isset($_REQUEST['subject'])?$_REQUEST['subject']:"";
$message = isset($_REQUEST['message'])?$_REQUEST['message']:"";

mail("neromike@gmail.com",
     "AirBoss Website Contact Message",
     "You have received a message from the contact form on the AirBoss website.\nName : " . $name . "\nEmail : " . $email . "\nSubject : " . $subject . "\nMessage: " . $message . "\n\nThe message was sent from IP address " . $_SERVER['REMOTE_ADDR']);

?>
