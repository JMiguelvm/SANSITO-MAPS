<?php
        
        
        $categoria = $_POST['categoriaaa'];
        if($categoria=="value='ropa'")
        {
            $querycategoria = mysqli_query($conn, "SELECT * FROM categorias ORDER BY nombre_categoria");
        }
        echo '
        <div class="cart__product">
        <div id="product__img">
            <img src="'.$row["img_url"].'" width="200" height="200" id="item__img">
        </div>
        <div id="product__content">
            <h3 id="product__content__name" class="product__content__item">'.$row["name"].'</h3>
            <span id="product__content__price" class="product__content__item">$'.$row["price"].'</span>
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
?>