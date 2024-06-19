<?php


$name = $_POST['name'];
$subject = $_POST['subject'];
$detail = '
<h3 align="center">Programmer Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Senders Name Name</td>
				<td width="70%">'.$_POST["name"].'</td>
			</tr>
			<tr>
				<td width="30%">Email Address</td>
				<td width="70%">'.$_POST['email'].'</td>
			</tr>
			<tr>
				<td width="30%">Mobile Number</td>
				<td width="70%">'.$_POST['mobile'].'</td>
			</tr>
			<tr>
				<td width="30%">Purpose Of Message</td>
				<td width="70%">'.$_POST['option'].'</td>
			</tr>
			<tr>
				<td width="30%">Additional Information</td>
				<td width="70%">'.$_POST['message'].'</td>
			</tr>
		</table>';

$path = 'assets/upload/' . $_FILES["attachment"]["name"];
move_uploaded_file($_FILES["attachment"]["tmp_name"], $path);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'zoharyokobson.co';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'no-reply@zoharyokobson.co';           
    $mail->Password   = 'Partnerincrime';                   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('no-reply@zoharyokobson.co', $name);
    $mail->addAddress("davmoe39@gmail.com", "Eva Levvy");
    $mail->addAddress("mrfunnyedu@gmail.com", "Eva Levvy");
    $mail->AddAttachment($path);
    // Content
    $mail->isHTML(true);                                      
    $mail->Subject = $subject;
    $mail->Body    = $detail;

    if ($mail->send()) {
        
        include 'thankyou.html';

    $confirmationMail = new PHPMailer(true);
    $confirmationMail->isSMTP();
    $confirmationMail->Host = 'zoharyokobson.co';
    $confirmationMail->SMTPAuth = true;
    $confirmationMail->Username = 'no-reply@zoharyokobson.co';
    $confirmationMail->Password = 'Partnerincrime';
    $confirmationMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $confirmationMail->Port = 465;
    $confirmationMail->setFrom('no-reply@zoharyokobson.co', 'CloudlyteSpace Technologies');
    $confirmationMail->addAddress($email); 
    $confirmationMail->addReplyTo('davickreations@gmail.com', 'Reply Name'); 
    $confirmationMail->isHTML(true);
    $confirmationMail->Subject = 'Message Confirmation';
    $confirmationMail->Body = 'Your message has been received and will be addressed soon.';

    $confirmationMail->send();

    } else {

       include 'error.html';
       
     }

