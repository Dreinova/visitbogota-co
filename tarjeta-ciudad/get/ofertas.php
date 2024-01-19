<?php
include "../includes/sdk_import.php";
include "../includes/tarjeta-ciudad.php";  $tc = new tarjetaCiudad($_GET["lang"]);
$result = $tc->getCardOferta($_GET["id"]);
echo json_encode($result);
?>