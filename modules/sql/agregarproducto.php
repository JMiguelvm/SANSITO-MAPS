<?php
    include_once('conexion.php');

    $NombreProducto = $_POST['NomProducto'];
    $ImagenProducto = $_POST['FotoProducto'];
    $Descripcion = $_POST['descripcionProducto'];
    $Precio = $_POST['PrecioProducto'];
    $Categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $Descuento = $_POST['descuento'];

    mysqli_query($conn, "INSERT INTO productos(nombre_producto,imagen_producto,descripcion,precio,stock_disponible,descuento,categoria) VALUES('$NombreProducto','$ImagenProducto','$Descripcion','$Precio','$stock','$Descuento','$Categoria')");
    header("Location: ../AgregarProductoAdmin.php");
?>