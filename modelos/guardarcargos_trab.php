<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardarcargos'])){
        $descripCargo = $_POST['descripCargo'];

        $query = "INSERT INTO tipos_cargos(descripCargo) VALUES ('$descripCargo')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Cargo Creado Satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/agregartrabajador.php");
    }
?>