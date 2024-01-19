<?php
include "../includes/sdk_import.php";
include "../includes/tarjeta-ciudad.php";  $tc = new tarjetaCiudad($_GET["lang"]);
$result = $tc->getSections();
echo json_encode($result);
?>