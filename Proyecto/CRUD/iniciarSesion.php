<?php

$email = $_POST['email'];
$password = $_POST['password'];

// Realizar la verificación de la contraseña (utiliza password_verify si las contraseñas están hasheadas)
if ($email === "correo@example.com" && $password === "contraseña") {
    echo "success";
} else {
    echo "Credenciales incorrectas";
}
?>
