<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardartrabajador'])){
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cargo = $_POST['cargo'];
        $dpto = $_POST['dpto'];
        $tlfn = $_POST['tlfn'];
        $fechanac = $_POST['fechanac'];
        $correo = $_POST['correo'];
        $sexo = $_POST['sexo'];
        $nac = $_POST['nacionalidad'];

        $query = "INSERT INTO trabajador(CedPasTrab, nombTrab, apellTrab, idCargo, idDpto, tlfnTrab, fechaNacTrab, correoTrab, sexoTrab, nacionalidadTrab) 
        VALUES ('$cedula', '$nombre', '$apellido', '$cargo', '$dpto', '$tlfn', '$fechanac', '$correo', '$sexo', '$nac')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Trabajador agregado satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/trabajadores.php");
    }
?>