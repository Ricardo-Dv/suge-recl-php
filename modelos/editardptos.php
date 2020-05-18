<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tipos_dpto WHERE idDpto = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $descripDpto = $fila['descripDpto'];
         }
    }


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $descripDpto = $_POST['descripDpto'];

    $query = "UPDATE tipos_dpto set descripDpto = '$descripDpto' WHERE idDpto = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = "Departamento actualizado satisfactoriamente";
    $_SESSION["mensaje_color"] = "info";

    header("Location: dptos.php");
}

?>