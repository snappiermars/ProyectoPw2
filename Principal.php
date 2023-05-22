<?php
session_start();
$numCuenta= $_SESSION['usermane'];//413112576


if(!isset($numCuenta)){

        header("location: index.php");
}else{
    include "header.php";
    

    echo "<h1> hola tu numero de cuenta es $numCuenta </h1> ";



    

    echo "<a href='logica/salir.php'> SALIR</a>";

    include "footer.php";


}


?>