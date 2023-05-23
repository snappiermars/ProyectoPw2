<?php 
$idusuario = $_REQUEST['numUser'];
$nombrenuevo = $_REQUEST['name'];
$carrera = $_REQUEST['carrera'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];
$email = $_REQUEST['correo'];
$contraseña = $_REQUEST['contraseña'];
$permisos = $_REQUEST['permisos'];

include "conexion.php";

$consulta = "
UPDATE
	usuario
SET
	numCuenta = '".$idusuario."',
    nombreUser = '".$nombrenuevo."',
    carrera = '".$carrera."',
	direccion = '".$direccion."',
	telefono = '".$telefono."',
	email = '".$email."',
	password = '".$contraseña."',
    fechaAlta = CURRENT_TIMESTAMP(),

	permisos =  ".$permisos."
WHERE
	numCuenta = '".$idusuario."'";

if (mysqli_query($conexion,$consulta)) {
	echo "<script>confirm('Usuario actualizado');</script>
	<meta http-equiv='refresh' content='0;url= ../actualizar.php'>";
}else{
    echo "<h1>Fallo en la actualizacion, revisa el numero de cuenta</h1>";
}
?>