<?php
/*

Vacacional class
Version 1.0
Basic PHP functions forVacacional

*/
session_start();
class tarjetaCiudad extends bogota{
    public $domain = "https://www.bogotadc.travel/drpl/es/api/v1";
    public $domainv2 = "https://www.bogotadc.travel/drpl/es/api/v2";
    public $generalInfo = array();
    public $language = "es";
    public $palabras = array();
    public $production = true;

    function __construct($language, $development = false){
        $this->language = $language;
        $this->palabras = $this->getPalabras();
        $this->generalInfo = $this->getInfoGeneral();
        if ($development) {
            $this->production = false;
        }       
    }

    function getSections(){
        $res = $this->query("tc_sections", "", true);
        return $res;
    }
    function getPalabras(){
        $res = $this->query("pi_tc", "", true);
        $words = explode(' | ', $res[0]->field_palabras); 
        return $words;
    }
    function getCards($id = "all"){
        $res = $this->query("cards/".$id, "", true);
        return $res;
    }
    function getCardOferta($ids){
        $res = $this->query("ofertas_tc/".$ids, "", true);
        return $res;
    }
    function getInfoGeneral(){
        $res = $this->query("tc_infognrl", "", true);
        return $res;
    }
}


