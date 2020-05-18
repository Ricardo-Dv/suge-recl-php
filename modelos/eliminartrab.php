<?php

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM trabajador WHERE trabajadorId = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query fallido");
    }

    $_SESSION['mensaje'] = "Trabajador eliminado satisfactoriamente";
    $_SESSION['mensaje_color'] = "danger";


    header("Location: ../vistas/trabajadores.php");
}

?>