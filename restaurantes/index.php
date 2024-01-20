<?php
$bodyClass = 'hotelesnew';
include "includes/head.php"; ?>
<section class="banner" style="background-image:url(https://bogotadc.travel/drpl/sites/default/files/2023-08/d68ff673-2fb0-4820-995f-7092f7920053.JPG );">
    <div class="container">
        <div class="intro-txt">
            <h3 class="uppercase">¿Dónde comer en Bogotá?</h3>
            <div>
                <h2 class="uppercase"><img src="../img/Restaurantes_Flag.svg" alt="restaurantes">Restaurantes</h2>
                <hr class="w_80">
                <hr class="dashed">
                <hr class="w_15">
            </div>
            <p>Ya sea que esté buscando una experiencia gastronómica tradicional colombiana, una cocina internacional de alta gama o algo intermedio, seguro que encontrará el restaurante perfecto en Bogotá.<br>
                &nbsp;</p>
        </div>
    </div>
</section>
<div class="container">
    <div class="opciones">
        <ul>
            <li><a href="/<?=$lang?>/restaurantes" class="opcion"><img src="../img/Hospedajes-icon.svg" alt="hospedajes">Hospedajes</a></li>
            <li><a href="#" class="opcion active"><img src="../img/Restaurantes_icon.svg" alt="restaurantes">Restaurantes</a></li>
        </ul>
    </div>
    <div class="card-list providers graybg font1">
        <div class="column flex w_100">
            <aside class="column w_25 filters graybg m_outter">
                <button class="fw500" id="resetfilters">Limpiar filtros</button>
                <h3 class="fw900">
                    <img src="../vacacional/images/lets-icons_filter.svg" alt="filtros">
                    Filtros
                </h3>
                <div class="filtergroup checkboxes color open" data-filterid="categoria_restaurantes">
                    <h4 class="fw700"><span class="arrow"></span>Categorías</h4>
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
                    <h4 class="fw700"><span class="arrow"></span>Zona Gastronómica</h4>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
                <!-- <div class="filtergroup checkboxes color open" data-filterid="rangos_de_precio">
                        <h4 class="fw700"><span class="arrow"></span>Rangos de precio</h4>
                        <div class="loader"></div>
                        <div class="content">
                        </div>
                    </div> -->
            </aside>
            <section class="cards flex loading m_outter">
                <!-- <h1 class="fw700 title">
                    <img src="/../vacacional/images/restaurantes.svg" alt="restaurantes">
                    Dónde Comer En Bogotá</h1> -->

                <hr>
                <div class="loader big"></div>
                <div class="content flex"></div>

            </section>
        </div>
    </div>
</div>
<section class="exp container">
      <h2><img src="../vacacional/images/exp_tur.svg" alt="descubre">Experiencias Turísticas</h2>
      <div class="exp-content">
        <h3>Experiencias turísticas que te pueden interesar</h3>
        <ul class="grid-experiencias">
        <?php 
                  $pbInfo = $mice->getInfoGnrlPB();
                  $plans = $mice->getRecommendPlans($pbInfo->field_ofertas_recomendadas); 
                  for ($i=0; $i < 3; $i++) { $plan = $plans[$i]; ?>
            <li>
              <a href="/<?=$lang?><?=$project_base?>plan/<?=$mice->get_alias($plan->title)?>-<?=$plan->nid?>"
                class="plansSplide__item">
                <!-- <div class="discount ms900">
                    <?= $plan->field_percent?>% <small class="ms500">DCTO</small>
                  </div> -->
                <div class="image">
                  <img src="https://bogotadc.travel<?= $plan->field_pb_oferta_img_listado?>" alt="<?= $plan->title?>" />
                  <div class="prices">
                    <p class="prices-discount ms500">$
                      <?= number_format($plan->field_pa,0,",",".")?>
                    </p>
                    <p class="prices-total ms900">$
                      <?= number_format($plan->field_pd,0,",",".")?>
                    </p>
                  </div>
                </div>
                <div class="info">
                  <strong class="ms900">
                    <?= $plan->title?>
                  </strong>
                  <p class="ms100">
                    <?= $plan->field_pb_oferta_desc_corta?>
                  </p>
                  <small class="ms900 uppercase link"> Ver experiencia </small>
                </div>
              </a>
            </li>
            <?php }?>
        </ul>
      </div>
    </section>
<? include 'includes/imports.php' ?>