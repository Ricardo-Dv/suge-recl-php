<?php include("../includes/header.php"); ?>
<?php include("../includes/menulateral.php"); ?>
<?php include("../database/conexion.php"); ?>


<div class="d-inline-block align-top">
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
                    <th><a class="btn btn-info" href="agregarinformes.php">
                    <i class="fas fa-plus"></i>
                    <a></th>
                    <th class="align-middle text-info">Motivo</th>
                    <th class="align-middle text-info">Aspecto</th>
                    <th class="align-middle text-info">Fecha del Inf.</th>
                    <th class="align-middle text-info">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                 <?php

                 $query = "SELECT * FROM informe NATURAL JOIN tipos_motivo NATURAL JOIN tipos_aspecto";
                 $result_informe = mysqli_query($conn, $query);

                while($fila = mysqli_fetch_array($result_informe)) { ?>
                
                    <tr>

                        <td class="align-middle"><?php echo $fila['idCaso']?>
                        <td class="align-middle"><?php echo $fila['descripMot']?></td>
                        <td class="align-middle"><?php echo $fila['descripAspec']?></td>
                        <td class="align-middle"><?php echo $fila['fechaInf']?></td>
                        <td class="align-middle text-right pr-0">
                             <a class= "btn btn-light" href="informesCompleto.php?id=<?php echo $fila['idCaso']?>">
                             <i class="fas fa-eye"></i>
                             </a>
                        </td>


                    </tr>
                <?php } ?>
                 
                </tbody>
            </table>
            
        </div>
    </div>
</div>
                </div>




<?php include("../includes/footer.php"); ?>