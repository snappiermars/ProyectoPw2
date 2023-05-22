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

    //echo "<h1> hola tu numero de cuenta es $numCuenta </h1> ";
    if ($_SESSION['admin'] == true){
        echo "<h1> Bienvenido admin $numCuenta</h1> 
        <br> 
        <p>Hola que tal estoy probando algunas cosas</p>";
    }elseif($_SESSION['admin'] == false){
        echo "<h1> Bienvenido usuario $numCuenta</h1>";
    }
    



    

    echo "<a href='logica/salir.php'> SALIR</a>";

    include "footer.php";


}


?>