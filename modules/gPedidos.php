<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/pedidos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
    <title>Gestion pedidos</title>
    
    <style>

    </style>
</head>
<body>
    <div>
        <?php
            include_once('sql/conexion.php');
            include('header.php');
        ?>
        <br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["order_id"]) && isset($_POST["new_status"])) {
                    $orderID = $_POST["order_id"];
                    $newStatus = $_POST["new_status"];

                    $sqlUpdate = "UPDATE pedidos SET estado_pedido = $newStatus WHERE ID_producto = $orderID";
                }
            }

            $sql = "SELECT p.ID_producto, p.estado_pedido, p.fecha_pedido, p.forma_pago, p.direccion_entrega, pr.nombre_producto, pr.imagen_producto
                    FROM pedidos p
                    INNER JOIN productos pr ON p.ID_producto = pr.ID_producto
                    WHERE p.ID_usuario = ".$_SESSION['usuario'];
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<div id="orders">
                        <h2>Pedidos</h2>
                        <table>
                            <tr>
                                <th>Producto</th>
                                <th>Fecha del Pedido</th>
                                <th>Forma de Pago</th>
                                <th>Dirección de Entrega</th>
                                <th>Estado</th>
                                <th>Fecha Estimada de Entrega</th>
                                <th>Actualizar Estado</th>
                            </tr>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row["nombre_producto"] . '</td>
                            <td>' . $row["fecha_pedido"] . '</td>
                            <td>' . $row["forma_pago"] . '</td>
                            <td>' . $row["direccion_entrega"] . '</td>
                            <td>';
                    switch ($row['estado_pedido']) {
                        case 1:
                            echo 'En almacen';
                            break;
                        case 2:
                            echo 'En proceso';
                            break;
                        case 3:
                            echo 'Entregado';
                            break;
                    }
                    echo '</td>
                            <td>' . $row["fecha_pedido"] . '</td>
                            <td>
                                <select class="status-select" data-order-id="' . $row["ID_producto"] . '">
                                    <option value="1">En almacen</option>
                                    <option value="2">En proceso</option>
                                    <option value="3">Entregado</option>
                                </select>
                                <button class="update-button">Enviar</button>
                            </td>
                        </tr>';
                }
                echo '</table></div>';
            } else {
                echo '<div id="orders">
                        <h2>No tienes pedidos activos.</h2></div>';
            }
            $conn->close();
        ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".update-button").click(function() {
                    var orderId = $(this).siblings(".status-select").data("order-id");
                    var newStatus = $(this).siblings(".status-select").val();

                    $.ajax({
                        type: "POST",
                        url: "",
                        data: {
                            order_id: orderId,
                            new_status: newStatus
                        },
                        success: function(response) {
                            var statusElement = $(".status-select[data-order-id='" + orderId + "']").siblings(".order__status").find("p");
                            statusElement.text(response);
                            console.log("Estado actualizado con éxito");
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error("Error al actualizar el estado del pedido:", error);
                        }
                    });
                });
            });
        </script>
    </div>
    <?php
        include('footer.php');
    ?>
    <script src="js/script.js"></script>
    <script src="js/category.js"></script>
</body>
</html>
