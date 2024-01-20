<?php
$bodyClass = 'portal';
include 'includes/head.php';
$category;
if ($_GET['productID']) {
    $product = $b->products(0, $_GET['productID']);
    $subProducts = $b->subproducts($_GET['productID']);
    $catName = $b->tripinfoCats('product');
    for ($i = 0; $i < count($catName); $i++) {
        if ($catName[$i]->tid == $product->field_cat_rel) {
            $category = $catName[$i];
        }
    }
    $coverImage = $product->field_cover_image;
}
if ($_GET['planID']) {
    $singlePara = $b->plans($_GET['planID']);
    $coverImage = $singlePara->field_cover_image;
}
if ($_GET['zoneID']) {
    $singleZone = $b->zones($_GET['zoneID']);
    $coverImage = $singleZone->field_cover_image;
}
?>
<script>
    var subproductsArray = <?php echo json_encode($b->allsubproducts()); ?>;
</script>
<main data-productid="<?= $_GET['productID'] ?>" id="mainPortal" data-planid="<?= $_GET['planID'] ?>" data-zoneid="<?= $_GET['zoneID'] ?>" data-productname="<?= $product->title ?>">
    <section class="banner" style="background-image:url(<?= $coverImage ? $urlGlobal . $coverImage : 'img/noimg.png' ?> );">
    <div class="container">
        <div class="intro-txt">
            <?php
            if ($_GET['productID']) {
                echo '<h3 class="uppercase">' . $category->name . '</h3>';
                echo '<h2 class="uppercase"><img src="images/bog_natural.svg" alt="nature" />' . $product->title . '</h2>';
            } else if ($_GET['zoneID']) {
                echo '<h3 class="uppercase">' . $b->generalInfo->field_titulo_bogota_por_zonas . '</h3>';
                echo '<h2 class="uppercase"><img  src="images/bog_natural.svg" alt="nature"/>>' . $singleZone->title . '</h2>';
            } else if ($_GET['planID']) {
                echo '<h3 class="uppercase">' . $singlePara->title . '</h3>';
                echo '<h2 class="uppercase">' . $b->generalInfo->field_dlaciudad . '</h2>';
            }
            ?>
            <?php
            if ($singleZone) {
            ?>
                <?= $singleZone->body ?>
            <?php
            } else {
            ?>
                <?= $product->body ?>
            <?php
            }
            ?>
        </div>
    </div>
    </section>

    <section class="portal_list">
        <div class="left">
            <form action="set/bla.php">
                <div class="container-switch">
                    <label class="switch" for="closeMe">
                        <input type="checkbox" id="closeMe">
                        <span class="slider round"></span>
                    </label>
                    <small><?= $b->generalInfo->field_cerca_txt ?></small>    
                </div>
                <h3><img src="images/lets-icons_filter.svg" alt="lets-icons_filter">Filtros</h3>
                <div class="custom-select">
                    <select id="myDropdown"></select>
                </div>

                <div class="filterContainer">
                    <div class="filters"></div>
                </div>
            </form>
        </div>
        <div class="right">
            <div class="grid-atractivos"></div>
        </div>
    </section>
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
    </section>
    <section class="exp container">
      <h2><img src="images/exp_tur.svg" alt="descubre">Experiencias Turísticas</h2>
      <div class="exp-content">
        <h3>Experiencias turísticas que te pueden interesar</h3>
        <ul class="grid-experiencias">
        <?php 
                  $pbInfo = $vacacional->getInfoGnrlPB();
                  $plans = $vacacional->getRecommendPlans($pbInfo->field_ofertas_recomendadas); 
                  for ($i=0; $i < 3; $i++) { $plan = $plans[$i]; ?>
            <li>
              <a href="/<?=$lang?><?=$project_base?>plan/<?=$vacacional->get_alias($plan->title)?>-<?=$plan->nid?>"
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
    <?php include '../templates/filters_mobile.php'; ?>


</main>
<?php include 'includes/imports.php'; ?>