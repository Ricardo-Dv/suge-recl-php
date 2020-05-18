<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuario WHERE usuarioId = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $cedula = $fila['CedPasUsu'];
        $nombre = $fila['nombUsu'];
        $apellido = $fila['apellUsu'];
        $fechaNac = $fila['fechaNacUsu'];
        $sexo = $fila['sexoUsu'];
        $tlfn = $fila['tlfnUsu'];
        $nac = $fila['nacionalidadUsu'];
        $correo = $fila['correoUsu'];
         }
    }


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNac = $_POST['fechaNac'];
    $sexo = $_POST['sexo'];
    $tlfn = $_POST['tlfn'];
    $nac = $_POST['nacionalidad'];
    $correo = $_POST['correo'];

    $query = "UPDATE usuario set CedPasUsu = '$cedula', nombUsu = '$nombre', apellUsu = '$apellido', fechaNacUsu = '$fechaNac',
     sexoUsu = '$sexo', tlfnUsu = '$tlfn', nacionalidadUsu = '$nac', correoUsu = '$correo' WHERE usuarioId = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = "Datos actualizados satisfactoriamente";
    $_SESSION["mensaje_color"] = "info";

    header("Location: usuariosmetro.php");
}

?>