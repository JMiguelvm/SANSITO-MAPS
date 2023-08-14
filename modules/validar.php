<?php
include_once('sql/conexion.php');

$option = $_GET['option'];

switch($option) {
    case 1: // Verificación Login
        $mail = $_POST['logMail'];
        $password = $_POST['logContraseña'];

        $consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '".$mail."'");

        $user = $consulta->fetch_assoc();

        if ($mail == $user['correo'] && $password == $user['contraseña']) {
            session_start();
            $_SESSION['usuario'] =  $user['ID_usuario'];
            header("Location: ../index.php");
            exit();
        }
    break;
    case 2: // Verificación Registro
    break;
    case 3: // Cerrar sesión
        session_start();
        session_destroy();
        header("Location: ../index.php");
        exit();
    break;
}

?>