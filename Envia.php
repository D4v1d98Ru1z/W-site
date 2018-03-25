<?php  
    require '"phpmailer/PHPMailerAutoload.php'";

    //we need to create an instance of PHPMailer
    $mail = new PHPMailer();

    //set where we are sending email
    $mail->addAddress('davidl.ruizc@gmail.com', 'Senaid Bacinovic');

    //set who is sending an email
    $mail->setFrom('mailsenderportfolio@gmail.com', 'Admin at CPI');

    //set subject
    $mail->Subject = "Test email!";

    //type of email
    $mail->isHTML(true);

    //write email
    $mail->Body = "<p>this is our email body</p><br><br><a href='http://google.com'>Google</a>";

    //include attachment
    //$mail->addAttachment('fbcover.png', 'Facebook cover.png');

    //send an email
    if (!$mail->send())
        echo "Something wrong happened!";
    else
        echo "Mail sent";



    // $Nombre = $_POST['Name'];
    // $Body = $_POST['Message'];
    // $Correo = $_POST['Email'];

    // require_once("class.phpmailer.php");
    // $mail = new PHPMailer(); 
    // $mail->CharSet = 'UTF-8';
    // $mail->IsSMTP();
    // $mail->Host = "smtp.gmail.com";
    // $mail->Port = 587;
    // $mail->SMTPSecure = "tls";
    // $mail->SMTPAuth = true;
    // // "-----------Su correo---------";
    // $mail->Username = "-----------Su correo---------";
    // // "-----------su contraseña------";
    // $mail->Password = "-----------su contraseña------";
    // $mail->FromName = $Nombre; 
    // $mail->Subject = "Petición de contacto de usuario"; 
    // // "-------correo destino-------","-------Nombre reeempazo correo-------"
    // $mail->AddAddress("-------correo destino-------","-------Nombre reeempazo correo-------"); 

    // $mail->IsHTML(true);
    // $mail->Body = $Body . "<br><br>Enviado por: " . $Nombre . "<br>Correo: " . $Correo;

    // if(!$mail->Send()) {
    //     echo 'false';
    // } else {
    //     echo 'true';
    // }

    // if(isset($_POST['submit'])) {
    //     require 'phpmailer/PHPMailerAutoload.php';

    //     function sendmail($to, $from, $fromName, $body) {
    //         $mail = new PHPMailer();
    //         $mail->setFrom($from, $fromName);
    //         $mail->addAddress($to);
    //         $mail->Subject = 'Prueba';
    //         $mail->Body = $body;
    //         $mail->isHTML(false);

    //         return $mail->send();
    //     }

    //     $name = $_POST['Name'];
    //     $body = $_POST['Message'];
    //     $email = $_POST['Email'];

    //     if(sendmail($to: 'davidl.ruizc@gmail.com', $email, $name, $body)){
    //         echo = 'sent!';
    //     }
    //     else {
    //         echo = 'Failed!';
    //     }
    // }        
?>
