<body>
    <button name="categoria" value="Ropa"></button>
</body>
<?php

$categoria 
?>


<button onclick="categoria()">°</button>
        <script>
            function categoria()
            {
            document.getElementById("formcategoria2")style.display="block";
            }
            function cancelar()
            {
            document.getElementById("formcategoria")style.display="none";
            }
        </script>
        <form type="post" id="formcategoria">
        <li class="categoriaBtn"><a href="categoria/categoriaropa.php">Categoría Ropa</a></li>
        <li class="categoriaBtn"><a href="category/categoriacalzado.php">Categoría Calzado</a></li>
        <li class="categoriaBtn"><a href="category/categoriabelleza.php">Categoría belleza</a></li>
        <li class="categoriaBtn"><a href="category/categoriatecno.php">Categoría Tecnologia</a></li>
        <button onclick="cancelar()">Cancelar</button>
        </form>

        <script src="script.js"></script>










                
                            <?php
                                $conexion = new mysqli("localhost", "root", "", "san");

                                $palabraClave = $_GET["palabra_clave"];
                                $categoria = $_GET["categoria"];

                                $query = "SELECT `nombre_producto`, `precio` , `categoria` FROM productos";


                                $resultado = $conexion->query($query);
                            ?>


                            <table>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Categoría</th>
                                </tr>
                                <?php while ($f = $resultado->fetch_assoc()) { ?>
                                <tr class="producto">
                                <tr>
                                    <td><?php echo $f["nombre_producto"]; ?></td>
                                    <td><?php echo $f["precio"]; ?></td>
                                    <td><?php echo $f["categoria"]; ?></td>
                                </tr>

                                <?php } ?>
                            </table>

                            <?php
                            $conexion->close();
                            ?>




        