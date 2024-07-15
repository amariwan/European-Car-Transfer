<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$response = array();

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.strato.de";
$mail->SMTPAuth = true;
$mail->Username = "kontakt@european-car-transfer.com";
$mail->Password = "Benimsirket2020";
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                    

$mail->setFrom("kontakt@european-car-transfer.com", "European car Transfer");
$mail->addAddress("kontakt@european-car-transfer.com  ", "European car Transfer");

// $mail->addAttachment("Anhang.zip", "Test.zip");
$mail->isHTML(true);
$mail->Subject = "Web - Auftrag";
$mail->Body =
"Name : " . $_POST['name'] . "<br>" .
"Tel : " . $_POST['tel'] . "<br>".
"E-mail : " . $_POST['email'] . "<br>" . "<br>" . "<br>" .
"Transportvon : " . $_POST['Transportvon:'] . "        "."   Transportnach: " .  $_POST['Transportnach:']  . "<br>" .
"Automarken & Modelle : " . $_POST['marker-model'] . "<br>" . "<br>" . "<br>" .
"Nachricht : " . "<br>" . "<br>"  . $_POST['msg']; 
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if ($mail->send()) {
    $response['status'] = 'success';
    $response['message'] = 'This was successful';
} else {
    $response['status'] = 'error';
    $response['message'] = 'This failed';
    echo  $mail->ErrorInfo;
}
echo json_encode($response);
?>