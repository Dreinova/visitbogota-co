<?php 
    $bodyClass = "home"; 
    include 'includes/header.php';
?>

<body class="<?=$bodyClass?>">
    <header>
        <div class="container">
            <h1><?=$landing->field_fechas_del_evento?></h1>
            <img src="img/fondo_header.png" alt="header">
        </div>
    </header>
    <div class="banner" style="background-image: url(https://www.idt.gov.co<?=$landing->field_banner_1?>);">
        <div class="container">
            <img src="img/logo.png" alt="logo">
            <div class="txt">
                <?=$landing->field_texto_banner?>
            </div>
            <a href="<?=$landing->field_link_inscripciones?>" class="btnInsc"><img src="img/boton.png" alt="boton"></a>
        </div>
    </div>
    <div class="links container">
        <?php 
        $images = explode(", ", $landing->field_imagenes_links);
        for ($i=0; $i < count( $images ); $i++) { 
            echo '<a href="interna_'.($i + 1).'.php"><img src="https://www.idt.gov.co'.$images[$i].'" alt="1.png"></a>';
        }
        ?>
    </div>
    <section class="splide" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="img/todo.jpg" alt="todo" /></li>
                <li class="splide__slide"><img src="img/slide1.jpg" alt="todo" /></li>
                <li class="splide__slide"><img src="img/slide2.jpg" alt="todo" /></li>
            </ul>
        </div>
    </section>
    <section class="food" style="background-image: url(img/food.png);">
        <video src="ajiaco_1.mp4" autobuffer autoplay muted preload="auto" loop controls></video>
    </section>
    <section class="map">
        <h3>Restaurantes inscritos</h3>
        <a href="<?=$landing->field_link_mapa?>">
            <img src="img/map.png" alt="map">
        </a>
    </section>
    <footer>
        <img src="img/logos.png" alt="logos">
    </footer>
    <?php include 'includes/footer.php' ?>