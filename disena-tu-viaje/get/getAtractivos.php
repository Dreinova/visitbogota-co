<?php
include "../includes/sdk_import.php";
include "../includes/disena-tu-viaje.php";
$dtv = new dtv(isset($_GET["lang"]) ? $_GET["lang"]  : 'es' );
$cat = str_replace(' ', '+', $_GET['category']);
$result = $dtv->getAtractivosFilter($cat, $_GET["para"]);
echo json_encode($result);
?>