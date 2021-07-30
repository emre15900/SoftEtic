<?php
if (isset($_POST)){
    if (isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['email'])
        && isset($_POST['subject']) && isset($_POST['message'])){
        include "phpMailer/Exception.php";
        include "phpMailer/OAuth.php";
        include "phpMailer/PHPMailer.php";
        include "phpMailer/POP3.php";
        include "phpMailer/SMTP.php";

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'mail.softetic.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'web@softetic.com';                     // SMTP username
            $mail->Password   = '3DgOltoUPPr-';                               // SMTP password
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            $mail->setLanguage('tr', 'phpMailer/languages/');
            $mail->CharSet  ="utf-8";
            $mail->Encoding="base64";

            //Recipients
            $mail->setFrom('web@softetic.com', 'softetic.com iletişim formu');
            $mail->addAddress('burakusluer35csc@gmail.com', 'Adı:'.$_POST['username'].'Telefon:'.$_POST['phone'].'mail:'.$_POST['email']);     // Add a recipient;-

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST['subject'];
            $mail->Body    = $_POST['message'];

            $mail->send();
            echo 'success';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}else{
    echo "no post data";
}
