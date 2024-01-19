<?php 
  $include_level = "../";  
  $project_base = "/vacacional/";
  $project_folder = "vacacional";
  include "../includes/header.php";
  $bogota = new bogota($_GET["lang"] ? $_GET["lang"]  : 'es' );
  include "includes/vacacional.php";
  $vacacional = new vacacional($_GET["lang"] ? $_GET["lang"]  : 'es' );
?>