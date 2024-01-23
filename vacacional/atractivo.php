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
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24" fill="none"><path d="M8 11.4C7.24224 11.4 6.51551 11.0839 5.9797 10.5213C5.44388 9.95871 5.14286 9.19565 5.14286 8.4C5.14286 7.60435 5.44388 6.84129 5.9797 6.27868C6.51551 5.71607 7.24224 5.4 8 5.4C8.75776 5.4 9.48449 5.71607 10.0203 6.27868C10.5561 6.84129 10.8571 7.60435 10.8571 8.4C10.8571 8.79397 10.7832 9.18407 10.6397 9.54805C10.4961 9.91203 10.2856 10.2427 10.0203 10.5213C9.755 10.7999 9.44003 11.0209 9.09338 11.1716C8.74674 11.3224 8.37521 11.4 8 11.4ZM8 0C5.87827 0 3.84344 0.884997 2.34315 2.4603C0.842855 4.03561 0 6.17218 0 8.4C0 14.7 8 24 8 24C8 24 16 14.7 16 8.4C16 6.17218 15.1571 4.03561 13.6569 2.4603C12.1566 0.884997 10.1217 0 8 0Z" fill="#FF7A00"/></svg><div class="fxcol">
        <div class="me" style="display:none;"><span>A menos de 20 km.</span></div> 
        <span><?=$place->field_address?></span>        
        </div></li>
    <?php } ?>
    <?php if($place->field_phone){ ?>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">  <path d="M6.02222 10.6556C7.62222 13.8 10.2 16.3667 13.3444 17.9778L15.7889 15.5333C16.0889 15.2333 16.5333 15.1333 16.9222 15.2667C18.1667 15.6778 19.5111 15.9 20.8889 15.9C21.5 15.9 22 16.4 22 17.0111V20.8889C22 21.5 21.5 22 20.8889 22C10.4556 22 2 13.5444 2 3.11111C2 2.5 2.5 2 3.11111 2H7C7.61111 2 8.11111 2.5 8.11111 3.11111C8.11111 4.5 8.33333 5.83333 8.74444 7.07778C8.86667 7.46667 8.77778 7.9 8.46667 8.21111L6.02222 10.6556Z" fill="#0B9A4D"/></svg><span>Tel: <?=$place->field_phone?></span></li>
    <?php } ?>
    <?php if($place->field_email){ ?>
        <li><span><?=$place->field_email?></span></li>
    <?php } ?>
    <?php if($place->field_horarios){ ?>
        <li><span><?=$place->field_horarios?></span></li>
    <?php } ?>
    <?php if($place->field_link_info){ ?>
        <li><a href="<?=$place->field_link_info?>"><span>Más información aquí</span></a></li>
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
        <li class="gallery-grid__item"><a data-fancybox="gallery" data-src="https://files.visitbogota.co<?=trim($galItem," ")?>"><img src="https://files.visitbogota.co<?=trim($galItem," ")?>" alt="https://files.visitbogota.co<?=trim($galItem," ")?>"></a></li>
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
                <div class="map_lupa"><img src="images/lupa_gray.svg" alt="lupa"><small><?=$b->generalInfo->field_texto_como_llegar?></small></div>
                <img src="images/map.jpg" alt="map">
            </a>
    </div>

    <?php include '../templates/ofertasRel.php'; ?>
</main>
<? include 'includes/imports.php'?>