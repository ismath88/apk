<?php
$nameofhusband = filter_input(INPUT_POST, 'nameofhusband');
$husband_nricno = filter_input(INPUT_POST, 'husband_nricno');
$nameofwife = filter_input(INPUT_POST, 'nameofwife');

$wife_nricno = filter_input(INPUT_POST, 'wife_nricno');

$address_residence = filter_input(INPUT_POST, 'address_residence');

$husb_ofc_address = filter_input(INPUT_POST, 'husb_ofc_address');
$telephone = filter_input(INPUT_POST, 'house_telno');
$husb_telephone = filter_input(INPUT_POST, 'husb_ofc_telno');
$wife_telephone = filter_input(INPUT_POST, 'wife_ofc_telno');

$wife_ofc_address = filter_input(INPUT_POST, 'wife_ofc_address');
$income_husband = filter_input(INPUT_POST, 'income_husband');
$income_wife = filter_input(INPUT_POST, 'income_wife');
$occp_husband = filter_input(INPUT_POST, 'occp_husband');
$occp_wife = filter_input(INPUT_POST, 'occp_wife');
$num_child = filter_input(INPUT_POST, 'num_child');
$type_of_maid = filter_input(INPUT_POST, 'type_of_maid');
$age = filter_input(INPUT_POST, 'age');
$yes_no = filter_input(INPUT_POST, 'yes_no');
$file_no = filter_input(INPUT_POST, 'file_no');
$name_of_maid = filter_input(INPUT_POST, 'name_of_maid');

$content = <<<EOF
1. Name of husband:$nameofhusband
           NRIC No:$husband_nricno
      Name of wife:$nameofwife
           NRIC No:$wife_nricno

2. Type of House Address(Residence):$address_residence
          Tel No:   $telephone

3. Husband (Office)Name and Address:$husb_ofc_address
          Tel No:   $husb_telephone

4. Wife (Office)Name and Address:$wife_ofc_address
         Tel No:    $wife_telephone

5. Monthly Income
        Husband:    $income_husband
        Wife:       $income_wife

 6. Occupation/Profession
       Husband:     $occp_husband
          Wife:     $occp_wife

 7. Number Of Children:$num_child

 8. Type of maid Preferred:$type_of_maid

 Age preferred:  $age

 9. Have you applied for a maid before?:

    If yes, File No: $file_no

    Name Of Maid:    $name_of_maid


EOF;



include("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "ramji.reinsoft@gmail.com"; // SMTP username
    $mail->Password = "ramji1235"; // SMTP password
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
    $webmaster_email =  'ramji@obelisksolutions.in';
    $email= 'ramji@obelisksolutions.in';//
    $mail->From = $webmaster_email;
    $mail->FromName = "Testing";
    $mail->AddAddress($email);
    $mail->AddReplyTo($webmaster_email,"Testing Audit");
    $mail->Subject =  "Mail From Admin";
    $mail->Body = $content;


    if(!$mail->Send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
        header('Location:application.php?value=Internal Error');
    }
    else {

        header('Location:application.php?value=Form send Successfully');
    }

?>