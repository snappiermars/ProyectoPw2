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
        echo "<h1> Bienvenido admin $numCuenta al apartado de listar usuarios</h1>";
        ?>
        <h2>Listar usuario</h2>
        <!--Contenedor del forms -->
        <div>
            <form method="post" action="logica/listar.php">
            <button  type="submit" class=" btn btn-info" >Listar usuarios </button>
            </form>
        </div>
<?php
    }elseif($_SESSION['admin'] == false){
        echo "<h1> Usuario $numCuenta no deberia tener acceso a esto</h1>";
    }
    

    include "footer.php";


}
?>