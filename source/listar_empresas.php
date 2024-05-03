
<!-- incluye la conexion  de head y el conectar -->
<?php
    include("../includes/head.php");
    include("../includes/conectar.php");
    $conexion = conectar();
?>
<!-- -------------------- -->

<div class="container-fluid">
    <h1>Lista de Empresas</h1>
    
    <!--este es la modfiicacion de como van a funcionar las columnas -->
    <?php
        $sql = "SELECT * FROM empresas";
        $registros = mysqli_query($conexion, $sql);
        echo "<table class='table table-success table-hover'>";
        echo "<th>Razón Social</th><th>RUC</th><th>Dirección</th><th>Teléfono</th><th>Correo</th><th>Acciones</th>";
        while ($fila = mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>".$fila['razon_social']."</td>";
            echo "<td>".$fila['ruc']."</td>";
            echo "<td>".$fila['direccion']."</td>";
            echo "<td>".$fila['telefono']."</td>";
            echo "<td>".$fila['correo']."</td>";
            echo "<td>";
            ?>
            <button type="button" class="btn btn-primary" onClick="f_editar('<?php echo $fila['id']; ?>');">Edit</button>
            <button type="button" class="btn btn-danger" onClick="f_eliminar('<?php echo $fila['id']; ?>');">Eliminar</button>
            <button type="button" class="btn btn-success" onClick="f_asignar('<?php echo $fila['id']; ?>');">Asignar usuario</button>
            <?php
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <!-- --------------------------------- -->

</div>


<!-- Este es la segunda lista que deberia haber salido -->
<div id="div_usuarios">
    <h1>Lista de usuarios</h1>
<!-- -----------------------  -->


<?php  
   $sql_usuarios="SELECT * FROM usuarios";
   $registros_usuarios = mysqli_query($conexion, $sql_usuarios);
   while ($fila_user = mysqli_fetch_array($registros_usuarios)) {
   //while ($fila = mysqli_fetch_array($registros)) {
    //echo 'a href="#', onClick="f_asignar('.$fila_user)"
    echo '<a href="#", onClick="f_asignar('.$fila_user['id'].')">';
        echo $fila_user['dni'].' '.$fila_user['nombres'].' '.$fila_user['apellidos'].'<br>';
   }
?>

</div>
<!--segunda modificacion el parentesis anda raro, se creo para la ventana flotante -->
<script src="<?php echo RUTAGENERAL; ?>templates/vendor/jquery/jquery.min.js"></script>
<script>

   $(document).ready(function(){ //inicia el jquer

    $("#div_usuarios").dialog({
        width: 600,
        height: 400
        title: "Lista de usuarios...",
    });

}); 

<!-- Es el agregado del footer -->
<?php
    include("../includes/foot.php");
?>
