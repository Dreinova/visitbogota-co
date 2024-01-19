<?php 
$bodyClass = 'dtv-home';
include "includes/head.php";
?>
<main>
    <form action="" id="disenaForm">
        <div class="dtv-home__banner" style="background-image:url(https://res.cloudinary.com/instituto-turismo-bogota/image/upload/w_1200/v1676573583/Banco%20de%20images/PlazadeToros_30112022_RoyVega_16_ffuequ.jpg);">
            <h1 class="ms900 uppercase">Diseña tu viaje</h1>
            <div class="dtv-home__categories">
                <div class="container">
                    <h2>¿QUÉ PODRÍA INTERESARTE EN TU VISITA?</h2>
                    <ul class="dtv-home__categories-list">
        
                    </ul>
                </div>
            </div>
            <div class="filter-data">
                <span><label for="" class="ms700">¿CUÁNTOS DÍAS ESTARÁS EN BOGOTÁ?</label><select name="time" id="time">
                    <option value="">Selecciona</option>
                    <option value="1">1 Día</option>
                    <option value="2">2 Días</option>
                    <option value="3">3 Días</option>
                    <option value="4">4 Días</option>
                    <option value="5">Más de una semana</option>
                </select></span>
                <span><label for="" class="ms700">¿CON QUIÉN VIAJAS?</label><select name="para" id="para"><option value="">Selecciona</option></select></span>
                <button type="submit" class="btn uppercase ms900">DISEÑA TU VIAJE</button>
            </div>
        </div>
        <div id="reveal">
            <div class="info-user">
                <div class="content container">
                    <div class="left">
                        <h3 class="ms700">DISEÑA TU VIAJE</h3>
                        <h4 class="ms900">Bogotá tiene un itinerario preparado para ti</h4>
                    </div>
                    <div class="right">
                        <div class="time">
                            <small class="ms900">TIEMPO DE ESTADÍA</small>
                            <p class="ms700">+ de 1 semana</p>
                        </div>
                        <div class="tipoviaje">
                            <small class="ms900">TIPO DE VIAJE</small>
                            <p class="ms700">Viajo en pareja</p>
                        </div>
                        <div class="interes">
                            <small class="ms900">INTERESES</small>
                            <p class="ms700">Restaurantes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imperdibles">
                <h5 class="ms700 uppercase">ESTOS SON LOS ATRACTIVOS QUE TE RECOMENDAMOS PARA TU VIAJE</h5>
                <ul class="grid-imperdibles">
    
                </ul>
            </div>
            <section class="start">
                <div class="container">
                    <h3 class="ms700">¡Conoce las ofertas y adquiere tu</h3>
                    <h4 class="ms900">TARJETA CIUDAD</h4>
                    <h5 class="ms700">antes de empezar tu viaje!</h5>
                </div>
                <a href="/<?=$lang?>/tarjeta-ciudad" class="btn ms900">¡Adquiérela aquí!</a>
            </section>
        </div>
    </form>
</main>
<? include 'includes/imports.php'?>