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
      <h2><img src="images/descubre_icon.svg" alt="descubre">Descubre bogotá</h2>
      <h3>Bogotá Natural</h3>
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
      <h3>Bogotá Cultural</h3>
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
    <section class="exp container">
      <h2><img src="images/exp_tur.svg" alt="descubre">Experiencias Turísticas</h2>
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
      <h4><img src="images/planifica.svg" alt="descubre">Planifica tu viaje</h4>
      <div class="planifica-content">
        <div class="info-util">
          <h5><img src="images/infoUtil.svg" alt="infoUtil">Información Útil</h5>
          <ul>
            <li>
              <a href="/<?=$lang?>/preguntas-frecuentes">- Información general</a>
            </li>
            <li>
              <a href="/<?=$lang?>/preguntas-frecuentes">- ¿Cómo moverse en Bogotá?</a>
            </li>
            <li>
              <a href="/<?=$lang?>/preguntas-frecuentes">- Descargables - Guías, Tips, Catálogos...</a>
            </li>
          </ul>
        </div>
        <div class="catalogos">
          <a href="/es/restaurantes"><img src="images/restaurantes.svg" alt="restaurantes">Restaurantes</a>
          <a href="/es/hoteles"><img src="images/hospedajes.svg" alt="hospedajes">Hospedajes</a>
        </div>
      </div>

    </section>
    <section class="mice container">
      <h4><img src="images/mice.svg" alt="descubre">Turismo MICE en Bogotá</h4>
      <div class="mice-articles">
        <article>
          <a href="/<?=$lang?>/mice/por-que-bogota">
            <img src="images/porqueBog.png" alt="¿Porqué Bogotá?">
            <span>¿Porqué Bogotá?</span>
          </a>
        </article>
        <article>
          <a href="/<?=$lang?>/mice/locaciones">
            <img src="images/lugar.png" alt="Encuentra un lugar para tu evento">
            <span>Encuentra un lugar para tu evento</span>
          </a>
        </article>
        <article>
          <a href="/<?=$lang?>/mice/proveedores">
            <img src="images/proveedores.png" alt="Encuentra proveedores para tu evento">
            <span>Encuentra proveedores para tu evento</span>
          </a>
        </article>
      </div>
    </section>
  </div>
  <section class="blog container">
    <h2><img src="images/blog.svg" alt="descubre">Blog y Multimedia</h2>
    <h3>Publicaciones recientes</h3>
    <div class="container grid-blogs"></div>
  </section>
</main>

<? include 'includes/imports.php'?>

</body>

</html>