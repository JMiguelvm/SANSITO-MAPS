
<div id="search-results"></div>

  <div class="product-container">
  <?php
    $cartCount = [];

    $sql = "SELECT `name`, `img_url`, `supplier_id`, `rating`, `price` FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product">
                    <div class="product-inner">
                    <div class="product-image">
                        <img src="' . $row["img_url"] . '" alt="' . $row["name"] . '">
                    </div>
                    <h2 class="product-name">' . $row["name"] . '</h2>
                    <h4 class="product-provider">' . $row["supplier_id"] . '</h4>
                    <div class="product-rating">
                        <span class="stars">&#9733;' . $row["rating"] . '</span>
                    </div>
                    <p class="product-price">$' . $row["price"] . ' COP</p>
                    <button class="product-buy">Comprar</button>
                    <button class="product-cart">Añadir al carrito</button>
                    </div>
                </div>';
        }
    }
?>     
  </div>