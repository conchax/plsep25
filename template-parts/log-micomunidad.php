
<form method="post" action="<?php echo esc_url( home_url( '/mi-comunidad' ) ); ?>">
    <div class="form-group">
        <div class="text-center">
            <label>Ingresa tu usuario o correo institucional:</label>
            <input type="text" name="usuario" class="modal-input form-control " required="required" maxlength="60"  placeholder="Usuario o correo institucional">
        </div>
        <br>
        <div class="text-center">
            <button class="btn-home btn-fluid btn-lg" type="submit" value="Ingresa">
                Ingresar
            </button>  
        </div>
    </div>
</form>