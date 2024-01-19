<?php 
  $include_level = "../";  
  $project_base = "/disena-tu-viaje/";
  $project_folder = "disena-tu-viaje";
  include "../includes/header.php";
  $bogota = new bogota($_GET["lang"] ? $_GET["lang"]  : 'es' );
  include "includes/disena-tu-viaje.php";
  $dtv = new dtv($_GET["lang"] ? $_GET["lang"]  : 'es' );
?>