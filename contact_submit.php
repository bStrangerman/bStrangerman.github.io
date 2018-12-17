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
  $emailContent = "<strong>Your Name: </strong>" . $fname . " " . $lname . "<br>";
  $emailContent .= "<strong>Your Email: </strong>" . $email . "<br>";
  $emailContent .= "<strong>Your Message: </strong>";
  $emailContent .= "<br><strong>" . $subject . "</strong><br>";
  $emailContent .= $message . "<br>";

  $recipient="username@localhost";
  $subject="New Contact from brandonhaberman@gmail.com";
  $mail_body= $emailContent;
  $headers = "From: " . strip_tags($email) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($recipient) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  echo mail($recipient, $subject, $mail_body, $headers);

  $newmessage = "Success!";
}
else{
  $newmessage = "Failure";
}

$_SESSION['message'] = $newmessage;
header("Location: index.php#fh5co-consult")
?>
