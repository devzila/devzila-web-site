<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
die();
}
    $name = $_REQUEST['name'];
    $company = $_REQUEST['company'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $services = $_REQUEST['LEADCF2'];
    $skype_id = $_REQUEST['skype-id'];
    $description = $_REQUEST['description'];

function sendRegisterationMail($name,$company,$email,$phone,$services,$skype_id,$description){
$mail = new PHPMailer(true);
try {
//Server settings
$mail->SMTPDebug = 0; 
$mail->isSMTP(); 
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "info@devzila.com";
$mail->Password = "ghAde&9s"; 
//Recipients
$mail->setFrom('info@devzila.com', 'Devzila Software Solutions');
$mail->addAddress('meenakshi@devzila.com', 'M Sharma'); 
$mail->addCC('meenakshi@devzila.com', 'M S');




sendRegisterationMail($name,$company,$email,$phone,$services,$skype_id,$description);
// closeconnection();
?>