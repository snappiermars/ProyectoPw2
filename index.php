<?php include "header.php" ?>


                <h1>Login de sistema</h1>
                <form   method="POST"  action="logica/loguear.php">
                    <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
                        <br />
                    <input type="text" name="clave" placeholder="Contraseña" />
                        <br />
                    <button type="submit">Inicar Sesion</button>
                </form> 
            
            
        

   
   <?php include "footer.php" ?>