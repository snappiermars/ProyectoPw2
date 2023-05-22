<?php include "header.php" ?>


                <h1>Login de sistema</h1>
                <form   method="POST"  action="logica/loguear.php">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NUMERO DE CUENTA</label>
                    <input type="text" class="form-control" name="Cuenta" placeholder="Numero de Cuenta" />
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">CONTRASEÑA</label>
                    <input type="text" class="form-control" name="clave" placeholder="Contraseña" />
                    </div>
                    <button type="submit" class="btn btn-primary">Inicar Sesion</button>
                    
                </form> 
            
            
        

   
   <?php include "footer.php" ?>