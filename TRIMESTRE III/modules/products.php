
<div id="search-results"></div>

  <div class="product-container">
  <?php
    $sql = "SELECT `ID_producto`, `nombre_producto`, `imagen_producto`, `precio` FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product">
                    <div class="product-inner">
                    <div class="product-image">
                        <a href="modules/product_details.php?productId=' . $row["ID_producto"] .'"><img src="' . $row["imagen_producto"] . '" alt="' . $row["nombre_producto"] . '"></a>
                    </div>
                    <h2 class="product-name">' . $row["nombre_producto"] . '</h2>
                    <h4 class="product-provider">Proveedor ID #</h4>
                    <div class="product-rating">
                        <span class="stars">&#9733; -.-</span>
                    </div>
                    <p class="product-pr  8 = [1,2,3] ice">$' . $row["precio"] . ' COP</p>
                    <button class="product-buy">Comprar</button>
                    <form action="modules/validar.php?option=4" method="post">
                        <button name="productId" value="' . $row["ID_producto"] .'"type="submit" class="product-cart">Añadir al carrito</button>
                    </form>      
                    </div>
                </div>';
        }
    }
    $conn->close();
?>     
  </div>