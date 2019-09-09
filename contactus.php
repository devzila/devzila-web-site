<?php

function openConnection(){
  $servername = "localhost";
  $username = "root";
  $password = "root1234";
  $database = "devsolutions";

  $mysqli = new mysqli($servername, $username, $password, $database);
  if ($mysqli->connect_error) {
    echo json_encode(['status' => 'fail','message' => "Connection failed"]);
    die();
  } else {
    echo json_encode("Connection successful");
    return $mysqli;
  } 
}

function contactUser($mysqli,$name,$company,$email,$phone,$services,$skype_id,$description){
$query = "INSERT INTO contactus(name,company,email,phone,services,skype_id,description) VALUES (?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("sssssss", $name, $company, $email, $phone,$services,$skype_id,$description);
if ($stmt->execute()) {
//successfully created
echo json_encode(['status' => 'success','message' => 'value inserted successfully']);
die();
} else {
//some connection error
echo json_encode(['status' => 'fail','message' => $mysqli->error]);
die();
}
}
$name = $_REQUEST['name'];
$company = $_REQUEST['company'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$services = $_REQUEST['LEADCF2'];
$skype_id = $_REQUEST['skype-id'];
$description = $_REQUEST['description'];
$mysqli = openConnection();

$stmt = contactUser($mysqli,$name,$company,$email,$phone,$services,$skype_id,$description);
closeconnection();
?>