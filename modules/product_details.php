<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/pDetails1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
    <title>SANSITO-MAPS</title>
</head>
<body>
    <div>
            <?php
                include_once('sql/conexion.php');
                include('header.php');
                $productId = $_GET['productId'];
                $sql = "SELECT `nombre_producto`, `imagen_producto`, `descripcion`, `precio`, `stock_disponible` FROM productos WHERE ID_producto=".$productId;
                $result = $conn->query($sql);
                $comentario = "SELECT `ID_usuario`, `comentario`, `puntuacion` FROM valoraciones WHERE ID_producto=".$productId;
                $resulta = $conn->query($comentario);

                


            
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div style="padding-top: 100px;">
            <div id="product__container">
                <div id="product__images">
                    <div class="image__container">
                        <img id="product__image1" onclick="changeImg(`'. $row["imagen_producto"] .'`)" class="product__image" src="'. $row["imagen_producto"] .'" width="80" height="80">
                        <div class="overlay"></div>
                    </div>
                    <div class="image__container">
                        <img id="product__image2" onclick="changeImg(`'. $row["imagen_producto"] .'`)" class="product__image" src="'. $row["imagen_producto"] .'" width="80" height="80">
                        <div class="overlay"></div>
                    </div>
                    <div class="image__container">
                        <img id="product__image3" onclick="changeImg(`'. $row["imagen_producto"] .'`)" class="product__image" src="'. $row["imagen_producto"] .'" width="80" height="80">
                        <div class="overlay"></div>
                    </div>
                    <img id="product__mainImage" class="product__mainImage" src="'. $row["imagen_producto"] .'" width="400" height="400">
                </div>          
                <div id="product__attributes">
                    <h2 id="product__name">'. $row["nombre_producto"] .'</h2>
                    <div class="rating clearfix">
                    <form action="sql/valoracionsql.php?idUser='.$_SESSION['usuario'].'" method="post">
                        <input type="radio" class="pComentario" id="star5" name="rating" value="5">
                        <label for="star5"></label>
                        <input type="radio" class="pComentario" id="star4" name="rating" value="4">
                        <label for="star4"></label>
                        <input type="radio" class="pComentario" id="star3" name="rating" value="3">
                        <label for="star3"></label>
                        <input type="radio" class="pComentario" id="star2" name="rating" value="2">
                        <label for="star2"></label>
                        <input type="radio" class="pComentario" id="star1" name="rating" value="1">
                        <label for="star1"></label>
                        <input type="hidden" name="idProducto" value="'.$productId.'">
                        <div id="comentario">
                            <textarea name="comentario" rows="5" cols="33">Ingrese su comentario..</textarea>
                            <button type="submit">Enviar</button>
                            <button type="button" id="cancelButton">Cancelar</button>
                        </div>
                    </form>
                    </div>
                    <p id="product__description">'. $row["descripcion"] .'</p>';
                       
            
            $precioNormalFormateado = number_format($row["precio"], 0, ',', '.');
            $precioConDescuento = $row["precio"] * (1 - ($row["descuento"] / 100));
            $precioConDescuentoFormateado = number_format($precioConDescuento, 0, ',', '.');
            
            echo '<style>
                .strike {
                    text-decoration: line-through;
                }
                
                .discount-price {
                    color: green;
                }
                
                .discount-text {
                    font-weight: bold;
                    color: red;
                }
                
                .discount-value {
                    font-weight: bold;
                    color: red;
                }
            </style>';

                    $precioNormalFormateado = number_format($row["precio"], 0, ',', '.');
                    $descuento = isset($row["descuento"]) ? $row["descuento"] : 0;
                    $precioConDescuento = $row["precio"] * (1 - ($descuento / 100));
                    $precioConDescuentoFormateado = number_format($precioConDescuento, 0, ',', '.');

                    echo '<style>
                        .strike {
                            text-decoration: line-through;
                        }
                        
                        .discount-price {
                            color: green;
                        }
                        
                        .discount-text {
                            font-weight: bold;
                            color: red;
                        }
                        
                        .discount-value {
                            font-weight: bold;
                            color: red;
                        }
                    </style>';

                    if ($descuento > 0) {
                        echo '<p class="product-price"><span class="strike">Antes:</span> <span class="strike normal-price">$' . $precioNormalFormateado . ' COP</span></p>';
                        echo '<p class="product-price"><span class="discount-price">Ahora: $' . $precioConDescuentoFormateado . ' COP</span></p>';
                    } else {
                        echo '<p class="product-price">Precio: $' . $precioNormalFormateado . ' COP</p>';
                    }

                    echo '<div id="product__stock">
                            <p class="product__stock__item">Cantidad:</p>
                            <select class="product__stock__item">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="more">Más de 5 unidades</option>
                            </select>
                            <p class="product__stock__item" id="product__stock__number">'. $row["stock_disponible"] .' disponibles</p>
                        </div>
                        <div id="product__buttons">
                            <button>Agregar a favoritos</button>
                            <button>Marcar en el mapa</button>
                        </div>
                    </div>
                    <div id="product__description">
                
                    </div>
                </div>
                </div>';
                }
            }
            if($resulta->num_rows > 0)
            {
                while ($roww = $resulta->fetch_assoc()){
                    $usuariosql = "SELECT `nombre`, `apellido` FROM usuarios WHERE ID_usuario=".$roww['ID_usuario'];
                    $aaa = $conn->query($usuariosql);
                    $resultado = $aaa->fetch_assoc();
                    $nombreComp =  $resultado['nombre'].' '. $resultado['apellido'];
                    echo '<center>
                    <table>
                        <tr>'.$nombreComp .'</tr>
                        <tr>Valoracion <h2>'.$roww["puntuacion"].'</h2></tr>
                        <tr><td><th><h2>'.$roww["comentario"].'</h2></th></td></tr>
                    </table>
                    </center>';
                }
            }       
            $conn->close();
        ?>
    </div>

    <?php
        include('footer.php');
    ?>
    <script src="modules/js/category.js"></script>
    <script>
        function changeImg(newSrc) {
            var mainImg = document.getElementById("product__mainImage");
            mainImg.setAttribute("src", newSrc);
        }
    </script>
</body>
</html>

