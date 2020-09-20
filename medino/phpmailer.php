<?php
if(isset($_POST['submit'])) 
{
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//$name=$_POST['name'];
//$email=$_POST['email'];
//$message=$_POST['message'];
$uname = $_POST["name"];
$uphone = $_POST["phone"];
$uemail = $_POST["email"];
$uaddress = $_POST["address"];
$udoc = $_POST["doctor"];
$udate = $_POST["date"];
$utime = $_POST["time"];


    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'care4you1710@gmail.com';                     // SMTP username
    $mail->Password   = 'saharsh@17';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('care4you1710@gmail.com', 'Team Care4you');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Appointment confirmation for '.$name;
    $mail->Body    = 'Your appointment is successfully booked.<br> Your appointment date is: '.$udate;
    $mail->Body    = '<br>Your appointment timing is: '.$utime;

   if(!$mail->send())
   {
       echo 'Message could not be sent.';
       echo 'Mailer Error: '.$mail->ErrorInfo;
   }
   else{
       include 'thankyou.html';
   }
}