<?php
require('/var/www/html/PHPMailer_5.2.0/class.phpmailer.php');
require('/var/www/html/PHPMailer_5.2.0/class.smtp.php');

#require 'phpmailer/PHPMailerAutoload.php';
#require="/var/www/html/PHPMailer-FE_v4.11/PHPMailerAutoload.php';
$mail = new PHPMailer(true);

$rty= $argv[1];
#$mail_to=$argv[2];
$mail->SMTPSecure = "tls";
$mail->SMTPAuth   = true;
$mail->Username   = "contacto@altanredes.com";
$mail->Password   = "Altanredes18+";
$mail_from        ="contacto@altanredes.com";
$mail_from="contacto@altanredes.com";
$subject          = "Sonda de Alarmas de plataformas de Altan ";
$body             = $rty;
$mail_to          = "enrique.perez@altanredes.com";
$mail->IsSMTP();

try {
  $mail->Host       = "smtp.office365.com"; // SMTP server
  $mail->Port = "587"; //SMTP Port
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->Debugoutput = 'html';
  $mail->AddAddress($mail_to, '');
  $mail->SetFrom($mail_from);
  $mail->Subject = $subject;
  $mail->MsgHTML($body);
  $mail->Send();
  echo "Mensaje de alarma....<p></p>\n";
  echo "Click <a href=\"index.php\">here</a> to send another email";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
  echo "<p>Using Username: ".$mail->Username."</p>";
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>

