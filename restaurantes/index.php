<?php 
$bodyClass = 'hotelesnew';
include "includes/head.php";?>
<div class="card-list providers graybg font1">
    <div class="column flex w_100">
        <aside class="column w_25 filters graybg m_outter">
            <button class="fw500" id="resetfilters">Limpiar filtros</button>
            <h3 class="fw900">Encuentra restaurantes en Bogotá</h3>
            <div class="filtergroup checkboxes color open" data-filterid="categoria_restaurantes">
                <h4 class="fw700"><span class="arrow"></span>Categoría Restaurantes</h4>
                <div class="loader"></div>
                <div class="content">
                    </div>
                </div>
                <div class="filtergroup checkboxes color open" data-filterid="test_zona">
                    <h4 class="fw700"><span class="arrow"></span>Zona de la ciudad</h4>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
                <div class="filtergroup checkboxes color open" data-filterid="zonas_gastronomicas">
                    <h4 class="fw700"><span class="arrow"></span>Zonas Gastronómicas</h4>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
                <div class="filtergroup checkboxes color open" data-filterid="rangos_de_precio">
                    <h4 class="fw700"><span class="arrow"></span>Rangos de precio</h4>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
        </aside>
        <section class="w_75 cards flex loading m_outter">
            <h1 class="fw700 uppercase center title">DÓNDE COMER EN BOGOTÁ</h1>
            <div class="loader big"></div>
            <div class="content flex"></div>

        </section>
    </div>
</div>
<? include 'includes/imports.php'?>