<?php 
session_start();

$inc = include "logica/conexion.php";
if($inc){
    $consulta = "SELECT * FROM usuarios.usuario";
    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
        if($_SESSION['admin'] == false){
            header("location: ../Principal.php");
        }
        include "headerAdmin.php";
        ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">numCuenta</th>
            <th scope="col">nombre</th>
            <th scope="col">carrera</th>
            <th scope="col">direccion</th>
            <th scope="col">telefono</th>
            <th scope="col">email</th>
            <th scope="col">fechaAlta</th>
            <th scope="col">permisos</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        while ($row = $resultado->fetch_array()){
            $cuenta = $row["numCuenta"];
            $nombre = $row["nombreUser"];
            $carrera = $row["carrera"];
            $direccion = $row["direccion"];
            $telefono = $row["telefono"];
            $correo = $row["email"];
            $fecha = $row["fechaAlta"];
            $permisos = $row["permisos"];
            ?>
            <tr>
                <th scope="row"><?php echo $cuenta; ?></th>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $carrera; ?></td>
                <td><?php echo $direccion; ?></td>
                <td><?php echo $telefono; ?></td>
                <td><?php echo $correo; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><?php echo $permisos; ?></td>
            </tr>
            <?php
        }
        ?>
            </tbody>
        </table>
	<?php
}
}
include "footer.php"
?>