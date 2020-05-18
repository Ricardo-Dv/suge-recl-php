<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardarAspec'])){
        $descripAspec = $_POST['descripAspec'];

        $query = "INSERT INTO tipos_aspecto(descripAspec) VALUES ('$descripAspec')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Aspecto creado Satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/aspectos.php");
    }
?>