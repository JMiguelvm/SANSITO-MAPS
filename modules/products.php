
<div id="search-results"></div>

  <div class="product-container">
  <?php
    $sql = "SELECT `nombre_producto`, `imagen_producto`, `precio` FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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
                    <p class="product-price">$' . $row["precio"] . ' COP</p>
                    <button class="product-buy">Comprar</button>
                    <button class="product-cart">Añadir al carrito</button>
                    </div>
                </div>';
        }
    }
    $conn->close();
?>     
  </div>
