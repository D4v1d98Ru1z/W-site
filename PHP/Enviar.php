<?php 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';
	try {
				//Server settings
				$mail->SMTPDebug = 0;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = '	mx1.hostinger.co';  				  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'support@sgc.andreslargo.com';                 // SMTP username
				$mail->Password = 'nicky246';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to
				$mail->CharSet = 'UTF-8';
				//Recipients
				$mail->setFrom('andresf.largo@gmail.com', 'Sistema SGC');
				//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
				$mail->addAddress($email);               // Name is optional
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//	$mail->addBCC('bcc@example.com');
				//	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				///	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				//	$mail->AddEmbeddedImage('../img/sgc.png', 'logo_2u');
				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = '¿FUNCIONARÁ?';
				$mail->Body = " 
					<html>
					<body style= \"background: #000; color: #fff; padding: 19px; text-align: center;\">
						<header style =\"font-family:\'Sans Serif\';\">
							<h1 style= \" color: #ffffff; font-size:22px;\">
								<strong style= \"color: #ffffff;\">¡Enhorabuena!</strong> Hola <br><br>
							Esta es una prueba exitosa :v</h1>
						</header>
						<main style= \"color: #fff; font-size: 22px;\">
							<h3 style= \"color: #fff; font-size: 22px;\">
								Al iniciar sesión te pediremos que cambies tu contraseña por seguridad.
								<br>
								Tu contraseña es:
								</h3>
						</main>
						<br><br>
						<a style = \"font-size: 22px; background: black; color: white; border: 1px solid white; border-radius: 5px; padding: 10px; text-decoration: none; padding-right: 16px; padding-left: 16px; \" href = \"http://www.andreslargo.com/sgc/login.html\"> Inicia sesión </a>
						<p style = \"font-size: 22px; color: #fff;\">Cordialmente, Andrés Largo.</p>
					</body>
					</html>";
				$mail->AltBody = '¿Esto está bien?';
				$mail->send();
				//echo 'true';
			} catch (Exception $e) {
				echo 'false';
      }
?>