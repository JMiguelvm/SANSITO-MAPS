<?php
include_once('sql/conexion.php');

$option = $_GET['option'];

switch($option) {
    case 1: // Verificación Login
        $mail = $_POST['logMail'];
        $password = $_POST['logContraseña'];

        $consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '".$mail."'");

        $user = $consulta->fetch_assoc();

        if ($mail == $user['correo'] && $password == $user['contrasena']) {
            session_start();
            $_SESSION['usuario'] =  $user['ID_usuario'];
            header("Location: ../index.php");
            exit();
        }
    break;
    case 2: // Verificación Registro
        $nombre = $_POST['regNombre'];
        $apellido = $_POST['regApellido'];
        $numero = $_POST['regContacto'];
        $mail = $_POST['regCorreo'];
        $contra = $_POST['regContraseña'];
        $contra1 = $_POST['regConfirmContraseña'];

        if ($contra == $contra1) {
            $query = "INSERT INTO `usuarios`(`nombre`, `apellido`, `contacto`, `correo`, `contrasena`) VALUES ('$nombre','$apellido',$numero,'$mail','$contra')";
            mysqli_query($conn, $query);
            $consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '".$mail."'");

            $user = $consulta->fetch_assoc();
            session_start();
            $_SESSION['usuario'] =  $user['ID_usuario'];
            header("Location: ../index.php");
            exit();
        }
        else {
            echo "<script>alert('Las contraseñas deben ser iguales.');</script>";
            header("Location: ../index.php");
        }
    break;
    case 3: // Cerrar sesión
        session_start();
        session_destroy();
        header("Location: ../index.php");
        exit();
    break;
}

?>