<?php 

    include("../database/conexion.php");

    if (isset($_POST['guardarusuario'])){
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fechanac = $_POST['fechanac'];
        $sexo = $_POST['sexo'];
        $tlfn = $_POST['tlfn'];
        $nac = $_POST['nac'];
        $correo = $_POST['correo'];

        $query = "INSERT INTO usuario(CedPasUsu, nombUsu, apellUsu, fechaNacUsu, sexoUsu, tlfnUsu, nacionalidadUsu, correoUsu) 
        VALUES ('$cedula', '$nombre', '$apellido', '$fechanac', '$sexo', '$tlfn', '$nac', '$correo')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Fallido");
        }

        $_SESSION['mensaje'] = "Usuario agregado satisfactoriamente";
        $_SESSION["mensaje_color"] = "info";

        header("Location: ../vistas/usuariosmetro.php");
    }
?>