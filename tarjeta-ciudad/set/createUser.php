<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://files.visitbogota.co/drpl/entity/user',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "name": [{"value":"lalala@gmail.com"}],
    "mail":[{"value":"lalala@gmail.com"}],
    "field_country":[{"value":"Colombia"}],
    "field_city":[{"value":"Bogotá"}],
    "field_fname":[{"value":"Nombre de usuario"}],
    "field_lname":[{"value":"Apellido"}],
    "field_why":[{"value":"Motivo viaje"}],
    "roles":[{"target_id":"traveluser"}],
    "pass":[{"value":"mipassword"}],
    "field_pass2":[{"value":"mipassword"}],
    "status": [{"value":"1"}]
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic ZGV2ZWxvcGVyOkRBUFVecTAxIW9mIUlWRG1waSU='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
