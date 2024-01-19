<?php
/*

Vacacional class
Version 1.0
Basic PHP functions forVacacional

*/
session_start();
class dtv extends bogota{
    public $domain = "https://www.bogotadc.travel/drpl/es/api/v1";
    public $domainv2 = "https://www.bogotadc.travel/drpl/es/api/v2";
    public $language = "es";
    public $production = true;

    function __construct($language, $development = false){
        $this->language = $language;
        if ($development) {
            $this->production = false;
        }       
    }

    function getAllProducts(){
        $result = $this->query('products/all/all',"",true);
        return $result;
    }
    function getAllSubProducts($id = "all"){
        $result = $this->query('subproducts/'.$id,"",true);
        return $result;
    }
    function getAllPara(){
        $result = $this->query('para/all',"",true);
        return $result;
    }
    function getAtractivosFilter($subprod = "all",$para = "all"){
        $result = $this->query('places_dtv/'.$subprod."/".$para,"",true);
        return $result;
    }
}


