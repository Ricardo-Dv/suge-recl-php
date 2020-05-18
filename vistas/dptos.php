<?php include("../includes/header.php"); ?>
<?php include("../includes/menulateral.php"); ?>
<?php include("../database/conexion.php"); ?>

<div class="container p-3">
    <div class="row">
        <div class="col-md-7">

            <?php if(isset($_SESSION["mensaje"])) { ?>
                <div class="alert alert-dismissible alert-<?= $_SESSION["mensaje_color"]; ?>">
                <?= $_SESSION["mensaje"] ?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php session_unset(); } ?>

            <table class="table table-sm table-hover table-borderless table-responsive-sm text-center text-nowrap">
                <thead class="thead-light h5">
                    <tr>
                    <th><a class="btn btn-info" href="agregardptos.php">
                    <i class="fas fa-plus"></i>
                    <a></th>
                    <th class="align-middle text-info">#</th>
                    <th class="align-middle text-info">Departamentos</th>
                    <th class="align-middle text-info">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                 <?php

                 $query = "SELECT * FROM tipos_dpto";
                 $result_tipos_dptos = mysqli_query($conn, $query);

                while($fila = mysqli_fetch_array($result_tipos_dptos)) { ?>
                
                    <tr>    
                        <td> </td>
                        <td class="align-middle"><?php echo $fila['idDpto']?></td>
                        <td class="align-middle"><?php echo $fila['descripDpto']?></td>
                        <td>
                             <a class= "btn btn-light" href="editardptos.php?id=<?php echo $fila['idDpto']?>">
                             <i class="fas fa-marker"></i>
                             </a>

                        </td>

                    </tr>
                <?php } ?>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php include("../includes/footer.php"); ?>