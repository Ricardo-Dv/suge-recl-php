<?php include("../includes/header.php"); ?>
<?php include("../database/conexion.php"); ?>




<div class="container p-4">
  <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
        <form action="../modelos/guardarusuario.php" method="POST">

          <div class="form-group">     
            <input class="form-control" name="cedula" type="text" placeholder="Cédula">
          </div>

          <div class="form-group"> 
           <input class="form-control" name="nombre" type="text" placeholder="Nombre">
          </div>

          <div class="form-group"> 
            <input class="form-control" name="apellido" type="text" placeholder="Apellido">
          </div>

          <div class="form-group"> 
           <input class="form-control" name="fechanac" type="text" placeholder="Fecha Nac aaaa/mm/dd">
          </div>

          <div class="form-group"> 
            <input class="form-control" name="sexo" type="text" placeholder="Sexo">
          </div>

          <div class="form-group"> 
            <input class="form-control" name="tlfn" type="text" placeholder="Teléfono">
          </div>

          <div class="form-group"> 
           <input class="form-control" name="nac" type="text" placeholder="Nacionalidad">
          </div>

          <div class="form-group"> 
           <input class="form-control" name="correo" type="text" placeholder="Correo">
          </div>

          <div class="form-group"> 
            <button class= "btn btn-primary ml-5" type="submit" name="guardarusuario">
              Agregar
            </button>

            <a class="btn btn-primary ml-5" href="usuariosmetro.php"> 
              Volver
            </a>
          </div>

        </form>
       </div> 
      </div>
  </div>
</div>

<?php include ("../includes/footer.php"); ?>