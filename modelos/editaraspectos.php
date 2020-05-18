<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tipos_aspecto WHERE tipoAspec = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $descripAspec = $fila['descripAspec'];
         }
    }


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $descripAspec = $_POST['descripAspec'];

    $query = "UPDATE tipos_aspecto set descripAspec = '$descripAspec' WHERE tipoAspec = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = "Aspecto actualizado satisfactoriamente";
    $_SESSION["mensaje_color"] = "info";

    header("Location: aspectos.php");
}

?>