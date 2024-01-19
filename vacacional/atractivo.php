<?php 
    $bodyClass = 'interna_atractivo';
    include "includes/head.php";
    $lastblogs = $vacacional->getLastBlogs();
    $placeID = $_GET['placeID'];
    $place = $b->singlePlace($placeID);
    $place = $place[0];
    $placeCords = explode(',',$place->field_location);
?>

<main id="mainInternPlace" class="backLinkN <?=($place->field_inmaterial=="1") ? 'inmaterial':''?>" data-productid="<?=$_GET['productID']?>" data-productname="<?=$_GET['productname']?>" data-placeid="<?=$placeID?>" data-placecoords="<?=$place->field_location?>" data-placezone="<?=$place->field_zone_rel?>">
<div class="container intro">
<a href="" class="wait isabacklink"><img src="images/arrow_back.svg" alt="back page"></a>
<h1 class="uppercase"><?=$place->title?></h1>
<ul class="details">
    
    <?php if($place->field_address) { ?>
        <li><img src="../img/address.svg" alt="address"><div class="fxcol">
        <div class="me" style="display:none;"><span>A menos de 20 km.</span></div> 
        <span><?=$place->field_address?></span>        
        </div></li>
    <?php } ?>
    <?php if($place->field_phone){ ?>
        <li><img src="../img/tel.svg" alt="tel"><span>Tel: <?=$place->field_phone?></span></li>
    <?php } ?>
    <?php if($place->field_email){ ?>
        <li><img src="../img/email.svg" alt="email"><span><?=$place->field_email?></span></li>
    <?php } ?>
    <?php if($place->field_horarios){ ?>
        <li><img src="../img/clock.svg" alt="email"><span><?=$place->field_horarios?></span></li>
    <?php } ?>
    <?php if($place->field_link_info){ ?>
        <li><img src="../img/web.svg" alt="email"><a href="<?=$place->field_link_info?>"><span>Más información aquí</span></a></li>
    <?php } ?>
</ul>
</div>
<?php 
$galItems = explode(",", $place->field_galery);
if($galItems[0] != ''){
?>
<ul class="gallery-grid">
    <?php 
    for ($i = 0; $i < count($galItems); $i++) {
        $galItem = $galItems[$i];
        ?>
        <li class="gallery-grid__item"><a data-fancybox="gallery" data-src="<?=$galItem?>"><img src="<?=$galItem?>" alt="<?=$galItem?>"></a></li>
        <?php 
        // Agregar una condición para repetir la cuadrícula cada 6 elementos
        if (($i + 1) % 6 == 0 && $i != count($galItems) - 1) {
            ?>
            </ul>
            <ul class="gallery-grid">
            <?php
        }
    }
    ?>
</ul>
<?php } ?>
    <div class="descripton">
        <div class="txt" data-aos="fade-up">
            <?=$place->body?>
            <a href="javascript:readAll();" class="readMore uppercase">Seguir leyendo</a>
           
        </div>
        <a href="http://maps.google.com/maps?q=<?=$place->field_location?>" class="map" target="_blank" rel="noopener">
                <div class="map_lupa"><img src="images/lupa_blue.svg" alt="lupa"><small><?=$b->generalInfo->field_texto_como_llegar?></small></div>
                <img src="images/map.jpg" alt="map">
            </a>
    </div>
    <section class="recent-blogs">
      <h2 class="uppercase ms700">ÚLTIMAS ENTRADAS DEL BLOG</h2>
      <div class="container grid-blogs"></div>
      <a href="" class="more uppercase">VER MÁS ARTÍCULOS</a>
    </section>
    <?php include '../templates/ofertasRel.php'; ?>
</main>
<? include 'includes/imports.php'?>