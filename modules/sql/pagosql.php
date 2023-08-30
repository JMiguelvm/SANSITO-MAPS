<?php
    session_start();
    include_once('conexion.php');
    if (isset($_SESSION['cartCount'])) {
        $formapago = $_POST['forma_pago'];
        $estado = 1;
        $direccion = $_POST['direccion_entrega'];
        $user = $_SESSION['usuario'];

        for ($i = 0; $i < count($_SESSION['cartCount']); $i++) {
            $productId = $_SESSION['cartCount'][$i];
            mysqli_query($conn, "INSERT INTO pedidos(forma_pago, ID_usuario, ID_producto,estado_pedido,direccion_entrega) VALUES('$formapago', '$user', '$productId','$estado', '$direccion')");
        }
        unset($_SESSION['cartCount']);
    }
    else if (isset($_POST['productId'])){
        $formapago = $_POST['forma_pago'];
        $estado = 1;
        $direccion = $_POST['direccion_entrega'];
        $user = $_SESSION['usuario'];
        $productId = $_POST['productId'];

        mysqli_query($conn, "INSERT INTO pedidos(forma_pago, ID_usuario, ID_producto,estado_pedido,direccion_entrega) VALUES('$formapago', '$user', '$productId','$estado', '$direccion')");
    }
    header("Location: /SANSITO-MAPS");
    exit();
?>