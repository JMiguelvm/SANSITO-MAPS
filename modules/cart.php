    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header1.css">
    <link rel="stylesheet" href="css/cart.css">
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

            $sql = "SELECT `ID_producto`, `nombre_producto`, `imagen_producto`, `precio` FROM productos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($cartCount, $row["ID_producto"]);
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
                            <button class="product__content__button  product__content__item">Eliminar</button>
                            <button class="product__content__button  product__content__item">Guardar para más tarde</button>
                        </div>
                    </div>
                    ';
                }
                echo '<h1>'.implode(", ", $cartCount).'</h1>';
            }
            $conn->close();
        ?>
    </div>
    </div>
    <?php
        include('footer.php');
    ?>
</body>
</html>