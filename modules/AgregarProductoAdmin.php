<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="sql/agregarproducto.php">
        <div class="add-product">
            <div class="add-product__block">
                <p class="add-product__item">
                    Nombre del producto<input type="text" name="NomProducto" class="add-product__input">
                </p>
                <p class="add-product__item">
                    imagen del producto <input type="url" name="FotoProducto" class="add-product__input">
                </p>
                <p class="add-product__item">
                    Descripcion del producto <textarea name="descripcionProducto" class="add-product__textarea"></textarea>
                </p>
            </div>
            <p class="add-product__item">
                Precio del producto <input type="number" name="PrecioProducto" class="add-product__input">
            </p>
            <p class="add-product__item">
                <div class="add-product__category">
                    <p class="add-product__radio"><input type="radio" name="categoria" value="ropa">Ropa</p>
                    <p class="add-product__radio"><input type="radio" name="categoria" value="calzado">Calzado</p>
                    <p class="add-product__radio"><input type="radio" name="categoria" value="tecnologia">Tecnologia</p>
                    <p class="add-product__radio"><input type="radio" name="categoria" value="belleza">Belleza</p>
                </div>
            </p>
            <p class="add-product__item">
                Stock disponible <input type="number" name="stock" class="add-product__input">
            </p>
            <p class="add-product__item">
                Descuento (NÚMERO)<input type="text" name="descuento" class="add-product__input">
            </p>
            <p class="add-product__item">
                <button type="submit" class="add-product__button">A</button>
            </p>
        </div>
    </form>
</body>

</html>