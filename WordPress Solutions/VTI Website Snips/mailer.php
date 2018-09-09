<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	//Server settings
	$mail->SMTPDebug = 0;                                 // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host        = gethostbyname( 'censored' ); // Specify main and backup SMTP servers
	$mail->SMTPAuth    = true;                               // Enable SMTP authentication
	$mail->Username    = 'censored';                 // SMTP username
	$mail->Password    = 'censored';                           // SMTP password
	$mail->SMTPSecure  = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port        = 465;                                    // TCP port to connect to
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer'       => false,
			'verify_peer_name'  => false,
			'allow_self_signed' => true
		)
	);

	//Recipients
	$mail->setFrom('censored', 'VTI Website Contact Form');
	$mail->addAddress('censored', 'VTI Support');     // Add a recipient

	//Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'New VTI web form message';

	$mail->Body    = <<<EOT
<b>Name:</b> {$_POST['name']}<br />
<b>Job Title:</b> {$_POST['title']}<br />
<b>Company:</b> {$_POST['company']}<br />
<b>Email Address:</b> {$_POST['email']}<br />
<b>Phone Number:</b> {$_POST['phoneNumber']}<br />
<b>Message:</b> {$_POST['message']}<br />
EOT;

	$mail->WordWrap = 80;

	$mail->send();
	header("Location: successful.php");
} catch (Exception $e) {
	header( "Location: failure.php" );
	//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}