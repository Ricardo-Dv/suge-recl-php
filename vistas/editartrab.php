<?php include("../modelos/editartrab.php"); ?>

<?php include("../includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editartrab.php?id=<?php echo $_GET['id']; ?>" method="POST">

                     <div class="form-group">
                         <input type="text" name="cedula" value="<?php echo $cedula; ?>" 
                         class="form-control" placeholder="Actualiza la Cédula">
                     </div>

                     <div class="form-group">
                         <input type="text" name="nombre" value="<?php echo $nombre; ?>" 
                         class="form-control" placeholder="Actualiza el Nombre">
                     </div>
                    
                     <div class="form-group">
                         <input type="text" name="apellido" value="<?php echo $apellido; ?>" 
                         class="form-control" placeholder="Actualiza el Apellido">
                     </div>
                    
                     <div class="form-group"> 
                         <select class="form-control" name="cargos">
          
                         <?php          
                         $query = "SELECT * FROM tipos_cargos";
                         $result_cargos = mysqli_query($conn, $query);   
                         while($fila = mysqli_fetch_array($result_cargos)) { ?>

                         <option value=" <?php echo $fila['idCargo']; ?> "> <?php echo $fila['descripCargo']; ?> </option>
                         <?php } ?>

                         </select>
                     </div>

                     <div class="form-group"> 
                         <select class="form-control" name="dpto">
          
                         <?php          
                         $query = "SELECT * FROM tipos_dpto";
                         $result_dpto = mysqli_query($conn, $query);   
                         while($fila = mysqli_fetch_array($result_dpto)) { ?>

                         <option value=" <?php echo $fila['idDpto']; ?> "> <?php echo $fila['descripDpto']; ?> </option>
                         <?php } ?>

                         </select>
                     </div>

                     <div class="form-group"> 
                         <input type="text" name="tlfn" value="<?php echo $tlfn; ?>" 
                         class="form-control" placeholder="Actualiza el Tlfn">
                     </div>
                    
                     <div class="form-group">
                         <input type="text" name="fechaNac" value="<?php echo $fechaNac; ?>" 
                         class="form-control" placeholder="Actualiza la Fecha de Nac.">
                     </div>
                    
                     <div class="form-group">
                         <input type="text" name="correo" value="<?php echo $correo; ?>" 
                         class="form-control" placeholder="Actualiza el Correo ">
                     </div>
                    
                     <div class="form-group">
                         <input type="text" name="sexo" value="<?php echo  $sexo; ?>" 
                         class="form-control" placeholder="Actualiza el Sexo">
                     </div>
                    
                     <div class="form-group">
                         <input type="text" name="nacionalidad" value="<?php echo $nac; ?>" 
                         class="form-control" placeholder="Actualiza la Nacionalidad">
                     </div>

                     <button class= "btn btn-primary btn-block" type="submit" name="actualizar">  
                        Actualizar 
                     </button>

                </form>
            
            </div>
        
        </div>

    </div>
</div>


<?php include("../includes/footer.php"); ?>
