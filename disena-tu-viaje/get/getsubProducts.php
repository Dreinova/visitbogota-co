
<?php
include "../includes/sdk_import.php";
include "../includes/disena-tu-viaje.php";
$dtv = new dtv(isset($_GET["lang"]) ? $_GET["lang"]  : 'es' );
$result = $dtv->getAllSubProducts($_GET["id"]);
echo json_encode($result);
?>