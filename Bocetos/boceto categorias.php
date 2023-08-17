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