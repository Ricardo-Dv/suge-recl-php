<?php include("../includes/header.php"); ?>
<?php include("../database/conexion.php"); ?>




<div class="container p-4">
  <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body">
        <form action="../modelos/guardardptos.php" method="POST">

          <div class="form-group">     
            <input class="form-control" name="descripDpto" type="text" placeholder="Descripción">
          </div>

          <div class="form-group"> 
            <button class= "btn btn-primary btn-block" type="submit" name="guardarDpto">
              Agregar
            </button>
          </div>

        </form>
       </div> 
      </div>
  </div>
</div>

<?php include ("../includes/footer.php"); ?>