<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM trabajador WHERE trabajadorId = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $cedula = $fila['cedPasTrab'];
        $nombre = $fila['nombTrab'];
        $apellido = $fila['apellTrab'];
        $cargo = $fila['idCargo'];
        $dpto = $fila['idDpto'];
        $tlfn = $fila['tlfnTrab'];
        $fechaNac = $fila['fechaNacTrab'];
        $correo = $fila['correoTrab'];
        $sexo = $fila['sexoTrab'];
        $nac = $fila['nacionalidadTrab'];
         }
    }


if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cargo = $_POST['cargos'];
    $dpto = $_POST['dpto'];
    $tlfn = $_POST['tlfn'];
    $fechaNac = $_POST['fechaNac'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $nac = $_POST['nacionalidad'];

    $query = "UPDATE trabajador 
    set cedPasTrab = '$cedula', nombTrab = '$nombre', apellTrab = '$apellido', idCargo = '$cargo', idDpto = '$dpto', tlfnTrab = '$tlfn', fechaNacTrab = '$fechaNac', correoTrab = '$correo', sexoTrab = '$sexo', nacionalidadTrab = '$nac' 
    WHERE trabajadorId = '$id' ";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = "Datos actualizados satisfactoriamente";
    $_SESSION["mensaje_color"] = "info";

    header("Location: trabajadores.php");
}

?>