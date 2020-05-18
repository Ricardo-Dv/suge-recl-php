<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardarDpto'])){
        $descripDpto = $_POST['descripDpto'];

        $query = "INSERT INTO tipos_dpto(descripDpto) VALUES ('$descripDpto')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Departamento creado satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/agregartrabajador.php");
    }
?>