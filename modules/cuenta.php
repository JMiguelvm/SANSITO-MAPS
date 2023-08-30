<?php
$idUser = $_SESSION['usuario'];

$queryUsers = mysqli_query($conn, "SELECT nombre, apellido, contacto, correo, contrasena from usuarios where ID_usuario like '".$idUser."%'");

$userActual = $queryUsers->fetch_assoc();

$nameUser = $userActual['nombre'];
$apeUser = $userActual['apellido'];
$numCont = $userActual['contacto'];
$email = $userActual['correo'];
$nomCompUser= $nameUser." ".$apeUser;
$passw = $userActual['contrasena'];
$idMostrable = $idUser;
if(isset($_SESSION['usuario'])){
    echo '
        <div id="myAccount">
            <div class="main__btns">
            <h1 id="main__exampleTxt">'.$nomCompUser.'</h1>
                <div>
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
                            <a class="btns__style__link" href="seguridad.php">
                                <div class="link__container">
                                    <i class="btns__img fa-solid fa-shield-halved"></i>
                                    <span class="btns__text">Seguridad</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="boton__cerrar" onclick="cerrarForm(myAccount)">Cerrar</button>
            </div>
        </div>

        <div id="main__secu"> 
            <div class="secu-container">
            <h1 class="secu-text">Seguridad</h1>   
                <div class="container__passw">
                    <button id="btn__passw" class="container-button"><span id="button-text">Contraseña</span><span class="button-subText">'.$passw.'</span></button>
                    <div class="form-container">
                        <form action="/SANSITO-MAPS/modules/sql/editarSeguridad.php?id='.$idUser.'" method="POST" id="form__passw" style="display: none;">
                            <input class="form-input" placeholder="'.$passw.'" type="text" name="passwSecu" id="passwSecurity" required>
                            <div class="form-btn">
                                <button id="btn-passw" type="submit">Enviar</button>
                                <button id="btn-cerrar-passw" type="button" onclick="cerrarForm(form__passw);">Cerrar</button>
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
                                <button id="btn-cerrar-id" type="button" onclick="cerrarForm(form__id);">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <button type="button" class="boton__cerrar" onclick="cerrarForm(main__secu)">Cerrar</button>
            </div>
        </div>

        <div id="main__datos">
            <div id="datos-container">
            <h1 class="datos-text">Mis Datos</h1>
                <div class="container__name">
                    <button id="btn__nombre" class="container-button"><span id="button-text">Nombre</span><span class="button-subText">'.$nomCompUser.'</span></button>
                    <div class="form-container">
                        <form action="/SANSITO-MAPS/modules/sql/editarTusDatos.php?id='.$idUser.'&option=1" method="POST" id="form__nombre" style="display: none;">
                            <input class="form-input" placeholder="'.$nomCompUser.'" type="text" name="nameTusDatos" id="nomCompUser">
                            <div class="form-btn">
                                <button id="btn-nom" type="submit">Enviar</button>
                                <button id="btn-cerrar-nom" type="button" onclick="cerrarForm(form__nombre);">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="container__number">
                    <button id="btn__numContact" class="container-button"><span id="button-text">Número de contacto</span><span id="button-subText-num" class="button-subText">'.$numCont.'</span></button>
                    <div class="form-container">
                        <form action="/SANSITO-MAPS/modules/sql/editarTusDatos.php?id='.$idUser.'&option=2" method="POST" id="form__numContact" style="display: none;">
                            <input class="form-input"  placeholder="'.$numCont.'" type="text" name="numContactTusDatos">
                            <div class="form-btn">
                                <button id="btn-num" type="submit">Enviar</button>
                                <button id="btn-cerrar-num"  type="button" onclick="cerrarForm(form__numContact);">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="container__email">
                    <button id="btn__email" class="container-button"><span id="button-text">Email</span><span id="button-subText-email" class="button-subText">'.$email.'</span></button>
                    <div class="form-container">
                        <form action="/SANSITO-MAPS/modules/sql/editarTusDatos.php?id='.$idUser.'&option=3" method="POST" id="form__email" style="display: none;">
                            <input class="form-input" placeholder="'.$email.'" type="text" name="emailTusDatos">
                            <div class="form-btn">
                                <button id="btn-email" type="submit">Enviar</button>
                                <button id="btn-cerrar-email" type="button" onclick="cerrarForm(form__email);">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <button type="button" class="boton__cerrar" onclick="cerrarForm(main__datos)">Cerrar</button>
            </div>
        </div>
    ';
}
?>

<script>
    const btn__passw = document.getElementById("btn__passw");
    const form__passw = document.getElementById("form__passw");
    const myAccount = document.getElementById("myAccount");
    const main__secu = document.getElementById("main__secu");
    const main__datos = document.getElementById("main__datos");

    btn__passw.addEventListener("click", function(){
        form__passw.style.display="block";
    });

    const btn__id = document.getElementById("btn__id");
    const form__id = document.getElementById("form__id");

    btn__id.addEventListener("click", function(){
        form__id.style.display="block";
    });
    const btn__nombre = document.getElementById("btn__nombre");
    const form__nombre = document.getElementById("form__nombre");

    btn__nombre.addEventListener("click", function(){
        form__nombre.style.display="block";
    });

    const btn__numContact = document.getElementById("btn__numContact");
    const form__numContact = document.getElementById("form__numContact");

    btn__numContact.addEventListener("click", function(){
        form__numContact.style.display="block";
    });

    const btn__email = document.getElementById("btn__email");
    const form__email = document.getElementById("form__email");

    btn__email.addEventListener("click", function(){
        form__email.style.display="block";
    });

    document.querySelector("#form__nombre").addEventListener("submit", function(event) {
        event.preventDefault();

        var nomCompUser = document.getElementById("nomCompUser").value;

        var partes = nomCompUser.split(" ");
        var nameUser = partes[0];
        var apeUser = partes[1];

        var inputNameUser = document.createElement("input");
        inputNameUser.type = "hidden";
        inputNameUser.name = "nameUser";
        inputNameUser.value = nameUser;
        inputNameUser.method = "POST";

        var inputApeUser = document.createElement("input");
        inputApeUser.type = "hidden";
        inputApeUser.name = "apeUser";
        inputApeUser.value = apeUser;
        inputApeUser.method = "POST";
        this.appendChild(inputNameUser);
        this.appendChild(inputApeUser);

        this.submit();
    });
    function cerrarForm(form) {
        form.style.display = "none";
    }
    
    const userButton = document.getElementById("userButton");

    function abrirForm(form) {
        form.style.display = "block";
    }

        </script>