<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../../modules/css/header.css">
<link rel="stylesheet" href="../../modules/css/product1.css">
<link rel="stylesheet" href="index6.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>

<?php
    include_once('C:\xampp\htdocs\SANSITO-MAPS\modules\sql\conexion.php');
    include_once("../../modules/sql/conexion.php");
    include("../../modules/header.php");
    include("../../modules/category.php");
    include("../../modules/notification.php");

    $idVendedor = $_GET['ID_vendedor'];
    
    $queryUsers = mysqli_query($conn, "SELECT 
    ID_vendedor,
    nombre_empresa,	
    descripcion_empresa from vendedores where ID_vendedor = ".$idVendedor);


    $userActual = $queryUsers->fetch_assoc();

    $nameCompa = $userActual['nombre_empresa'];
    $descripCompa = $userActual['descripcion_empresa'];

    if(isset($_GET['ID_vendedor'])){
        echo'
        <title>'.$nameCompa.'</title>
        </head>
        <body>
   
        <div class="main__container">
            <div class="container-info-tienda">
                <div class="info-tienda">
                    <div class="tienda-fotoName">
                        <div class="tienda-foto" >
                            <i id="tienda-foto" class="fa-solid fa-shop"></i>
                        </div>
                        <h2 id="tienda-name">'.$nameCompa.'</h2>
                    </div>
                        <p id="tienda-desc">'.$descripCompa.'</p>
                    </div>
                </div>
                <div class="container-productos">';
            }

            $queryProducts = mysqli_query($conn, "SELECT
            ID_producto, 
            nombre_producto,
            imagen_producto,	
            descripcion,
            precio from productos where ID_vendedor = ".$idVendedor);
    
            while ($productActual = $queryProducts->fetch_assoc()) {
                $idproducto = $productActual['ID_producto'];
                $nameProduct = $productActual['nombre_producto'];
                $imgProduct = $productActual['imagen_producto'];
                $descrProduct = $productActual['descripcion'];
                $precioProduct = $productActual['precio'];

                echo'
                <div class="producto">
                    <div class="product-image">
                        <a href="/SANSITO-MAPS/modules/product_details.php?productId='.$productActual["ID_producto"].'"><img id="image__product" src="'.$imgProduct.'" alt=""></a>
                    </div>
                    <h2 class="product-name">'.$nameProduct.'</h2>
                    <a class="product-provider">Proveedor: '.$nameCompa.'</a>
                    <div class="product-rating">
                        <span class="stars">&#9733; -.-</span>
                    </div>
                    <div class="producto-description">'.$descrProduct.'</div>
                    <div class="producto-precio">'.$precioProduct.'</div>
                </div>
                ';
            }
            echo'
            </div>
        </div>

        <?php
            //include("../../modules/footer.php");
        ?>
        <script src="../../modules/js/script.js"></script>
        <script src="../../modules/js/category.js"></script>

        ';
        ?>
        <div class="product-container">

<?php
    
?>
</body>
</html>