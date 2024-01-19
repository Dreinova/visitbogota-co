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
                echo '<h2 class="uppercase">' . $product->title . '</h2>';
            } else if ($_GET['zoneID']) {
                echo '<h3 class="uppercase">' . $b->generalInfo->field_titulo_bogota_por_zonas . '</h3>';
                echo '<h2 class="uppercase">' . $singleZone->title . '</h2>';
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
                <?php
                if ($_GET['productID']) {
                    echo '<h3 class="uppercase">' . $category->name . '</h3>';
                } else if ($_GET['zoneID']) {
                    echo '<h3 class="uppercase">' . $b->generalInfo->field_titulo_bogota_por_zonas . '</h3>';
                } else if ($_GET['planID']) {
                    echo '<h3 class="uppercase">' . $singlePara->title . '</h3>';
                }
                ?>
                <!-- Etiqueta para el select -->
                <label for="myDropdown">Selecciona una opción:</label>
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
    <?php
    include '../templates/filters_mobile.php';

    ?>
    <?php if ($isMobile) { ?>
        <div class="curveMobile"></div>
    <?php } ?>
<? include '../templates/ofertasRel.php'?>

</main>
<?php include 'includes/imports.php'; ?>