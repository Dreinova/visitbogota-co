<?php 
$bodyClass = 'home';
include "includes/head.php";
$sliders = $vacacional->getSlidersHome();

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
  <section class="evento container">
    <h2><img src="images/eventos.svg" alt="descubre"><?=$eventos?><a href="/<?=$lang?>/eventos/agenda-general-148" class="wait all"><?=$ver_eventos?></a></h2>
    <div class="container grid-eventos"></div>
  </section>
  <?php if($lang == "es"){?>
    <section class="exp-home container">
      <h2><img src="images/exp_tur.svg" alt="descubre"><?=$experiencias_turisticas?></h2>
      <div class="exp-content">
        <article class="category">
          <div class="tagFlag">
          <svg width="543" height="52" viewBox="0 0 543 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5C0 2.23858 2.23858 0 5 0H537.185C540.834 0 543.254 3.78219 541.725 7.09529L533.967 23.9047C533.353 25.2342 533.353 26.7658 533.967 28.0953L541.725 44.9047C543.254 48.2178 540.834 52 537.185 52H4.99999C2.23856 52 0 49.7614 0 47V5Z" fill="#E50728"/><path d="M29.375 13.75L32 16.375L37.25 11.125M29.375 26L32 28.625L37.25 23.375M29.375 38.25L32 40.875L37.25 35.625M43.375 26H62.625M43.375 38.25H62.625M43.375 13.75H62.625" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span><?=$Porcategoría?></span>
          </div>
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
        <div class="tagFlag">
          <svg width="543" height="52" viewBox="0 0 543 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5C0 2.23858 2.23858 0 5 0H537.185C540.834 0 543.254 3.78219 541.725 7.09529L533.967 23.9047C533.353 25.2342 533.353 26.7658 533.967 28.0953L541.725 44.9047C543.254 48.2178 540.834 52 537.185 52H4.99999C2.23856 52 0 49.7614 0 47V5Z" fill="#E50728"/><path d="M29.375 13.75L32 16.375L37.25 11.125M29.375 26L32 28.625L37.25 23.375M29.375 38.25L32 40.875L37.25 35.625M43.375 26H62.625M43.375 38.25H62.625M43.375 13.75H62.625" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span><?=$Porzona?></span>
          </div>
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
<?php }?>
    <section class="planifica container">
      <h4><img src="images/planifica.svg" alt="descubre"><?=$planifica_tu_viaje?></h4>
      <div class="planifica-content">
        <div class="info-util">
          <h5><img src="images/infoUtil.svg" alt="infoUtil"><?=$informacion_util?></h5>
          <ul>
            <li>
              <a href="/<?=$lang?>/informacion-al-viajero#informacion-general">- <?=$informacion_general?></a>
            </li>
            <li>
              <a href="/<?=$lang?>/informacion-al-viajero#como-moverse-en-bogota">- <?=$como_moverse_en_bogota?></a>
            </li>
            <li>
              <a href="/<?=$lang?>/informacion-al-viajero#descargables">- <?=$descargables?></a>
            </li>
          </ul>
        </div>
        <div class="catalogos">
          <a href="/<?=$lang?>/donde-comer"><img src="images/restaurantes.svg" alt="restaurantes"><?=$restaurantes?></a>
          <a href="/<?=$lang?>/hoteles"><img src="images/hospedajes.svg" alt="hospedajes"><?=$hospedajes?></a>
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
    <h3><?=$publicaciones_recientes?> <a href="/<?=$lang?>/blog" class="wait all"><?=$ver_blog?></a></h3>
    <div class="container grid-blogs"></div>
  </section>
</main>

<? include 'includes/imports.php'?>

</body>

</html>