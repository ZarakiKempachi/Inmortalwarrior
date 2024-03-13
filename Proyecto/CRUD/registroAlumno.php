<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../CRUD/PHPMailer/src/Exception.php';
require '../CRUD/PHPMailer/src/PHPMailer.php';
require '../CRUD/PHPMailer/src/SMTP.php';

function enviarCorreoAceptacionAlumno($correo, $nombre, $usuario,  $aceptado)
{
    $mail = new PHPMailer();

    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 465;  // Puerto SSL
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth   = true;

    // Credenciales de correo electrónico
    $mail->Username   = 'inmortalwarriors.app@gmail.com';
    $mail->Password   = 'ihrr qtqk sorc ddyz';

    // Resto de la configuración del correo

    $mail->setFrom('inmortalwarriors.app', 'Inmortal Warriors');
    $mail->addAddress($correo, $nombre);
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    try {
        if ($aceptado) {
            $mail->Subject = 'Aprobación de solicitud de usuario';
            
            $mail->Body    = "
            <div style='text-align: center;'>
            
                <h2>Felicidades, $nombre, bienvenido a Inmortal Warriors.</h2>
                <p>Te has registrado correctamente con el usuario:<strong> $usuario</strong></p>
                <p>Ya puedes acceder a tu cuenta en nuestro sistema.</p>
                <hr style='margin: 20px auto; width: 80%;'>
                <p>Este es un mensaje automático. Por favor, no respondas a este correo.</p>
            </div>";
        } else {
            $mail->Subject = 'Denegación de solicitud de usuario';
            $mail->Body    = '<h2>Lamentamos informarte que tu solicitud ha sido denegada.</h2>';
        }

        // Enviar el correo
        $mail->send();

        
    } catch (Exception $e) {
         $mail->ErrorInfo;
    }
}
$username = $_REQUEST['uname'];
$nombre = $_REQUEST['firstname'];
$apellidos = $_REQUEST['lname'];
$email = $_REQUEST['emailAlumno'];
$passwd = $_REQUEST['passAdmin'];
$id_box = $_REQUEST['idBox'];

function registro($username, $nombre, $apellidos, $email, $passwd, $id_box)
{
    include 'conexion.php';
    $passwd = password_hash($passwd, PASSWORD_DEFAULT);

    // Establecer la conexión a la base de datos
    $conexion = mysqli_connect($server, $user, $pass, $db);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Verificar que el nombre de usuario no esté repetido
    $checkQuery = "SELECT * FROM usuarios WHERE Username = '$username'";
    $checkResult = $conexion->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo json_encode("El nombre de usuario ya está en uso");
    } else {
        // Insertar en la base de datos
        $insertQuery = "INSERT INTO usuarios (Nombre, Apellido, Email, Username, `Password`, Fecha_Creacion, foto, Is_Admin, Is_Instructor, ID_Boxes) 
                        VALUES ('$nombre', '$apellidos', '$email', '$username', '$passwd', NOW(), '', 0, 0, '$id_box')";

        $response = $conexion->query($insertQuery);

        if ($response) {
            echo json_encode("Usuario registrado");
        } else {
            echo json_encode("Error al registrar usuario: " . mysqli_error($conexion));
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}

registro($username, $nombre, $apellidos, $email, $passwd, $id_box);
enviarCorreoAceptacionAlumno($email, $nombre, $username,  true);
?>
