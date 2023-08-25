<div id="pagoContainer">
        <form action="/SANSITO-MAPS/bocetos/pagosql.php" method="POST">
                <h3>Forma de pago</h3>
                <div id="pago__direc">Direccion de entrega<input type="text" name="direccion_entrega"></div>
                <div id="pago__options">
                <div class="pago__option">Efectivo<input type="radio" name="forma_pago" value="efectivo"></div>
                <div class="pago__option">Nequi<input type="radio" name="forma_pago" value="nequi"></div>
                <div class="pago__option">Daviplata<input type="radio" name="forma_pago" value="daviplata"></div>
                </div>
                    <div id="pago__buttons">
                    <button type="submit">Enviar</button>
                    <button type="reset">Borrar</button>
                    </div>
        </form>
    </div>