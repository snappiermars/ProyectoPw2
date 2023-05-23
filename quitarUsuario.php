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
        echo "<h1> Bienvenido admin $numCuenta al apartado de eliminar usuario</h1>";
        ?>
        <h2>Actualizar usuario</h2>
        <!--Contenedor del forms -->
        <div>
            <form method="post" action="logica/eliminar.php">
            <!--Entrada para el numero de cuenta -->
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Numero de cuenta</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="idusuario" placeholder="Numero de Cuenta">
            </div>
            <button type="submit" class="btn btn-primary">Eliminar usuario</button>
            </form>
        </div>
<?php
    }elseif($_SESSION['admin'] == false){
        echo "<h1> Usuario $numCuenta no deberia tener acceso a esto</h1>";
    }
    
    echo "<a href='logica/salir.php'> SALIR</a>";

    include "footer.php";


}
?>