<?php

$name = isset($_REQUEST['name'])?trim($_REQUEST['name']):"";
$email = isset($_REQUEST['email'])?trim($_REQUEST['email']):"";
$subject = isset($_REQUEST['subject'])?trim($_REQUEST['subject']):"";
$message = isset($_REQUEST['message'])?trim($_REQUEST['message']):"";

if ( (strlen($name) < 3) || (strlen($email) < 5) || (strlen($subject) < 1) || (strlen($message) < 10) ) {
  echo "need input";
} else {
  mail("info@airbossaviation.com",
       "AirBoss Website Contact Message",
       "You have received a message from the contact form on the AirBoss website.\nName : " . $name . "\nEmail : " . $email . "\nSubject : " . $subject . "\nMessage: " . $message . "\n\nThe message was sent from IP address " . $_SERVER['REMOTE_ADDR']);
}

?>
