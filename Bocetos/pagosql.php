<?php
    include_once('conexion.php');

    $formapago = $_POST['forma_pago'];
    $estado = $_POST['estado_pedido'];
    $direccion = $_POST['direccion_entrega'];

    mysqli_query($conn, "INSERT INTO pedidos(forma_pago,estado_pedido,direccion_entrega) VALUES('$formapago','$estado','$direccion')");
    header("Location: ../PAGO.php");
?>