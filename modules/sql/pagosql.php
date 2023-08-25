<?php
    include_once('C:\XAMPPP\htdocs/SANSITO-MAPS/modules/sql/conexion.php');

    $formapago = $_POST['forma_pago'];
    $estado = 1;
    $direccion = $_POST['direccion_entrega'];

    mysqli_query($conn, "INSERT INTO pedidos(forma_pago,estado_pedido,direccion_entrega) VALUES('$formapago','$estado','$direccion')");
    
?>