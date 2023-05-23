<?php 

$idreceiveduser = $_REQUEST['idusuario'];

include "conexion.php";

$consulta = "DELETE FROM usuarios.usuario WHERE numCuenta='".$idreceiveduser."'";

if (mysqli_query($conexion,$consulta)) {
	echo "<script>confirm('Usuario eliminado');</script>
	<meta http-equiv='refresh' content='0;url= ../quitarUsuario.php'>";
}
?>