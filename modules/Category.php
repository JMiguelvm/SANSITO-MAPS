
<div class="sidebar">
        <h2>Categorías</h2><br>
        <ul>
            <li><a href="#">Calzado</a></li>
            <li><a href="#">Tecnologia</a></li>
            <li><a href="#">Ropa</a></li>

        </ul>
</div>
<div class="content">
    <?php
        $categorias = array();

        $query = "SELECT id, nombre FROM categorias";
        $resultado = $conexion->query($query);

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $categorias[] = $fila;
            }
        }

        $usuario = mysqli_query($conexion, "SELECT * FROM productos ORDER BY categoria asc")
        while ($mostrar = mysqli_fetch_array($usuario))
        {
            echo '<div class="product">
                    <div class="product-inner">
                    <div class="product-image">
                        <img src="' . $row["imagen_producto"] . '" alt="' . $row["nombre_producto"] . '">
                    </div>
                    <h2 class="product-name">' . $row["nombre_producto"] . '</h2>
                    <h4 class="product-provider">Proveedor ID #</h4>
                    <div class="product-rating">
                        <span class="stars">&#9733; -.-</span>
                    </div>
                    <p class="product-pr  8 = [1,2,3] ice">$' . $row["precio"] . ' COP</p>
                    <button class="product-buy">Comprar</button>
                    <button class="product-cart">Añadir al carrito</button>
                    </div>
                </div>';
        }
    ?>
</div>
