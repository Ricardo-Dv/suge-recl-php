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
                <thead class="thead-light h6">
                    <tr>
                    <th><a class="btn btn-info" href="agregartrabajador.php">
                    <i class="fas fa-user-plus"></i>
                    <a></th>
                    <th class="align-middle text-info">Cédula</th>
                    <th class="align-middle text-info">Nombre</th>
                    <th class="align-middle text-info">Apellido</th>
                    <th class="align-middle text-info">Cargo</th>
                    <th class="align-middle text-info">Departamento</th>
                    <th class="align-middle text-info">Teléfono</th>
                    <th class="align-middle text-info">Fecha Nac.</th>
                    <th class="align-middle text-info">Correo</th>
                    <th class="align-middle text-info">Sexo</th>
                    <th class="align-middle text-info">Nac.</th>
                    <th class="align-middle text-info">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                 <?php

                 $query = "SELECT * FROM trabajador NATURAL JOIN tipos_cargos NATURAL JOIN tipos_dpto ";
                 $result_trabajador = mysqli_query($conn, $query);

                while($fila = mysqli_fetch_array($result_trabajador)) { ?>
                
                    <tr>

                        <td class="align-middle"><!-- con esto se podría mostrar la ID en la tabla <?php echo $fila['usuarioId']?></td> -->
                        <td class="align-middle"><?php echo $fila['cedPasTrab']?></td>
                        <td class="align-middle"><?php echo $fila['nombTrab']?></td>
                        <td class="align-middle"><?php echo $fila['apellTrab']?></td>
                        <td class="align-middle"><?php echo $fila['descripCargo']?></td>
                        <td class="align-middle"><?php echo $fila['descripDpto']?></td>
                        <td class="align-middle"><?php echo $fila['tlfnTrab']?></td>
                        <td class="align-middle"><?php echo $fila['fechaNacTrab']?></td>
                        <td class="align-middle"><?php echo $fila['correoTrab']?></td>
                        <td class="align-middle"><?php echo $fila['sexoTrab']?></td>
                        <td class="align-middle"><?php echo $fila['nacionalidadTrab']?></td>
                        <td>
                             <a class= "btn btn-light" href="editartrab.php?id=<?php echo $fila['trabajadorId']?>">
                             <i class="fas fa-marker"></i>
                             </a>
                             <a class="btn btn-danger" href="../modelos/eliminartrab.php?id=<?php echo $fila['trabajadorId']?> ">
                             <i class="fas fa-trash-alt"></i>
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