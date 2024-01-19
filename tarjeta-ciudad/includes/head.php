<?php 
  $include_level = "../";  
  $project_base = "/tarjeta-ciudad/";
  $project_folder = "tarjeta-ciudad";
  include "../includes/header2.php";
  $bogota = new bogota($_GET["lang"] ? $_GET["lang"]  : 'es' );
  include "includes/tarjeta-ciudad.php";
  $tarjetaCiudad = new tarjetaCiudad($_GET["lang"] ? $_GET["lang"]  : 'es' );
?>