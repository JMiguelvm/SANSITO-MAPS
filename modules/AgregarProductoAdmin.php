
<body>
    <form method="post" action="agregarproducto.php">
        <tr><td>Nombre del producto<input type="text" name="NomProducto"></td></tr>
        <tr><td>imagen del producto <input type="file" name="FotoProducto"></td></tr>
        <tr><td>Descripcion del producto <textarea name="descripcionProducto"></textarea></td></tr>
        <tr><td>Precio del producto <input type="number" name="PrecioProducto"></td></tr>
        <tr><td>
            <div>
                <tr><td><input type="radio" name="categoria" value="ropa">Ropa</td></tr>
                <tr><td><input type="radio" name="categoria" value="calzado">Calzado</td></tr>
                <tr><td><input type="radio" name="categoria" value="tecnologia">Tecnologia</td></tr>
                <tr><td><input type="radio" name="categoria" value="belleza">Belleza</td></tr>
            </div>
        </td></tr>
        <tr><td>Stock disponible <input type="number" name="stock"></td></tr>
        <tr><td>Descuento (NÚMERO)<input type="text" name="descuento"></td></tr>
        <tr>
            <td><button type="submit">A</button></td>
        </tr>
    </form>
</body>
