<?php  

    $Nombre = $_POST['Nombre'];
    $Body = $_POST['Mensaje'];
    $Correo = $_POST['Correo'];

    require_once("class.phpmailer.php");
    $mail = new PHPMailer(); 
    $mail->CharSet = 'UTF-8';
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "-----------Su correo---------";
    $mail->Password = "-----------su contraseña------";
    $mail->FromName = $Nombre; 
    $mail->Subject = "Petición de contacto de usuario"; 
    $mail->AddAddress("-------correo destino-------","-------Nombre reeempazo correo-------"); 

    $mail->IsHTML(true);
    $mail->Body = $Body . "<br><br>Enviado por: " . $Nombre . "<br>Correo: " . $Correo;

    if(!$mail->Send()) {
        echo false;
    } else {
        echo true;
    }
?>
