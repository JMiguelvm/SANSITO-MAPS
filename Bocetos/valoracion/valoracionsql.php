<?php
include_once('conexion.php');

$valoracion = $_POST['rating'];
$comentario = $_POST['comentario'];

mysqli_query($conn, "INSERT INTO valoraciones(comentario,puntuacion) VALUES ('$comentario','$valoracion')");
header('Location: c.html')
?>