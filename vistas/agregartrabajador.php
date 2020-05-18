<?php include("../includes/header.php"); ?>
<?php include("../database/conexion.php"); ?>


<div class="container p-4">
  <div class="row">
      <div class="col-md-4 mx-auto">
      
      <?php if(isset($_SESSION["mensaje"])) { ?>
                <div class="alert alert-dismissible alert-<?= $_SESSION["mensaje_color"]; ?>">
                <?= $_SESSION["mensaje"] ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php session_unset(); } ?>

        <div class="card card-body">
        <form action="../modelos/guardartrabajador.php" method="POST">

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
          <select class="form-control" name="cargo">
          <?php          
          $query = "SELECT * FROM tipos_cargos";
          $result_cargos = mysqli_query($conn, $query);   
          while($fila = mysqli_fetch_array($result_cargos)) { ?>

            <option value=" <?php echo $fila['idCargo']; ?> "> <?php echo $fila['descripCargo']; ?> </option>
          <?php } ?>

          </select>
           <a class="btn btn-info float-right" href="agregarcargos_trab.php">
              <i class="fas fa-plus"></i>
           <a>
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
          <a class="btn btn-info float-right" href="agregardptos_trab.php">
              <i class="fas fa-plus"></i>
           <a>
          </div>

          <div class="form-group"> 
           <input class="form-control" name="tlfn" type="text" placeholder="Teléfono">
          </div>

          <div class="form-group"> 
            <input class="form-control" name="fechanac" type="text" placeholder="Fecha Nac aaaa/mm/dd">
          </div>

          <div class="form-group"> 
            <input class="form-control" name="correo" type="text" placeholder="Correo">
          </div>

          <div class="form-group"> 
           <input class="form-control" name="sexo" type="text" placeholder="Sexo">
          </div>

          <div class="form-group"> 
           <input class="form-control" name="nacionalidad" type="text" placeholder="Nacionalidad">
          </div>

          <div class="form-group"> 
            <button class= "btn btn-primary btn-block" type="submit" name="guardartrabajador">
              Agregar
            </button>
          </div>

        </form>
       </div> 
      </div>
  </div>
</div>

<?php include ("../includes/footer.php"); ?>