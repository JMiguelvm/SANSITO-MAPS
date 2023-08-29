<?php


    include_once('C:\xampp\htdocs\SANSITO-MAPS\modules\sql\conexion.php');

    $idUser = $_GET['id'];

    if (isset($_POST['inputNameUser'])) {
        $nameUser = $_POST['inputNameUser'];
    }
    else if (isset($_POST['inputApeUser'])) {
        $apeUser = $_POST['inputApeUser'];
    }
    else if (isset($_POST['numContactTusDatos'])) {
        $numCont = $_POST['numContactTusDatos'];
    }
    else if (isset($_POST['emailTusDatos'])) {
        $email = $_POST['emailTusDatos'];
    }
    
    if(isset($nameUser)){
        mysqli_query($conn, "UPDATE usuarios set nombre='$nameUser' WHERE ID_usuario=$idUser");
    }
    else if(isset($apeUser)){
        mysqli_query($conn, "UPDATE usuarios set apellido='$apeUser' WHERE ID_usuario=$idUser");
    }
    else if(isset($numCont)){
        mysqli_query($conn, "UPDATE usuarios set contacto='$numCont' WHERE ID_usuario=$idUser");
    }
    else if(isset($email)){
        mysqli_query($conn, "UPDATE usuarios set correo='$email' WHERE ID_usuario=$idUser");
    }

    header("Location: \SANSITO-MAPS\Bocetos\MiCuentaV2/tusDatos.php");
    exit();
?>