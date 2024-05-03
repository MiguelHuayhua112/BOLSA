<?php
    include("../includes/head.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Inicio de la zona central del sistema -->
    <h1>Registro de Usuario</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="index.php">
                <div class="form-group">
                    <label>Nombre de Usuario:</label>
                    <input type="text" class="form-control" name="txt_usuario" placeholder="Ingrese su nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" name="txt_password" placeholder="Ingrese su contraseña" required>
                </div>
                <div class="form-group">
                    <label>Confirmar Contraseña:</label>
                    <input type="password" class="form-control" name="txt_confirm_password" placeholder="Confirme su contraseña" required>
                </div>
                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="txt_nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label>Apellidos:</label>
                    <input type="text" class="form-control" name="txt_apellidos" placeholder="Ingrese sus apellidos" required>
                </div>
                <div class="form-group">
                    <label>Correo Electrónico:</label>
                    <input type="email" class="form-control" name="txt_correo" placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="form-group">
                    <label>Teléfono:</label>
                    <input type="text" class="form-control" name="txt_telefono" placeholder="Ingrese su teléfono">
                </div>
                <div class="form-group">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="txt_direccion" placeholder="Ingrese su dirección">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>

    <!-- Fin  de la zona central del sistema -->
</div>
<!-- /.container-fluid --> 

<?php
    include("../includes/foot.php");
?>
