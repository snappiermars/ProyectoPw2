<?php
session_start();
$numCuenta= $_SESSION['usermane'];//413112576


if(!isset($numCuenta)){

        header("location: index.php");
}else{
    if($_SESSION['admin'] == true){
        include "headerAdmin.php";
    }
        else{
        include "header.php";
    }

    if ($_SESSION['admin'] == true){
        echo "<h1> Bienvenido admin $numCuenta al apartado de actualizar usuario</h1>";
        ?>
        <h2>Actualizar usuario</h2>
        <!--Contenedor del forms -->
        <div>
            <form method="post" action="logica/reemplazar.php">
            <!--Entrada para el numero de cuenta -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Numero de cuenta</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="numUser" placeholder="Numero de Cuenta">
            </div>
            <!--Entrada para el nombre -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del usuario</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" placeholder="Nombre del usuario">
            </div>
            <!--Entrada para la carrera -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Carrera</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="carrera" placeholder="ICO, IEE, IME">
            </div>
            <!--Entrada para la direccion -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Direccion</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="direccion" placeholder="Ingresa tu direccion">
            </div>
            <!--Entrada para la telefono -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="telefono" placeholder="Ingresa los 10 digitos de tu telefono">
            </div>
            <!--Entrada para el correo -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Correo</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="correo" placeholder="Ingresa tu correo usuario@correo.com">
            </div>
            <!--Entrada para la contraseña -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="contraseña" placeholder="Contraseña">
            </div>
            <!--Entrada para los permisos -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Permisos</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="permisos" placeholder="Permisos">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar usuario</button>
            </form>
        </div>
<?php
    }elseif($_SESSION['admin'] == false){
        echo "<h1> Usuario $numCuenta no deberia tener acceso a esto</h1>";
    }
    
    include "footer.php";


}
?>