
<html>
    <head>
        <title>Mail Sent</title>
    </head>
    <body>
        <?php
        $mailtomail = $_POST['mailtomail'];
        $mailtoname = $_POST['mailtoname'];
        $mailcc = $_POST['mailcc'];
        $mailbcc = $_POST['mailbcc'];
        $mailpriority = $_POST['mailpriority'];
        $mailsubject = $_POST['mailsubject'];
        $mailbody = $_POST['mailbody'];

        $message = " ";
        if (empty($mailtoname) || empty($mailtomail)) {
            die("Recipient is blank! ");
        } else {
            $to = $mailtoname . " <" . $mailtomail . ">";
        }

        if (empty($mailsubject)) {
            $mailsubject = " ";
        }

        if (($mailpriority > 0) && ($mailpriority < 6)) {
            $mailheader = "X-Priority: " . $mailpriority . "\n";
        }

        $mailheader.= "From: " . "Sales Team <balajiebox@gmail.com>\n";
        $mailheader.= "X-Sender: " . "makeurpage@gmail.com\n";
        $mailheader.= "Return-Path: " . "makeurpage@gmail.com\n";
        $mailheader .= 'Cc: ' . $mailcc . "\r\n";
        $mailheader .= 'Bcc: ' . $mailbcc . "\r\n";

        if (!empty($mailcc)) {
            $mailheader.= "Cc: " . $mailcc . "\n";
        }

        if (!empty($mailbcc)) {
            $mailheader.= "Bcc: " . $mailbcc . "\n";
        }

        if (empty($mailbody)) {
            $mailbody = " ";
        }

        $result = mail($mailtomail, $mailsubject, $mailbody, $mailheader);
        /* echo "<center><b>Mail sent to " . "$mailtomail" . "<br>";
          echo $mailsubject . "<br>";
          echo $mailbody . "<br>";
          echo $mailheader . "<br>"; */
        if ($result) {
            echo "<p><b>Email sent successfully!</b></p>";
        } else {
            echo "<p><b>Email could not be sent. </b></p>";
        }
        ?>
        <div align="center">
            <table><tr><td width="66"><div align="right"><b>To</b></div></td>
                    <td width="308"><b><?php echo $mailtoname . " [" . $mailtomail . " ]"; ?></b></td></tr>

                <tr><td width="66"><div align="right"><b>CC</b></div></td>
                    <td width="308"><b><?php echo $mailcc; ?></b></td></tr>
                <tr><td width="66"><div align="right"><b>BCC</b></div></td>
                    <td width="308"><b><?php echo $mailbcc; ?></b></td></tr>
                <tr><td width="66"><div align="right"><b>Priority</b></div></td>
                    <td width="308"><b><?php echo $mailpriority; ?></b></td></tr>
                <tr><td width="66"><div align="right"><b>Subject </b></div></td>
                    <td width="308"><b><?php echo $mailsubject; ?></b></td></tr>
                <tr><td width="66"><div align="right"><b>Message</b></div></td>
                    <td width="308"><b><?php echo $mailbody; ?></b></td></tr>
            </table>
        </div>
    </body>
</html>
