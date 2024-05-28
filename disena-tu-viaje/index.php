<?php 
$bodyClass = 'dtv-home';
include "includes/head.php";
if($lang == "es"){
    $planifica_viaje = "Planifica tu viaje";
    $intereses_visita = "¿QUÉ PODRÍA INTERESARTE EN TU VISITA?";
    $dias_en_bogota = "¿CUÁNTOS DÍAS ESTARÁS EN BOGOTÁ?";
    $selecciona = "Selecciona";
    $opcion_1_dia = "1 Día";
    $opcion_2_dias = "2 Días";
    $opcion_3_dias = "3 Días";
    $opcion_4_dias = "4 Días";
    $opcion_mas_una_semana = "Más de una semana";
    $con_quien_viajas = "¿CON QUIÉN VIAJAS?";
    $disena_tu_viaje = "DISEÑA TU VIAJE";
    $bogota_itinerario = "Bogotá tiene un itinerario preparado para ti";
    $tiempo_estadia = "TIEMPO DE ESTADÍA";
    $mas_una_semana = "+ de 1 semana";
    $tipo_viaje = "TIPO DE VIAJE";
    $viaje_en_pareja = "Viajo en pareja";
    $intereses = "INTERESES";
    $restaurantes = "Restaurantes";
    $atractivos_recomendados = "ESTOS SON LOS ATRACTIVOS QUE TE RECOMENDAMOS PARA TU VIAJE";
    $errormessage = "Debes seleccionar la duración de tu estancia, con quién viajas y al menos un interés para ayudarte a planificar tu viaje.";
    $errorButon = "Vuelve a intentarlo";
    
}else{
    $planifica_viaje = "Plan Your Trip";
    $intereses_visita = "SELECT YOUR INTERESTS";
    $dias_en_bogota = "HOW MANY DAYS WILL YOU BE IN BOGOTÁ?";
    $selecciona = "Select";
    $opcion_1_dia = "1 Day";
    $opcion_2_dias = "2 Days";
    $opcion_3_dias = "3 Days";
    $opcion_4_dias = "4 Days";
    $opcion_mas_una_semana = "More than one week";
    $con_quien_viajas = "WHO ARE YOU TRAVELING WITH?";
    $disena_tu_viaje = "DESIGN YOUR TRIP";
    $bogota_itinerario = "Bogotá has an itinerary prepared for you";
    $tiempo_estadia = "LENGTH OF STAY";
    $mas_una_semana = "+1 week";
    $tipo_viaje = "TYPE OF TRIP";
    $viaje_en_pareja = "Traveling as a couple";
    $intereses = "INTERESTS";
    $restaurantes = "Restaurants";
    $atractivos_recomendados = "Try these places. Enjoy your trip!";
    $errormessage = "You must select the duration of your stay, who you are traveling with, and at least one interest to help you plan your trip.";
    $errorButon = "Please try again";

}
?>
<main>
    <form action="" id="disenaForm">
        <div class="dtv-home__banner" style="background-image:url(https://res.cloudinary.com/instituto-turismo-bogota/image/upload/w_1200/v1676573583/Banco%20de%20images/PlazadeToros_30112022_RoyVega_16_ffuequ.jpg);">
            <h1 class="ms900 uppercase"><?=$planifica_viaje?></h1>
            <div class="dtv-home__categories">
                <div class="container">
                    <h2><?=$intereses_visita?></h2>
                    <ul class="dtv-home__categories-list">
        
                    </ul>
                </div>
            </div>
            <div class="filter-data">
                <span><label for="" class="ms700"><?=$dias_en_bogota?></label><select name="time" id="time">
                    <option value=""><?=$selecciona?></option>
                    <option value="1"><?=$opcion_1_dia?></option>
                    <option value="2"><?=$opcion_2_dias?></option>
                    <option value="3"><?=$opcion_3_dias?></option>
                    <option value="4"><?=$opcion_4_dias?></option>
                    <option value="5"><?=$opcion_mas_una_semana?></option>
                </select></span>
                <span><label for="" class="ms700"><?=$con_quien_viajas?></label><select name="para" id="para"><option value=""><?=$selecciona?></option></select></span>
                <button type="submit" class="btn uppercase ms900"><?=$disena_tu_viaje?></button>
            </div>
        </div>
        <div id="reveal">
            <div class="info-user">
                <div class="content container">
                    <div class="left">
                        <h3 class="ms700"><?=$disena_tu_viaje?></h3>
                        <h4 class="ms900"><?=$bogota_itinerario?></h4>
                    </div>
                    <div class="right">
                        <div class="time">
                            <small class="ms900"><?=$tiempo_estadia?></small>
                            <p class="ms700">+ de 1 semana</p>
                        </div>
                        <div class="tipoviaje">
                            <small class="ms900"><?=$tipo_viaje?></small>
                            <p class="ms700">Viajo en pareja</p>
                        </div>
                        <div class="interes">
                            <small class="ms900"><?=$intereses?></small>
                            <p class="ms700">Restaurantes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imperdibles">
                <h5 class="ms700 uppercase"><?=$atractivos_recomendados?></h5>
                <ul class="grid-imperdibles">
    
                </ul>
            </div>
            <!-- <section class="start">
                <div class="container">
                    <h3 class="ms700">¡Conoce las ofertas y adquiere tu</h3>
                    <h4 class="ms900">TARJETA CIUDAD</h4>
                    <h5 class="ms700">antes de empezar tu viaje!</h5>
                </div>
                <a href="/<?=$lang?>/tarjeta-ciudad" class="btn ms900">¡Adquiérela aquí!</a>
            </section> -->
        </div>
    </form>
</main>
<? include 'includes/imports.php'?>

<div id="dialog-content" style="display:none;max-width: 500px;background: #FFF !important;border-radius: 10px;padding: 50px 20px;">
  <h2 style="text-align: center;margin-bottom: 15px;color:#35498e;">¡Oops!</h2>
  <p style="text-align: justify;margin-bottom: 15px;"><?=$errormessage?></p>
  <button data-fancybox-close type="button" class="btn uppercase ms900" style="background-color: #35498e;color: #fff;font-size: 14px;display: flex;align-items: center;justify-content: center;border-radius: 8px;padding: 10px 30px;"><?=$errorButon?></button>

</div>