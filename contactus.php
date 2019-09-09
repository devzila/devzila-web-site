<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
die();
}
// function openConnection(){
//   $servername = "localhost";
//   $username = "root";
//   $password = "root1234";
//   $database = "devsolutions";

//   $mysqli = new mysqli($servername, $username, $password, $database);
//   if ($mysqli->connect_error) {
//     echo json_encode(['status' => 'fail','message' => "Connection failed"]);
//     die();
//   } else {
//     // echo json_encode("Connection successful");
//     return $mysqli;
//   } 
// }

// function contactUser($mysqli,$name,$company,$email,$phone,$services,$skype_id,$description){
// $query = "INSERT INTO contactus(name,company,email,phone,services,skype_id,description) VALUES (?,?,?,?,?,?,?)";
// $stmt = $mysqli->prepare($query);
// $stmt->bind_param("sssssss", $name, $company, $email, $phone,$services,$skype_id,$description);
// if ($stmt->execute()) {
// //successfully created
// echo json_encode(['status' => 'success','message' => 'value inserted successfully']);
// die();
// } else {
// //some connection error
// echo json_encode(['status' => 'fail','message' => $mysqli->error]);
// die();
// }
// }
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
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "info@devzila.com";
$mail->Password = "ghAde&9s"; 
//Recipients
$mail->setFrom('info@devzila.com', 'Devzila Software Solutions');
$mail->addAddress('nilay@devzila.com', 'Nilay Anand');  
$mail->addCC('meenakshi@devzila.com', 'Chandni Sapra');


// Content
$mail->isHTML(true); 
$mail->Subject = 'New Registration - Devzila';
$mail->body = 'Mail has been sent successfully';
$message = file_get_contents('contact-us.php');
$message = str_replace('%namevariable%', $name, $message); 
$message = str_replace('%emailvariable%', $email, $message); 
$mail->MsgHTML($message); 
$mail->AltBody = 'A new user has been registered. name : '. $name . ' company : '.$company .' email : '. $email .' phone : '.$phone. ' LEADCF2 : '.$services. ' skype_id : '.$skype_id .' description : '.$description;
$mail->send();
} catch (Exception $e) {
echo json_encode(['status' => 'fail','message' => $mail->ErrorInfo]);
}
}
// $mysqli = openConnection();

sendRegisterationMail($name,$company,$email,$phone,$services,$skype_id,$description);
// closeconnection();
?>