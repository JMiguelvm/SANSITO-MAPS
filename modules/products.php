
<div id="search-results"></div>

  <div class="product-container">
  <?php
$sql = "SELECT `ID_producto`, `nombre_producto`, `imagen_producto`, `precio`, `descuento` FROM productos";
$result = $conn->query($sql);
include('modules/PAGO.php');
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $precioFormateado = number_format($row["precio"], 0, ',', '.');
        
        echo '<div class="product">
                <div class="product-inner">
                    <div class="product-image">
                        <a href="modules/product_details.php?productId=' . $row["ID_producto"] .'"><img src="' . $row["imagen_producto"] . '" alt="' . $row["nombre_producto"] . '"></a>
                    </div>
                    <h2 class="product-name">' . $row["nombre_producto"] . '</h2>
                    <h4 class="product-provider">Proveedor ID #</h4>
                    <div class="product-rating">
                        <span class="stars">&#9733; -.-</span>
                    </div>';
        
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
        
        if ($row["descuento"] > 0) {
            $precioConDescuento = $row["precio"] * (1 - ($row["descuento"] / 100));
            $precioConDescuentoFormateado = number_format($precioConDescuento, 0, ',', '.');
            
            echo '<p class="product-price">Precio: <span class="strike">$' . $precioFormateado . ' COP</span></p>';
            echo '<p class="product-price discount-price">Ahora: <span class="discount-price">$' . $precioConDescuentoFormateado . ' COP</span></p>';
            echo '<p class="product-discount discount-text">Descuento: <span class="discount-value">' . $row["descuento"] . '%</span></p>';
        } else {
            // Mostrar solo el precio normal para los productos sin descuento
            echo '<p class="product-price">Precio: $' . $precioFormateado . ' COP</p>';
        }
        
        echo '<button class="product-buy  boton__comprar" value="' . $row["ID_producto"] .'">Comprar</button>
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
<script>
    const buy__button = document.querySelectorAll(".boton__comprar");
    const pagoContainer = document.getElementById("pagoContainer");
    
    buy__button.forEach(function(boton) {
        boton.addEventListener("click", function(){
            pagoContainer.style.display="block";
            // Lo que queda de está función es constancia de que me gusta complicarme la vida
            var complique = document.getElementById("productoId");
            complique.value = boton.value;
    });
    })

    function cerrarForm() {
        pagoContainer.style.display = "none";
    }
</script>