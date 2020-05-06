<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /suge_recl_metro/vistas/ingresar.php');
?>