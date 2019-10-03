<!DOCTYPE HTML>
<html lang="en"><head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/style.css" />

    </head>
    <body  bgcolor="#FFFFFF" >
        <form>

            <?php
            if (isset($_POST['submit'])) {


                $name = $_POST['firstName'];
                $company_name = $_POST['company_name'];
                $email = $_POST['email'];
                $website = $_POST['website'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $country = $_POST['country'];
                $telephone = $_POST['phone'];
                $mobile = $_POST['mobile'];
                /*
                  $name=$_POST['firstName'];
                  $company_name=$_POST['company_name'];
                  $email=$_POST['email'];
                  $website = $_POST['website'];
                  $address=$_POST['address'];
                  $city=$_POST['city'];
                  $state=$_POST['state'];
                  $country=$_POST['country'];
                  $mobile=$_POST['mobile'];
                  $telephone=$_POST['phone']; */

                /* $arr=$_REQUEST['arr'];
                  $dep=$_REQUEST['dep'];
                  $fam=$_REQUEST['fam'];
                  $per=$_REQUEST['per'];
                  $inf=$_REQUEST['inf'];
                  $hotel=$_REQUEST['hotel'];
                  $bedroom=$_REQUEST['bedroom'];
                  $pack=$_REQUEST['pack']; */
                $message = $_POST['message'];


                $email = $_POST['email']; //senders e-mail adress
                $recipient = "<sekarflash@gmail.com>"; //recipient
                $mail_body = "

	Name      $name

	Company Name $company_name

	Email   $email

	Website $website

	Address   $address

	City   $city

	State   $state

        Country   $country

        Mobile No    $mobile

	Telephone $telephone

	Comments   $message  ";

//mail body
                $subject = "Enquiry About Goat"; //subject
                $header = "From: " . $name . " <info@sairafarms.com>\r\n"; //optional headerfields

                ini_set('sendmail_from', 'info@sairafarms.com'); //Suggested by "Some Guy"
                if (mail($recipient, $subject, $mail_body, $header)) {

                    echo "<center> <font color='#FF7F26' font size='2px' font ='Calibri'> <strong>Thank You Sir,<br>
      &nbsp;&nbsp;&nbsp;&nbsp; We will get back to you through mail or call back to you very soon.</strong></font></center>";
                } else {

                    echo(" Message delivery failed...");
                }
            }
            ?>

        </form>
    </body>
         <!--<input type="submit" value="Submit Form" label="Submit Form" id="submitButton" dojoType="dijit.form.Button" />	-->




    <!--					fffffffffffffffffffffffff  End-->



</html>