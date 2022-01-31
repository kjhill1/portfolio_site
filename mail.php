<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '/home/kellyjhi/public_html/PHPMailer/src/Exception.php';
require '/home/kellyjhi/public_html/PHPMailer/src/PHPMailer.php';
require '/home/kellyjhi/public_html/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);  



    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.

        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        //$mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
        $mail->Host = 'chi112.greengeeks.net';                  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kelly@kellyjhill.design';             // SMTP username
        $mail->Password = '4Working!';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
        $mail->Port = 465;



        $json = array();
        $name = strip_tags(trim($_POST["cf_name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["cf_email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["cf_message"]);


        // // Check that data was sent to the mailer.
        // if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     $json['status'] = 400;
        //     $json['message'] = "Validation error please try again!";
        //     echo json_encode($json);
        //     exit;
        // }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $mail->setFrom('kelly@kellyjhill.design', 'Mailer');          //This is the email your form sends From
        $mail->addAddress('kelly@kellyjhill.design', 'Kelly J Hill'); 

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $mail->isHTML(true); 
        $mail->Body="Name: $name \n\n";
        $mail->Body.="Email: $email \n\n";
        $mail->Body.="Message: $message";
        // Build the email headers.
        // $email_headers = "From: $name <$email>";

        // Send the email.
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
    // else {

    //     $json['status'] = 403;
    //     $json['message'] = "There was a problem with your submission, please try again.";

    // }

echo json_encode($json);

?>

