<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cuenta.css">
    <link rel="stylesheet" href="css/orders.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            include_once('sql/conexion.php');
            include('header.php');
            include('cuenta.php');
            include('category.php');
        ?>

        <?php
         $sql = "SELECT ID_producto, estado_pedido FROM pedidos WHERE ID_usuario = ".$_SESSION['usuario'];
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            echo '<div id="orders">
            <h2>My orders</h2>';
             while ($row = $result->fetch_assoc()) {
                 $sql = "SELECT nombre_producto, imagen_producto FROM productos WHERE ID_producto = ".$row['ID_producto'];
                 $queryResult = $conn->query($sql);
                 $arrayResult = $queryResult->fetch_assoc();
                 echo '
                 <div class="order">
                     <div class="order__info">
                         <h5>' . $arrayResult["nombre_producto"] .'.</h5>
                         <span>Nombre de tienda</span>
                     </div>
                     <img src="' . $arrayResult["imagen_producto"] .'" alt="">
                     <div class="order__status">
                         <span>Estado</span>';
             switch($row['estado_pedido']) {
                 case 1:
                     echo '<p>En preparación</p>';
                 break;
                 case 2:
                     echo '<p>Despachado</p>';
                 break;
                 case 3:
                    echo '<p>Entregado</p>';
                break;
             }
                    echo' </div>
                     <div class="order__date">
                         <span>Fecha estimada de entrega</span>
                         <p>## de septiembre de 20##</p>
                     </div>
                 </div>';
             }
             echo '</div>';
         }
         else {
            echo '<div id="orders">
            <h2>No tienes pedidos activos.</h2></div>';
         }
         $conn->close();
        ?>
    </div>
    <?php
        include('footer.php');
    ?>
</body>

