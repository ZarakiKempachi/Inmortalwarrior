<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura los detalles del correo electrónico
    $mail = new PHPMailer(true); // Habilita las excepciones
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'inmortalwarriors.app@gmail.com';
        $mail->Password = 'ihrr qtqk sorc ddyz';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Destinatario y remitente
        $mail->setFrom($email, $nombre);
        $mail->addAddress('inmortalwarriors.app@gmail.com', 'Inmortal Warriors');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body = "Nombre: $nombre<br>Email: $email<br>Mensaje: $mensaje";

        // Enviar el correo electrónico
        $mail->send();
        echo 'Gracias por contactar con nosotros';
    } catch (Exception $e) {
        echo "<script>alert('Hubo un error al enviar el mensaje.');</script>";
        echo "Error de envío: {$mail->ErrorInfo}";
    }
}
?>


