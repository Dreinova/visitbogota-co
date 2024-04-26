<?php
    include "../includes/sdk_import.php";
    include "../includes/vacacional.php";  
    $vacacional = new vacacional("es");
    $result = $vacacional->get_atractivos(isset($_GET['id']) ? $_GET['id'] :"all", isset($_GET['termID']) ? $_GET['termID'] :"all");
    echo json_encode($result);
?>