<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/dh_bx9enr/PHPMailer/src/Exception.php';
require '/home/dh_bx9enr/PHPMailer/src/PHPMailer.php';
require '/home/dh_bx9enr/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.dreamhost.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kellyj@kellyjhill.design';             // SMTP username
    $mail->Password = '2Drinkit!';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('kellyj@kellyjhill.design', 'Mailer');          //This is the email your form sends From
    $mail->addAddress('kellyj@kellyjhill.design', 'Kelly J Hill'); // Add a recipient address
    //$mail->addAddress('contact@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Inquiry';
    $mail->Body    = 'Body text goes here';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Thank you! Message has been sent and I will respond within 48 hours.';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>