

<?php
    include "../includes/sdk_import.php";
    include "../includes/vacacional.php"; 
    $vacacional = new vacacional("es");
    $result = $vacacional->getZonas();
    echo json_encode($result);
?>