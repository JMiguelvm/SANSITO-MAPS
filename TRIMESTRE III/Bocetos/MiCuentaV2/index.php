<?php
    session_start();

    include_once('C:\xampp\htdocs\SANSITO-MAPS\modules\sql\conexion.php');
    
    $idUser = $_SESSION['usuario'];
    
    $queryUsers = mysqli_query($conn, "SELECT nombre, apellido from usuarios where ID_usuario like '".$idUser."%'");


    $userActual = $queryUsers->fetch_assoc();

    $nameUser = $userActual['nombre'];
    $apeUser = $userActual['apellido'];
    $nomCompUser= $nameUser." ".$apeUser;

    if(isset($_SESSION['usuario'])){
        echo'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <script src="index.js"></script>
            <link rel="stylesheet" href="index6.css">
            <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mi Cuenta</title>
        </head>
        <body>
            <header>
                <div class="navBar">
                    <div class="searchBar">
                        <input type="text" id="searchText" placeholder="Buscar...">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <p id="sansitoMaps">SANSITO-MAPS</p>
                    <button id="userAccess"><i class="fa-solid fa-right-to-bracket"></i></button>
                </div>
            </header>
            <div class="myAccount">
                <div class="myAccount__main">
                    <a class="btns__style__link" href="">
                        <div class="main__namePhoto">
                            <i  id="namePhoto__user" class="btns__img fa-regular fa-user"></i>
                            <h1 id="main__exampleTxt">'.$nomCompUser.'</h1>
                        </div>
                    </a>
                    <div class="main__btns">
                        <ul class="btns__ulStyle">
                            <li class="btns__style">
                                <a class="btns__style__link" href="tusDatos.php">
                                    <div class="link__container">
                                        <i class="btns__img fa-regular fa-user"></i>
                                        <span class="btns__text">Tus Datos</span>
                                    </div>
                                </a>
                            </li>
        
                            <li class="btns__style">
                                <a class="btns__style__link" href="">
                                    <div class="link__container">
                                        <i class="btns__img fa-solid fa-shield-halved"></i>
                                        <span class="btns__text">Seguridad</span>
                                    </div>
                                </a>
                            </li>
        
                            <li class="btns__style">
                                <a class="btns__style__link" href="">
                                    <div class="link__container">
                                        <i class="btns__img fa-solid fa-sack-dollar"></i>
                                        <span class="btns__text">Métodos de Pago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ';
    }

?>