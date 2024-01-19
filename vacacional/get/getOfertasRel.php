<?php
    include "../includes/sdk_import.php";
    include "../includes/vacacional.php";  
    $vacacional = new vacacional("es");
    $result = $vacacional->getOfertasRel($_GET["id_atractivo"]);
    echo json_encode($result);
?>