<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Valoración</title>
    <link rel="stylesheet" href="valoracion.css">
    <script src="valoracion.js"></script>
</head>
<body>
    <form action="msql.php">
    <table>
        <h1>¡Califica nuestro servicio!</h1>
        <div class="rating">
            <input type="radio" name="rating" id="rating-5" value="5">
            <label for="rating-5">&#9733;</label>
            <input type="radio" name="rating" id="rating-4" value="4">
            <label for="rating-4">&#9733;</label>
            <input type="radio" name="rating" id="rating-3" value="3">
            <label for="rating-3">&#9733;</label>
            <input type="radio" name="rating" id="rating-2" value="2">
            <label for="rating-2">&#9733;</label>
            <input type="radio" name="rating" id="rating-1" value="1">
            <label for="rating-1">&#9733;</label>
        </div>
        <textarea name="comentario"></textarea>
        <tr><button id="submit">Enviar Valoración</button></tr>
    </table>
</form>
</body>
</html>
