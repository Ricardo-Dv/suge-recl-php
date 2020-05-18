<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tipos_cargos WHERE idCargo = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $descripCargo = $fila['descripCargo'];
         }
    }


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $descripCargo = $_POST['descripCargo'];

    $query = "UPDATE tipos_cargos set descripCargo = '$descripCargo' WHERE idCargo = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = "Cargo actualizado satisfactoriamente";
    $_SESSION["mensaje_color"] = "info";

    header("Location: cargos.php");
}

?>