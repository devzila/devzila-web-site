<?php

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
$mail->SMTPDebug = 0; 
$mail->isSMTP(); 
$mail->Host = "";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = ""; 
//Recipients
$mail->setFrom('support@devzila.com', 'Devzila Software Solutions');
$mail->addAddress('nilay@devzila.com', 'Nilay Anand');  
$mail->addCC('chandni@devzila.com', 'Chandni Sapra');
$mail->addBCC('sahil@devzila.com', 'Sahil');

// Content
$mail->isHTML(true); 
$mail->Subject = 'New Registration - Devzila';
$message = file_get_contents('mail/registration.html');
$message = str_replace('%namevariable%', $name, $message); 
$message = str_replace('%emailvariable%', $email, $message); 
$mail->MsgHTML($message); 
$mail->AltBody = 'A new user has been registered. name : '. $name . ' email : '.$email;
$mail->send();
} catch (Exception $e) {
echo json_encode(['status' => 'fail','message' => $mail->ErrorInfo]);
}
}

// $mysqli = openConnection();

// $stmt = contactUser($mysqli,$name,$company,$email,$phone,$services,$skype_id,$description);
// closeconnection();
?>