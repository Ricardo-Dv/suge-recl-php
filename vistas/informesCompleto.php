<?php include("../includes/header.php"); ?>
<?php include("../includes/menulateral.php"); ?>
<?php include("../modelos/informesCompleto.php"); ?>


<div class="d-inline-block align-top p-3">
    <div class="container bg-info">
        <div class="row">
          <div class="col-md-4 pr-0">
                <div class="text-info h3 bg-success"> Detalles:
                
                </div>


                <div class="lead bg-danger"> 
                <p> Motivo: </p>
                <p> Aspecto: </p>
                <p> Fecha: </p>
                <p> Descripción: </p>
                <p> Datos del Usuario: </p>
                <p> Dpto Relacionado: </p>

   
                </div>
            </div>
            
            <div class="cold-md-7 pl-0"> 

                 <p> <?php echo $descripMot ?> </p>
                 <p> <?php echo $descripAspec ?> </p>
                 <p> <?php echo $fechaInf ?> </p>
                 <p> <?php echo $observInfo ?> </p>
                 <p> <?php echo $cedPasUsu . ", " . $nombUsu . ", " . $apellUsu ?> </p>
                 <p> <?php echo $descripDpto ?> </p>
                
                </div>
                 
        </div>
    </div>
</div>







<?php include("../includes/footer.php"); ?>