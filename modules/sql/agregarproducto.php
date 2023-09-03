<?php
    include_once('conexion.php');

    $NombreProducto = $_POST['NomProducto'];
    $ImagenProducto = $_POST['FotoProducto'];
    $Descripcion = $_POST['descripcionProducto'];
    $Precio = $_POST['PrecioProducto'];
    $Categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $Descuento = $_POST['descuento'];
    if (isset($_GET['idVendedor'])) {
        $idVendedor = $_GET['idVendedor'];
        $sql = "INSERT INTO productos(nombre_producto,ID_vendedor,imagen_producto,descripcion,precio,stock_disponible,descuento,categoria) VALUES('$NombreProducto','$idVendedor','$ImagenProducto','$Descripcion','$Precio','$stock','$Descuento','$Categoria')";
        mysqli_query($conn, $sql);
        header("Location: /SANSITO-MAPS/modules/vProductos.php?notification=6&title=Exito&text=Producto añadido con exito");
        exit();
    }
    else {
        $sql = "INSERT INTO productos(nombre_producto,imagen_producto,descripcion,precio,stock_disponible,descuento,categoria) VALUES('$NombreProducto','$ImagenProducto','$Descripcion','$Precio','$stock','$Descuento','$Categoria')";
        mysqli_query($conn, $sql);
        header("Location: ../admin/producto/agregar.php");
        exit();
    }
    
?>