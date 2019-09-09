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
  $mail->SMTPDebug = 1; 
  $mail->isSMTP(); 
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->Username = "info@devzila.com";
  $mail->Password = "ghAde&9s"; 
  //Recipients
  $mail->setFrom('info@devzila.com', 'Devzila Software Solutions');
  $mail->addAddress('nilay@devzila.com', 'Nilay Anand');  
  $mail->addCC('chandni@devzila.com', 'Chandni Sapra');


    // Content
  $mail->isHTML(false); 
  $mail->Subject = 'New Enquiry has been generated';
  $mail->Body = 'A new user has been registered. name : '. $name . ' company : '.$company .' email : '. $email .' phone : '.$phone. ' services : '.$services. ' skype_id : '.$skype_id .' description : '.$description;
  $mail->send();
  } 
  catch (Exception $e){
  echo json_encode(['status' => 'fail','message' => $mail->ErrorInfo]);
  }
  }


sendRegisterationMail($name,$company,$email,$phone,$services,$skype_id,$description);
?>