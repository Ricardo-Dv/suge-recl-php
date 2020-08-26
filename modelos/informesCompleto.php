<?php 

include("../database/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM informe NATURAL JOIN tipos_motivo NATURAL JOIN tipos_aspecto  NATURAL JOIN tipos_dpto NATURAL JOIN usuario WHERE IdCaso = $id ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $fila = mysqli_fetch_array($result);
        $id = $fila['idCaso'];
        $tipoMot = $fila['tipoMot'];
        $descripMot = $fila['descripMot'];
        $tipoAspec = $fila['tipoAspec'];
        $descripAspec = $fila['descripAspec'];
        $fechaInf = $fila['fechaInf'];
        $observInfo = $fila['observInfo'];
        $idDpto = $fila['idDpto'];
        $descripDpto = $fila['descripDpto'];        
        $usuarioId = $fila['usuarioId'];
        $cedPasUsu = $fila['CedPasUsu'];
        $nombUsu = $fila['nombUsu'];
        $apellUsu = $fila['apellUsu'];
         }
    }

?>