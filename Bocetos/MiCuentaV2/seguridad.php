<?php
    session_start();

    include_once('C:\xampp\htdocs\SANSITO-MAPS\modules\sql\conexion.php');
    
    $idUser = $_SESSION['usuario'];
    
    $queryUsers = mysqli_query($conn, "SELECT ID_usuario, contrasena from usuarios where ID_usuario like '".$idUser."%'");


    $userActual = $queryUsers->fetch_assoc();

    $idMostrable = $userActual['ID_usuario'];
    $passw = $userActual['contrasena'];

    if(isset($_SESSION['usuario'])){
        echo'
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <script src="index.js"></script>
            <link rel="stylesheet" href="index2.css">
            <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Seguridad</title>
        </head>
        <body>
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
                <br><br><br><br><br><br><br><br>
                <div class="main__secu">
                    <h1 class="secu-text">Seguridad</h1>    
                    <div class="secu-container">
                        <div class="container__passw">
                            <button id="btn__passw" class="container-button"><span id="button-text">Contraseña</span><span class="button-subText">'.$passw.'</span></button>
                            <div class="form-container">
                                <form action="/SANSITO-MAPS/modules/sql/editarSeguridad.php?id='.$idUser.'" method="POST" id="form__passw" style="display: none;">
                                    <input class="form-input" placeholder="'.$passw.'" type="text" name="passwSecu" id="passwSecurity" required>
                                    <div class="form-btn">
                                        <button id="btn-passw" type="submit">Enviar</button>
                                        <button id="btn-cerrar-passw" type="button" onclick="closeForm(form__passw);">Cerrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="container__id">
                        <button id="btn__id" class="container-button"><span id="button-text">ID usuario</span><span id="button-subText-id" class="button-subText">'.$idMostrable.'</span></button>
                            <div class="form-container">
                                <form action="/SANSITO-MAPS/modules/sql/editarSeguridad.php?id='.$idUser.'" method="POST" id="form__id" style="display: none;">
                                    <input class="form-input"  placeholder="'.$idMostrable.'" type="text" name="idSecurity" id="input__idSecurity" readonly>
                                    <div class="form-btn">
                                        <button id="btn-cerrar-id" type="button" onclick="closeForm(form__id);">Cerrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            <script>
                function closeForm(form) {
                    form.style.display = "none";
                }
            </script>

            <script>
                const btn__passw = document.getElementById("btn__passw");
                const form__passw = document.getElementById("form__passw");
                
                btn__passw.addEventListener("click", function(){
                    form__passw.style.display="block";
                });

                const btn__id = document.getElementById("btn__id");
                const form__id = document.getElementById("form__id");
                
                btn__id.addEventListener("click", function(){
                    form__id.style.display="block";
                });

            </script>
        </body>
    </html>
        ';
    }
?>