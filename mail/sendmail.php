<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

  
    class Mailer{
        function dathangmail($tieude,$noidung,$maildathang){
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        $mail->CharSet = 'UTF-8';
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP() ;                               // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                  // Enable SMTP authentication
            $mail->Username = 'nlpn1481999@gmail.com';                 // SMTP username
            $mail->Password = '0908445960';                           // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                             // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                     // TCP port to connect to
        
            //Recipients
            
            $mail->setFrom('nlpn1481999@gmail.com', 'Nevidi Shop');        
            $mail->addAddress($maildathang, 'Khách Hàng');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('nlpn1481999@gmail.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $tieude;
            $mail->Body    = $noidung;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

        }
    
    }
    
   
?>