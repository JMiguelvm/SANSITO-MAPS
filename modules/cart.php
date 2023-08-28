    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cart2.css">
    <link rel="stylesheet" href="categoria/category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div>
    <?php
        include_once('sql/conexion.php');
        include('header.php');
        include('categoria/category.php');
        include('notification.php');
    ?>
    <div id="cart">
        <?php
            $cartCount = [];
            for ($i = 0; $i < count($_SESSION['cartCount']); $i++) {
                $sql = "SELECT `ID_producto`, `nombre_producto`, `imagen_producto`, `precio` FROM productos WHERE ID_producto = ".$_SESSION['cartCount'][$i];
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo '
                    <div class="cart__product">
                        <div id="product__img">
                            <img src="'.$row["imagen_producto"].'" width="200" height="200" id="item__img">
                        </div>
                        <div id="product__content">
                            <h3 id="product__content__name" class="product__content__item">'.$row["nombre_producto"].'</h3>
                            <span id="product__content__price" class="product__content__item">$'.$row["precio"].'</span>
                            <span id="product__content__status" class="product__content__item">Disponible</span>
                            <div id="product__content__count" class="product__content__item">
                                <span>Cantidad:</span>
                                <select name="" id="product__content__count--select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="more">Más de 5 unidades</option>
                                </select>
                            </div>
                            <form action="/SANSITO-MAPS/modules/validar.php?option=5" method="post">
                                <input type="hidden" value="'.$row["ID_producto"].'" name="productId"></input>
                                <button class="product__content__button  product__content__item" type="submit">Eliminar</button>
                            </form>                            
                            <button class="product__content__button  product__content__item">Guardar para más tarde</button>
                        </div>
                    </div>
                    ';
            }
            $conn->close();

            include('pago.php');

        ?>
        <button id="boton__comprar" style="display: block; margin: 0 auto;">Comprar</button>
    </div>
    </div>
    <?php
        include('footer.php');
    ?>
    <script>
        const buy__button = document.getElementById("boton__comprar");
        const pagoContainer = document.getElementById("pagoContainer");
        
        buy__button.addEventListener("click", function(){
            pagoContainer.style.display="block";
        });

        function cerrarForm() {
            pagoContainer.style.display = "none";
        }
    </script>
</body>
</html>