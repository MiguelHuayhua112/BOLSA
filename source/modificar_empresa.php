<?php
    include("../includes/head.php");
    include("../includes/conectar.php");

    $conexion = conectar();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Inicio de la zona central del sistema -->
    <h1>Modificar Datos de Empresa</h1>

    <?php
    // Incluir el archivo de conexión a la base de datos
    include("../includes/conectar.php");

    // Verificar si se ha enviado un ID para eliminar
    if(isset($_GET['id'])) {
        // Obtener el ID del registro a eliminar
        $id = $_GET['id'];

        // Establecer la conexión a la base de datos
        $conexion = conectar();

        // Escapar el ID para evitar inyección SQL
        $id = mysqli_real_escape_string($conexion, $id);

        // Construir la consulta SQL para eliminar el registro
        $sql = "DELETE FROM tabla WHERE id = $id"; // Reemplaza 'tabla' con el nombre de tu tabla

        // Ejecutar la consulta SQL
        if(mysqli_query($conexion, $sql)) {
            // Si la eliminación fue exitosa, redirigir a una página de éxito o a donde desees
            header("Location: exito.php"); // Reemplaza 'exito.php' con la página a la que quieres redirigir
            exit(); // Terminar la ejecución del script
        } else {
            // Si hay un error al ejecutar la consulta, mostrar un mensaje de error
            echo "Error al intentar eliminar el registro: " . mysqli_error($conexion);
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    } else {
        // Si no se proporcionó un ID para eliminar, mostrar un mensaje de error
        echo "ID no especificado para eliminar.";
    }
?>




 <?php
 /*
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Recuperar información del usuario de la base de datos según el ID
        $conexion = conectar();
     //   $id = mysqli_real_escape_string($conexion, $id); // Evita inyección SQL
        $sql = "SELECT * FROM empresa WHERE id = $id";
        $resultado = mysqli_query($conexion, $sql);
    
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $usuario = mysqli_fetch_assoc($resultado);
        } else {
            echo "Empresa no encontrado.";
            exit();
        }
    } else {
        echo "ID de empresa no especificado.";
        exit();
    }
    /*  $id = $_REQUEST['id'];
        $sql = "SELECT * FROM empresas WHERE id='$id'";
        $registro = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_array($registro);
    */
        ?>

<!--Modificar empresas-->
    <form method="POST" action="actualizar_empresa.php">
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

        <div class="row mb-3">
            <label for="razon_social" class="col-sm-2 col-form-label">Razón Social</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="razon_social" value="<?php echo $fila['razon_social']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="ruc" class="col-sm-2 col-form-label">RUC</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ruc" value="<?php echo $fila['ruc']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="direccion" value="<?php echo $fila['direccion']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono" value="<?php echo $fila['telefono']; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="correo" class="col-sm-2 col-form-label">Correo Electrónico</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="correo" value="<?php echo $fila['correo']; ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Empresa</button>
    </form>

    <!-- Fin de la zona central del sistema -->
</div>
<!-- /.container-fluid --> 

<?php
    include("../includes/foot.php");
?>
