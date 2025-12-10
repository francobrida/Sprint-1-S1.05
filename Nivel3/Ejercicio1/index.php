<?php
require_once "Notification.php";
require_once "Email.php";
require_once "Mail.php";
require_once "SMS.php";

$newEmail = new Email();
$newMail = new Mail();
$newSms = new Sms();

echo $newEmail->notify("Helloooo") . "<br>"
. $newMail->notify("Follow the clues") . "<br>"
. $newSms->notify("The code has been cracked");

?>