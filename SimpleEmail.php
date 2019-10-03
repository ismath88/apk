<?php

$mailto = $_POST['mailto'];
$mailsubject = $_POST['mailsubject'];
$mailbody = $_POST['mailbody'];



if (empty($mailto)) {
    die("Recipient is blank! ");
}

if (empty($mailsubject)) {
    die("Subject is blank! ");
}

if (empty($mailbody)) {
    die("Message is blank! ");
}




$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "Content-Transfer-Encoding: 7bit\n";
$headers .= "From: Sales Team <balajiebox@gmail.com>" . "\n";
$headers .= "X-Priority: 3\n";
$headers .= "X-Mailer: Some X-Mailer Version 2.01\n";
$headers .= "\n\n";
$result = mail($mailto, $mailsubject, $mailbody, $headers);

if ($result) {
    echo "Email sent successfully!";
} else {
    echo "Email could not be sent.";
}
?>
