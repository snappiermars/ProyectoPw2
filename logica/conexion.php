<?php



// $host_db = "localhost";
// $user_db = "id20310744_ezequieldb";
// $pass_db = "aSB!BNaO&4c<D2lo";
// $db_name = "id20310744_test_php";

$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "contrasql";
$db_name = "usuarios";







$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);



if($conexion->connect_error){

    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";

}



?>