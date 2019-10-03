<?php

include("phpmailer/class.phpmailer.php");

$name = $_POST['name'];
$useremail = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = $_POST['to'];

$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "ramji.reinsoft@gmail.com"; // SMTP username
$mail->Password = "ramji12345"; // SMTP password
$mail->Host = "smtp.gmail.com";
$mail->Port = "465";
$webmaster_email = $to;
$email= $to;//
$mail->From = $webmaster_email;
$mail->FromName = "Testing";
$mail->AddAddress($email);
$mail->AddReplyTo($webmaster_email,"Testing Audit");

$content = <<<EOD

   Name : $name
   Email: $useremail
   Phone: $phone
   Message: $message


EOD;
$mail->Subject = 'Test form';
$mail->Body = $content;


if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else {

    header('location:main_contact.html');
}


?>
