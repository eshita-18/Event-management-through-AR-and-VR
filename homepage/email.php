<?php
include '../db.php';

require 'vendor/autoload.php';
require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();
$msg="";
$option = mysqli_real_escape_string($conn,$_POST['opt']);
$email = mysqli_real_escape_string($conn,$_POST['mail']);
$date =mysqli_real_escape_string($conn, $_POST['s_date']);
$mess=mysqli_real_escape_string($conn,$_POST['mess']);
if(isset($_POST['sub'])){
    $sql="insert into suggestion (s_subject,email,messaqe,date)values('$option','$email','$mess','$date')";
    $q=mysqli_query($conn,$sql);
    if($q){
        $msg='<div class="alert alert-success" role="alert">
         Your suggestion have successfully sent to us!!
      </div>';
    }
}
require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);                            
try {
    //Server settings
    $mail->isSMTP();                                     
    $mail->Host = 'smtp.gmail.com';                      
    $mail->SMTPAuth = true;                             
    $mail->Username = 'powervision579@gmail.com';     
    $mail->Password = 'ysdpse238';             
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );                         
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;                                   

    //Send Email
    $mail->setFrom('powervision579@gmail.com');

    //Recipients
    $mail->addAddress($email);              
    $mail->addReplyTo('powervision@gmail.com
    ');

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $option;
    $mail->Body    = $mess;
    $mail->sendmail_from =$email;

    $mail->send();

   $_SESSION['result'] = 'Message has been sent';
   $_SESSION['status'] = 'ok';
} catch (Exception $e) {
   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
   $_SESSION['status'] = 'error';
}
?>