<?php
    include_once('sql/conexion.php');

    $NombreProducto = $_POST['NomProducto'];
    $ImagenProducto = $_FILES['FotoProducto'];
    $Descripcion = $_POST['descripcionProducto'];
    $Precio = $_POST['PrecioProducto'];
    $Categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $Descuento = $_POST['descuento'];

    mysqli_query($conn, "INSERT INTO productos(nombre_producto,imagen_producto,descripcion,precio,categoria,stock_disponible,descuento) VALUES('$NombreProducto','$ImagenProducto','$Descripcion','$Precio','$Categoria','$stock','$Descuento')");
    header("Location: AgregarProductoAdmin.php");
?>