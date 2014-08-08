<?php
$name = $_POST["name"]; 
$email = $_POST["email"]; 
$message = $_POST["message"]; 

require_once('PHPMailer_5.2.3/class.phpmailer.php');

$mail = new PHPMailer();

$mail->IsSMTP();

try {
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "warren.gutierrez@gmail.com";  // GMAIL username
  $mail->Password   = "1R0nw1ll2010";            // GMAIL password
  $mail->AddAddress($mail->Username, 'WG Website');
  $mail->SetFrom($email, $name);

  $mail->Subject = 'Somebody sent you a message from your website WG.';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($message);
 
  $mail->Send();
  echo "Message Sent - OK";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

?>