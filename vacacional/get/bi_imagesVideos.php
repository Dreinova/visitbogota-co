<?php
    include "../includes/sdk_import.php";
    include "../includes/vacacional.php";  
    $vacacional = new vacacional("es");
    $result = $vacacional->getbi_imagenes_home();
    echo json_encode($result);
?>