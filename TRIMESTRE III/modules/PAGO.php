<div id="pagoContainer">
        <form action="/SANSITO-MAPS/modules/sql/pagosql.php" method="POST">
                <h3>FORMA DE PAGO</h3>
                <div id="pago__direc"><span>Direccion de entrega</span><input type="text" name="direccion_entrega"></div>
                <div id="pago__options">
                <div id="pago__efectivo" class="pago__option">
                    <input type="radio" class="pago__input" name="forma_pago" id="efectivo" value="efectivo">
                    <label for="efectivo">Efectivo</label>
                </div>

                <div id="pago__nequi" class="pago__option">
                    <input type="radio" class="pago__input" name="forma_pago" id="nequi" value="nequi">
                    <label for="nequi">Nequi</label>
                </div>

                <div id="pago__davi" class="pago__option">
                    <input type="radio" class="pago__input" name="forma_pago" id="daviplata" value="daviplata">
                    <label for="daviplata">Daviplata</label>
                </div>
                </div>
                    <div id="pago__buttons">
                    <button type="submit">Enviar</button>
                    <button type="button" id="button__cancel" onclick="cerrarForm()">Cancelar</button>
                    </div>
        </form>
    </div>