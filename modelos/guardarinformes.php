<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardarinformes'])){
        $motivo = $_POST['motivo'];
        $aspecto = $_POST['aspecto'];
        $fechainf = $_POST['fechainf'];
        $observinf = $_POST['observinf'];
        $dpto = $_POST['dpto'];
        $usuario = $_POST['usuario'];

        $query = "INSERT INTO informe(tipoMot, tipoAspec, fechaInf, observInfo, idDpto, usuarioId) 
        VALUES ('$motivo', '$aspecto', '$fechainf', '$observinf', '$dpto', '$usuario')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Informe creado satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/informes.php");
    }
?>