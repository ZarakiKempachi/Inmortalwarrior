<?php
try {
    $nombreBox = $_REQUEST['nombreBox'];
    $dirBox = $_REQUEST['dirBox'];
    $localidadBox = $_REQUEST['localidadBox'];
    $correoBox = $_REQUEST['emailBox'];
    $telefonoBox = $_REQUEST['tlfnBox'];
    $descripcionBox = $_REQUEST['descripcionBox'];
    $horarioBox = $_REQUEST['horarioBox'];
    $nombreAdmin = $_REQUEST['firstname'];
    $apellidosAdmin = $_REQUEST['lname1'];
    $userNameAdmin = $_REQUEST['uname'];
    $passAdmin = $_REQUEST['passAdmin'];

    function registroBox($nombreBox, $dirBox, $localidadBox, $correoBox, $telefonoBox, $descripcionBox, $horarioBox, $nombreAdmin, $apellidosAdmin, $userNameAdmin, $passAdmin)
    {
        include 'conexion.php';
        $conexion = mysqli_connect($server, $user, $pass, $db);

        if (!$conexion) {
            throw new Exception("Error de conexión a la base de datos: " . mysqli_connect_error());
        }

        $sql1 = "INSERT INTO boxes (Nombre, Direccion, Localidad, Email, Telefono, Descripcion, Horario,Is_Solicitud) VALUES ('$nombreBox','$dirBox','$localidadBox','$correoBox','$telefonoBox','$descripcionBox','$horarioBox',1)";
        
        if (!$conexion->query($sql1)) {
            throw new Exception("Error al insertar datos en la tabla 'boxes': " . $conexion->error);
        }

        $idBox = $conexion->insert_id;
        $passwd = password_hash($passAdmin, PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO usuarios (Nombre, Apellido, Email,Username, `Password`,Fecha_Creacion,foto,Is_Admin,Is_Instructor, ID_Boxes) VALUES ( '$nombreAdmin','$apellidosAdmin', '$correoBox', '$userNameAdmin', '$passwd',NOW(),'',1,0,$idBox)";
        
        if (!$conexion->query($sql2)) {
            throw new Exception("Error al insertar datos en la tabla 'usuarios': " . $conexion->error);
        }

        $conexion->close();
    }

    registroBox($nombreBox, $dirBox, $localidadBox, $correoBox, $telefonoBox, $descripcionBox, $horarioBox, $nombreAdmin, $apellidosAdmin, $userNameAdmin, $passAdmin);

    echo "El administrador aprobará su solicitud en breve. Gracias por su paciencia.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
