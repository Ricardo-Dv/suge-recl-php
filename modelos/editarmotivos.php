<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tipos_motivo WHERE tipoMot = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $descripMot = $fila['descripMot'];
         }
    }


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $descripMot = $_POST['descripMot'];

    $query = "UPDATE tipos_motivo set descripMot = '$descripMot' WHERE tipoMot = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = "Motivo actualizado satisfactoriamente";
    $_SESSION["mensaje_color"] = "info";

    header("Location: motivos.php");
}

?>