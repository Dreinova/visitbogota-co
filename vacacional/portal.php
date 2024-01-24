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
                <h3><img src="images/lets-icons_filter.svg" alt="lets-icons_filter"><?=$lang == "es" ? "Filtros" : "Filters"?></h3>
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
    </section>
    <?php if($lang == "es"){?>
      <section class="exp container">
        <h2><img src="images/exp_tur.svg" alt="descubre">Experiencias Turísticas</h2>
        <div class="exp-content">
          <h3>Experiencias turísticas que te pueden interesar</h3>
          <ul class="grid-experiencias">
          <?php 
              $pbInfo = $vacacional->getInfoGnrlPB();
              $plans = $vacacional->getRecommendPlans($pbInfo->field_ofertas_recomendadas); 
              for ($i=0; $i < 3; $i++) { $plan = $plans[$i]; 
          ?>
              <li>
                <a href="/<?=$lang?>/experiencias-turisticas/plan/<?=$vacacional->get_alias($plan->title)?>-<?=$plan->nid?>"
                  class="plansSplide__item">
                  <div class="discount ms900">
                    <svg width="296" height="52" viewBox="0 0 296 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5C0 2.23858 2.23858 0 5 0H290.587C293.842 0 296.23 3.06214 295.436 6.2196L290.767 24.7804C290.566 25.581 290.566 26.419 290.767 27.2196L295.436 45.7804C296.23 48.9379 293.842 52 290.587 52H5C2.23858 52 0 49.7614 0 47V5Z" fill="#E50728"/><path d="M58.8991 23.3351L44.6491 9.08508C44.0791 8.51508 43.2875 8.16675 42.4166 8.16675H31.3333C29.5916 8.16675 28.1666 9.59175 28.1666 11.3334V22.4167C28.1666 23.2876 28.515 24.0792 29.1008 24.6651L43.3508 38.9151C43.9208 39.4851 44.7125 39.8334 45.5833 39.8334C46.4541 39.8334 47.2458 39.4851 47.8158 38.8992L58.8991 27.8159C59.485 27.2459 59.8333 26.4542 59.8333 25.5834C59.8333 24.7126 59.4691 23.9051 58.8991 23.3351ZM45.5833 36.6826L31.3333 22.4167V11.3334H42.4166V11.3176L56.6666 25.5676L45.5833 36.6826Z" fill="white"/><path d="M35.2916 17.6667C36.6033 17.6667 37.6666 16.6034 37.6666 15.2917C37.6666 13.9801 36.6033 12.9167 35.2916 12.9167C33.9799 12.9167 32.9166 13.9801 32.9166 15.2917C32.9166 16.6034 33.9799 17.6667 35.2916 17.6667Z" fill="white"/></svg>
                    <span>
                      <?= $plan->field_percent?>% <small class="ms500">DCTO</small>
                    </span>
                    </div>
                  <div class="image">
                    <img src="https://files.visitbogota.co<?= $plan->field_pb_oferta_img_listado?>" alt="<?= $plan->title?>" />
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
    <?php }?>
    <?php include '../templates/filters_mobile.php'; ?>


</main>
<?php include 'includes/imports.php'; ?>