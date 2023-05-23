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
        echo "<h1> Bienvenido admin $numCuenta</h1>";
    }elseif($_SESSION['admin'] == false){
        echo "<h1> Bienvenido usuario $numCuenta</h1>";
    }
    ?>
    <div class="container-fluid">
    <h2>Algunas intrucciones</h2>
    <p>En este sitio si eres administrador a traves de la barra de navegacion puedes escoger las diferentes funcionalidades que hay</p>
    <br>
    <p>Si eres un usuario sientete alegre por ser parte de este sitio</p>
    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/33965063-4fae-4373-b9ca-ea9909de7457/ddezd99-b6678b1e-f4bd-4eb3-b526-b03f22f558f1.jpg/v1/fill/w_1191,h_671,q_70,strp/_congratulation_____sfm_fnaf__by_julotcho_ddezd99-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NzIxIiwicGF0aCI6IlwvZlwvMzM5NjUwNjMtNGZhZS00MzczLWI5Y2EtZWE5OTA5ZGU3NDU3XC9kZGV6ZDk5LWI2Njc4YjFlLWY0YmQtNGViMy1iNTI2LWIwM2YyMmY1NThmMS5qcGciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.ZHAyRHPN6KYX0wiXXiLcuxq_ltTzwGgEobHZ2bo9LTc" class="img-fluid mx-auto d-block" alt="Felicidades">
    </div>
    
    <?php


    


    include "footer.php";


}


?>