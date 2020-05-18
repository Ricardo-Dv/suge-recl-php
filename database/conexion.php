<?php

session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sugerenciasyreclamos'
) or die(mysqli_erro($mysqli));


?>