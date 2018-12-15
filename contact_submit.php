<?php
session_start();
$information = $_POST;
$_SESSION['information'] = $information;

$fname = $information['fname'];
$lname = $information['lname'];
$email = $information['email'];
$subject = $information['subject'];
$message = $information['message'];

// Insert mailing function here

if(true){
  $newmessage = "Success!";
}
else{
  $newmessage = "Failure";
}

$_SESSION['message'] = $newmessage;
header("Location: index.php#fh5co-consult")
?>
