<?php

//require 'conexion.php';

$usuariodado = $_REQUEST['Cuenta'];
$clave = $_REQUEST['clave'];

$inc = include "conexion.php";
if($inc){

$consulta = "SELECT * FROM usuario WHERE numCuenta='".$usuariodado."'";
$resultado = mysqli_query($conexion,$consulta);



    if ($resultado){
    while ($row = $resultado->fetch_row()) {
	    $numCuenta = $row[0];
	    //echo $numCuenta;
	    $nickdb = $row[1];
	    $passdb = $row[6];
	    $tipodb = $row[8];
    }

    $entrada = false;
    if ($usuariodado==$numCuenta && $clave==$passdb) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
        if($tipodb == 1){
            $entrada = true;
            session_start();
            $_SESSION['admin'] = true;
            $_SESSION['usermane'] = $nickdb;
            header("location: ../Principal.php");

        }elseif($tipodb == 0){
            $entrada = true;
            session_start();
            $_SESSION['admin'] = false;
            $_SESSION['usermane'] = $numCuenta;
            header("location: ../Principal.php");
        }
    

    
    } 
    if ($entrada==false) {
        header("location: ../indexError.php");
    }
    }
}
include "footer.php"
?>