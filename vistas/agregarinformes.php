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
        <form action="../modelos/guardarinformes.php" method="POST">

        <div class="form-group"> 
          <select class="form-control" name="motivo">
          
          <?php          
          $query = "SELECT * FROM tipos_motivo";
          $result_motivo = mysqli_query($conn, $query);   
          while($fila = mysqli_fetch_array($result_motivo)) { ?>

            <option value=" <?php echo $fila['tipoMot']; ?> "> <?php echo $fila['descripMot']; ?> </option>
          <?php } ?>
            
          </select>
          </div>

          <div class="form-group"> 
          <select class="form-control" name="aspecto">
          
          <?php          
          $query = "SELECT * FROM tipos_aspecto";
          $result_aspecto = mysqli_query($conn, $query);   
          while($fila = mysqli_fetch_array($result_aspecto)) { ?>

            <option value=" <?php echo $fila['tipoAspec']; ?> "> <?php echo $fila['descripAspec']; ?> </option>
          <?php } ?>
            
          </select>
          </div>

          <div class="form-group"> 
            <input class="form-control" name="fechainf" type="text" placeholder="Fecha Informe aaaa/mm/dd">
          </div>

          <div class="form-group"> 
            <textarea class="form-control" cols="" rows="6" name="observinf">
              Observación
            </textarea>
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
          <select class="form-control" name="usuario">
          
          <?php          
          $query = "SELECT * FROM usuario";
          $result_usuario = mysqli_query($conn, $query);   
          while($fila = mysqli_fetch_array($result_usuario)) { ?>

            <option value=" <?php echo $fila['usuarioId']; ?> "> <?php echo $fila['CedPasUsu'] . " " . $fila['nombUsu'] . " " . $fila['apellUsu']; ?> </option>
          <?php } ?>
            
          </select>
          </div>

          <div class="form-group"> 
            <button class= "btn btn-primary ml-5" type="submit" name="guardarinformes">
              Agregar
            </button>

            <a class="btn btn-primary ml-5" href="informes.php"> 
              Volver
            </a>
          </div>

        </form>
       </div> 
      </div>
  </div>
</div>

<?php include ("../includes/footer.php"); ?>