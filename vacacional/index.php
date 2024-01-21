<?php 
$bodyClass = 'home';
include "includes/head.php";
$sliders = $vacacional->getSlidersHome();
if($lang === "es"){

  // Español
  $descubre_bogota = "Descubre Bogotá";
  $bogota_natural = "Bogotá Natural";
  $bogota_cultural = "Bogotá Cultural";
  $experiencias_turisticas = "Experiencias Turísticas";
  $planifica_tu_viaje = "Planifica tu viaje";
  $informacion_util = "Información Útil";
  $informacion_general = "Información general";
  $como_moverse_en_bogota = "¿Cómo moverse en Bogotá?";
  $descargables = "Descargables - Guías, Tips, Catálogos...";
  $turismo_mice_en_bogota = "Turismo MICE en Bogotá";
  $porque_bogota = "¿Por qué Bogotá?";
  $encuentra_un_lugar_para_tu_evento = "Encuentra un lugar para tu evento";
  $encuentra_proveedores_para_tu_evento = "Encuentra proveedores para tu evento";
  $publicaciones_recientes = "Publicaciones recientes";
}else{
// Inglés
$descubre_bogota = "Discover Bogotá";
$bogota_natural = "Natural Bogotá";
$bogota_cultural = "Cultural Bogotá";
$experiencias_turisticas = "Tourist Experiences";
$planifica_tu_viaje = "Plan Your Trip";
$informacion_util = "Useful Information";
$informacion_general = "General Information";
$como_moverse_en_bogota = "How to Move in Bogotá?";
$descargables = "Downloads - Guides, Tips, Catalogs...";
$turismo_mice_en_bogota = "Tourism MICE in Bogotá";
$porque_bogota = "Why Bogotá?";
$encuentra_un_lugar_para_tu_evento = "Find a Place for Your Event";
$encuentra_proveedores_para_tu_evento = "Find Suppliers for Your Event";
$publicaciones_recientes = "Recent Publications";
}
?>

<main>
  <div class="flexbanner">
    <video autobuffer autoplay muted preload="auto" loop src="video/video.mp4">
      <source src="video/video.mp4" />
    </video>
  </div>
  <div class="bg-dia" style="background-image: url(images/bogo_dia.png);">
    <section class="descubre container">
      <h2><img src="images/descubre_icon.svg" alt="descubre"><?=$descubre_bogota?></h2>
      <h3><?=$bogota_natural?></h3>
      <section class="splide" id="bogota-natural" aria-label="Basic Structure Example">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img src="images/ep_arrow-left-bold.svg" alt="left">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img src="images/ep_arrow-right-bold.svg" alt="right">
          </button>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
          </ul>
        </div>
      </section>
      <h3><?=$bogota_cultural?></h3>
      <section class="splide" id="bogota-cultural" aria-label="Basic Structure Example">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img src="images/ep_arrow-left-bold.svg" alt="left">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img src="images/ep_arrow-right-bold.svg" alt="right">
          </button>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
          </ul>
        </div>
      </section>
    </section>
  </div>
  <div class="bg-noche" style="background-image: url(images/bog_noche.png);">
    <section class="exp-home container">
      <h2><img src="images/exp_tur.svg" alt="descubre"><?=$experiencias_turisticas?></h2>
      <div class="exp-content">
        <article class="category">
          <img src="images/por_cat.svg" alt="Por categoria">
          <section class="splide" id="porcategoria" aria-label="Basic Structure Example">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img src="images/ep_arrow-left-bold.svg" alt="left">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img src="images/ep_arrow-right-bold.svg" alt="right">
          </button>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
          </ul>
        </div>
      </section>
        </article>
        <article class="zone">
          <img src="images/por_zona.svg" alt="Por Zona">
          <section class="splide" id="porzona" aria-label="Basic Structure Example">
        <div class="splide__arrows">
          <button class="splide__arrow splide__arrow--prev">
            <img src="images/ep_arrow-left-bold.svg" alt="left">
          </button>
          <button class="splide__arrow splide__arrow--next">
            <img src="images/ep_arrow-right-bold.svg" alt="right">
          </button>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
          </ul>
        </div>
      </section>
        </article>
      </div>
    </section>
    <section class="planifica container">
      <h4><img src="images/planifica.svg" alt="descubre"><?=$planifica_tu_viaje?></h4>
      <div class="planifica-content">
        <div class="info-util">
          <h5><img src="images/infoUtil.svg" alt="infoUtil"><?=$informacion_util?></h5>
          <ul>
            <li>
              <a href="/<?=$lang?>/preguntas-frecuentes#informacion-general">- <?=$informacion_general?></a>
            </li>
            <li>
              <a href="/<?=$lang?>/preguntas-frecuentes#como-moverse-en-bogota">- <?=$como_moverse_en_bogota?></a>
            </li>
            <li>
              <a href="/<?=$lang?>/preguntas-frecuentes#descargables">- <?=$descargables?></a>
            </li>
          </ul>
        </div>
        <div class="catalogos">
          <a href="/es/restaurantes"><img src="images/restaurantes.svg" alt="restaurantes"><?=$restaurantes?></a>
          <a href="/es/hoteles"><img src="images/hospedajes.svg" alt="hospedajes"><?=$hospedajes?></a>
        </div>
      </div>

    </section>
    <section class="mice container">
      <h4><img src="images/mice.svg" alt="descubre"><?=$turismo_mice_en_bogota?></h4>
      <div class="mice-articles">
        <article>
          <a href="/<?=$lang?>/mice/por-que-bogota">
            <img src="images/porqueBog.png" alt="¿Porqué Bogotá?">
            <span><?=$porque_bogota?></span>
          </a>
        </article>
        <article>
          <a href="/<?=$lang?>/mice/locaciones">
            <img src="images/lugar.png" alt="Encuentra un lugar para tu evento">
            <span><?=$encuentra_un_lugar_para_tu_evento?></span>
          </a>
        </article>
        <article>
          <a href="/<?=$lang?>/mice/proveedores">
            <img src="images/proveedores.png" alt="Encuentra proveedores para tu evento">
            <span><?=$encuentra_proveedores_para_tu_evento?></span>
          </a>
        </article>
      </div>
    </section>
  </div>
  <section class="blog container">
    <h2><img src="images/blog.svg" alt="descubre"><?=$blog_y_multimedia?></h2>
    <h3><?=$publicaciones_recientes?></h3>
    <div class="container grid-blogs"></div>
  </section>
</main>

<? include 'includes/imports.php'?>

</body>

</html>