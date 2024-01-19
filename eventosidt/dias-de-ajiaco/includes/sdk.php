<?php

class idt {
    public $domain = "https://www.idt.gov.co/es/api/v1/";

    function query($url, $body = "", $method = "GET") {
        $endpoint = $this->domain . $url;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $endpoint,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        $response = curl_exec($curl);
        if ($response === false) {
            echo 'Error en la solicitud cURL: ' . curl_error($curl);
        }
        $request = json_decode($response);
        curl_close($curl);
        return $request;
    }
    
    function getLandingsInfo($id){
        $result = $this->query("landingsidt/" . $id);
        return $result[0];
    }
    function getRestaurantes(){
        $result = $this->query("rest_ajiaco");
        return $result;
    }
}