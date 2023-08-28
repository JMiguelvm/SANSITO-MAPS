
    <div id="barraLateral">
    <button id="cerrarBtn"><i class="fas fa-times"></i></button>
      <form action="promos.php" method="post">
    <button type="submit" name="descuento" value="true">Promociones</button>
    </form>
    <form action="categorias.php" method="post">
    <label for="categoria">Categoria:</label><br>
    <select name="categoria">
        <option value="">Todas las categorías</option>
        <option value="tecnologia">Tecnologia</option>
        <option value="ropa">Ropa</option>
        <option value="calzado">Calzado</option>
        <option value="belleza">Belleza</option>
    </select>
    <label for="orden">Ordenar por:</label><br>
    <select name="orden" id="orden">
        <option value="recent">Productos: Más recientes</option>
        <option value="desc">precio: Mayor a Menor</option>
        <option value="asc">Precio: Menor a Mayor</option>
        <option value="rating">Valoración: Mejor valorados</option>
    </select>
    <input type="submit" value="Buscar">
    </form>
      <style>  
      button[name="descuento"] {
        background-color: yellow;
        color: black;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
      }

      #categoriasBtn {
        padding: 1px 1px;
        color: white;
        border: none;
        cursor: pointer;
      }

      #cerrarBtn {
        border: none;
        background-color: transparent;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        float: right;
      }

      #barraLateral {
        position: fixed;
        top: 0;
        left: -300px;
        width: 300px;
        height: 100%;
        background-color: #333;
        transition: left 0.3s ease;
      }

      #barraLateral.activo {
        left: 0;
      }

      label {
        color: whitesmoke;
      }

      a {
        color: yellow;
        text-decoration: none;
        display: block;
        margin-bottom: 15px;
      }

      form {
        margin-top: 20px;
      } 

      select {
        width: 100%;
        padding: 8px;
        border: 1px solid black;
        border-radius: 5px;
        background-color: #fff;
        margin-bottom: 10px;
      }

      input[type="submit"] {
        background-color: red;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }
      </style>