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
        $sql = "DELETE FROM bolsaupeu WHERE id = $id"; // Reemplaza 'tabla' con el nombre de tu tabla

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
