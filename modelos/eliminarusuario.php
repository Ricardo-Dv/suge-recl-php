<?php

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM usuario WHERE usuarioId = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query fallido");
    }

    $_SESSION['mensaje'] = "Usuario eliminado satisfactoriamente";
    $_SESSION['mensaje_color'] = "danger";


    header("Location: ../vistas/usuariosmetro.php");
}

?>