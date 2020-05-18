<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardarMot'])){
        $descripMot = $_POST['descripMot'];

        $query = "INSERT INTO tipos_motivo(descripMot) VALUES ('$descripMot')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Motivo creado Satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/motivos.php");
    }
?>