<?php

$from = $_POST['userEmail'];
$message = $_POST['content'];
$name = $_POST['userName'];
$phone=$_POST['phone'];
$otp="";


require('PHPMailer/PHPMailerAutoload.php');

/*mail send*/ 
$mail = new PHPMailer;
$mail->isSMTP();  
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '83487893@gmail.com';                   // SMTP username
$mail->Password = '*********';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom($from, $name);     //Set who the message is to be sent from
$mail->addReplyTo($from, $name);  //Set an alternative reply-to address
//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
$mail->addAddress('hdhealthdrive@gmail.com');               // Name is optional
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject ='Contact Us-Health Drive';
$mail->Body    = 'Name: '.$name.'<br/> Mobile: '.$phone.'<br/> Email: '.$from.'<br/> Message:'.$message;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

if(!$mail->send()) {
   print "<div style='padding-top:30%;padding-bottom:30%;position:relative;'>
   <a href='../contact' style='position:absolute;right:0;top:0;'>X</a>
       </br>
  <strong>Failed</strong> to send your query. Please email: hdhealthdrive@gmail.com . We will contact you shortly. 
   
   </div>";
   exit;
}

print "<div style='padding-top:30%;padding-bottom:30%;position:relative;'>
       <a href='../contact' style='position:absolute;right:0;top:0;'>X</a>
       </br>
  <strong>Success.</strong> Your form has been submitted. We will contact you shortly.
  
</div>";
 exit;
?>
