<?php
session_start();

if (isset($_SESSION['usuario'])) {
    echo '
    <header>
    <div class="navBar">
        <div class="searchBar">
            <input type="text" id="searchText" placeholder="Buscar...">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
            <a onclick="vercategorias()">Ver Categorías</a>
        </div>
        <script>
            function vercategorias()
            {
                document.getElementById("vercategorias").style.display= block;
            }
        </script>
        <div id="vercategorias">
            <form>
                <h1>Hola chavales</h1>

            </form>
        </div>
        <a href="/SANSITO-MAPS" id="sansitoMaps">SANSITO-MAPS</a>
        <div id="user_panel">
            <div>
                <input type="checkbox" id="visible_ul"></input>
                <label id="usericon" for="visible_ul" class="fa-solid fa-circle-user">         
                </label>
                <ul id="ulCont">
                    <li><a href=""><i class="fa-solid fa-wrench"></i> Configuración</a></li>
                    <li><a href=""><i class="fa-solid fa-box"></i> Pedidos</a></li>
                    <li><a href="modules/validar.php?option=3"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    </header>
    ';
}

else {
    echo '
    <header>
    <div class="navBar">
        <div class="searchBar">
            <input type="text" id="searchText" placeholder="Buscar...">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <a href="/SANSITO-MAPS" id="sansitoMaps">SANSITO-MAPS</a>
        <div class="buttons">
            <button onclick="openLogin()" id="bLog">Iniciar sesión</button>
            <button onclick="openRegister()" id="bReg">Registrarse</button>
        </div>
    </div>
</header>
<div id="log_cont">
    <div id="login">
        <form action="modules/validar.php?option=1" method="post">
            <h3>Login</h3>
            <input type="text" name="logMail" id="logMail" placeholder="Correo" required>
            <input type="password" name="logContraseña" id="logContraseña" placeholder="Contraseña" required>
            <div>
                <button id="login__submit" type="submit">Ingresar</button>
                <button onclick="cancelLogin()" id="login__cancel" >Cancelar</button>
            </div>
        </form>
    </div>
    <div id="register">
        <form action="modules/validar.php?option=2" method="post">
            <h3>Registro</h3>
            <input type="text" name="regNombre" placeholder="Nombre(s)" required>
            <input type="text" name="regApellido" placeholder="Apellidos" required>
            <input type="number" name="regContacto" placeholder="Número de contacto" required>
            <input type="email" name="regCorreo" placeholder="Correo" required>
            <input type="password" name="regContraseña" placeholder="Contraseña" required>
            <input type="password" name="regConfirmContraseña" placeholder="Confirmar contraseña" required>
            <div>
                <button id="register__submit" type="submit">Ingresar</button>
                <button onclick="cancelRegister()" id="register__cancel" >Cancelar</button>
            </div>
        </form>
        
    </div>
</div>
<script>
    var logCont = document.getElementById("log_cont");
    var loginInput = document.getElementById("login");
    var registerInput = document.getElementById("register");
    function openLogin() {
        logCont.style.display = "block";
        loginInput.style.display = "block";
    }
    function cancelLogin()    {
        logCont.style.display = "none";
        loginInput.style.display = "none";
    }
    function openRegister() {
        logCont.style.display = "block";
        registerInput.style.display = "block";
    }
    function cancelRegister() {
        logCont.style.display = "none";
        registerInput.style.display = "none";
    }
</script>
    ';
}
?>