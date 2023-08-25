<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
$conexion = mysqli_connect("localhost", "root", "", "sansitooo");

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];

// Construir la consulta SQL base
$sql = "SELECT `nombre_producto` , `precio`, `categoria` FROM productos WHERE 1";

// Agregar filtros si se aplican
if (!empty($nombre)) {
    $sql .= " AND nombre LIKE '%$nombre%'";
}
if (!empty($categoria)) {
    $sql .= " AND categoria = '$categoria'";
}

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Mostrar los resultados
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Nombre: " . $fila['nombre'] . "<br>";
    echo "Categoría: " . $fila['categoria'] . "<br>";
    echo "Precio: " . $fila['precio'] . "<br><br>";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
