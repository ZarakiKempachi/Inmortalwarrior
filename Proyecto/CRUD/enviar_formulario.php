<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'ruta/hacia/PHPMailer/src/Exception.php';
require 'ruta/hacia/PHPMailer/src/PHPMailer.php';
require 'ruta/hacia/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura los detalles del correo electrónico
    $mail = new PHPMailer(true); // Habilita las excepciones
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'tu.servidor.smtp';
        $mail->SMTPAuth = true;
        $mail->Username = 'tu@correo.com';
        $mail->Password = 'tucontraseña';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Destinatario y remitente
        $mail->setFrom($email, $nombre);
        $mail->addAddress('tudireccion@correo.com');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body = "Nombre: $nombre<br>Email: $email<br>Mensaje: $mensaje";

        // Enviar el correo electrónico
        $mail->send();
        echo "<script>alert('El mensaje se ha enviado correctamente.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Hubo un error al enviar el mensaje.');</script>";
        echo "Error de envío: {$mail->ErrorInfo}";
    }
}
?>

