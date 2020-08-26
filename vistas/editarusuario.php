<?php include("../modelos/editarusuario.php"); ?>

<?php include("../includes/header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editarusuario.php?id=<?php echo $_GET['id']; ?>" method="POST">

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
                        <input type="text" name="fechaNac" value="<?php echo $fechaNac; ?>" 
                            class="form-control" placeholder="Actualiza la Fecha de Nac.">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="sexo" value="<?php echo $sexo; ?>" 
                            class="form-control" placeholder="Actualiza el Sexo">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="tlfn" value="<?php echo $tlfn; ?>" 
                            class="form-control" placeholder="Actualiza el Tlfn">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="nacionalidad" value="<?php echo $nac; ?>" 
                            class="form-control" placeholder="Actualiza la Nacionalidad">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="correo" value="<?php echo $correo; ?>" 
                            class="form-control" placeholder="Actualiza el Correo">
                    </div>

                    <button class= "btn btn-primary ml-5" type="submit" name="actualizar">  
                        Actualizar 
                    </button>

                    <a class="btn btn-primary ml-5" href="usuariosmetro.php"> 
                        Volver
                    </a>

                </form>
            
            </div>
        
        </div>

    </div>
</div>


<?php include("../includes/footer.php"); ?>
