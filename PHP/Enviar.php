<?php 
	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	try {
				$mail = new PHPMailer(true);  
				//Server settings
				$mail->SMTPDebug = 2;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				//$mail->Host = '	mx1.hostinger.co';
				$mail->Host = 'smtp.gmail.com';   				  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'davidl.ruizc@gmail.com'; //---Email----                // SMTP username
				$mail->Password = ''; //---Password----                          // SMTP password
				
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				
				$mail->Port = 587;                                    // TCP port to connect to
				//Para envio por Gmail                              // TCP port to connect to				
				 $mail->SMTPOptions = array(
				 	'ssl' => array(
				 		'verify_peer' => false,
				 		'verify_peer_name' => false,
				 		'allow_self_signed' => true
				 	)
				 );
				
				$mail->CharSet = 'UTF-8';
				//Recipients
				//correo de servidor
				//$mail->setFrom('support@sgc.andreslargo.com', 'Portfolio Site');
				$mail->setFrom('davidl.ruizc@gmail.com', 'Portfolio Site');
				//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
				$email = "davidl.ruizc@gmail.com";//----destination email-----
				$mail->addAddress($email);               // Name is optional
		
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//	$mail->addBCC('bcc@example.com');
				//	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				///	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				//	$mail->AddEmbeddedImage('../img/sgc.png', 'logo_2u');
				//Content
				$mensaje = $_POST['Message'];
				$destinatario = $_POST['Email'];
				$nombrepro = $_POST['Name'];
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'New Portfolio Message';
				$mail->Body = " 
					<html>
					<body style= \"background: #fff; color: #B1B1B1; padding: 19px; text-align: center;\">
						<header style =\"font-family:\'Sans Serif\';\">
							<h1 style= \" color: #B1B1B1; font-size:18px;\">
								<strong style= \"color: #B1B1B1;\">YOU HAVE A NEW MESSAGE!</strong><br><br>
							</h1>
						</header>
						<main style= \"color: #484848; font-size: 18px;\">
							<h3 style= \"color: #484848; font-size: 18px;\">
								<br>
								$nombrepro te saluda
								<br>
								El Mensaje fue enviado por: $destinatario								 
								<br>
								Mensaje: $mensaje

								</h3>
						</main>
						<br><br>
						<a style = \"font-size: 16px; background: #77BE53; color: white; border: 1px solid white; border-radius: 2px; padding: 10px; text-decoration: none; padding-right: 16px; padding-left: 16px; \" href = \"https://github.com/D4v1d98Ru1z/W-site\"> Lovely </a>
					</body>
					</html>";
				$mail->AltBody = '¿Esto está bien?';
				$mail->send();
				echo 'true';
			} catch (Exception $e) {
				echo 'false';
      }
?>
