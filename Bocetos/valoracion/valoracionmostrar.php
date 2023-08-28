<?php
    include_once('conexion.php');
    $valoracion = $_GET['ID_valoracion'];
    $comentario = "SELECT `comentario`, `puntuacion` FROM valoraciones WHERE ID_valoracion=".$valoracion;
    $resulta = $conn->query($comentario);

     
                if($resulta->num_rows > 0)
                {
                    while ($roww = $resulta->fetch_assoc()){
                        echo '<h1>Valoraciones</h1>
                        <table>
                            <tr>Valoracion <h2>'.$roww["puntuacion"].'</h2></tr>
                            <tr><td><th><h2>'.$roww["comentario"].'</h2></th></td></tr>
                        </table>';
                    }
                }             
        
?>  