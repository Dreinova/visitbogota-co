<?php
$bodyClass = 'informacion_util';
include "includes/head.php";
$catInfo = $b->tripinfoCats('cat_help_info');
$signlang = $b->get_signlang();
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

function filter_callback($element) {
    if (isset($element->field_langfile) && str_contains( $element->field_langfile,".mp4")) {
      return TRUE;
    }
    return FALSE;
  }
  
  $arr = array_filter($signlang, 'filter_callback');
?>
<main>
    <section class="header-<?=$bodyClass?>">
        <h1><img src="images/info.svg" alt="info">
            <?= $b->generalInfo->field_info_txt ?>
        </h1>
    </section>
    <div class="container tooltip fade" data-signid="2027">
        <?php
        $customOrder = array("3", "1", "2");
        function cmp($a, $b) {
            global $customOrder;
            $posA = array_search($a->tid, $customOrder);
            $posB = array_search($b->tid, $customOrder);
            return $posA - $posB;
        }
        usort($catInfo, "cmp");
        for ($i = 0; $i < count($catInfo); $i++) {
            $tripInfo = $b->tripinfo($catInfo[$i]->tid);
            if (count($tripInfo) > 0) {
                echo "<h2 class='title'>" . $catInfo[$i]->name . "</h2>";
                echo "
                    <section class='utilSlideContainer'>
                        <ul class='utilSlide'>";
                for ($a = 0; $a < count($tripInfo); $a++) {
                    echo "
                            <li>
                                <a href='javascript:utilBoxes(\"" . $tripInfo[$a]->nid . "\");'>
                                    <div class='img'><img loading='lazy' data-src='" . ($tripInfo[$a]->field_image ? $urlGlobal . $tripInfo[$a]->field_image : 'img/noimg.png') . "' alt='bogota' class='zone_img lazyload' src='https://picsum.photos/20/20'></div>";
                    if ($tripInfo[$a]->field_address) {
                        echo "<span class='name uppercase'>" . $tripInfo[$a]->title . "<small class='dir uppercase'>" . $tripInfo[$a]->field_address . "</small></span>";
                    } else {
                        echo "<span class='name uppercase'>" . $tripInfo[$a]->title . "</span>";
                    }
                    echo "</a></li>";
                }
                echo "</ul>
                    </section>";
            }
        }
        ?>
        <h2 class='title'>Recursos lengua de señas</h2>
        <section class='utilSlideContainer' id="lsc">
            <ul class='utilSlide'>
                <?php
        for ($a = 0; $a < count($arr); $a++) {
            echo "<li><a data-fancybox href='".$arr[$a]->field_langfile."'><div class='img'><img loading='lazy' data-src='" . ($arr[$a]->field_imagen ? $urlGlobal . $arr[$a]->field_imagen : 'img/noimg.png') . "' alt='bogota' class='zone_img lazyload' src='https://picsum.photos/20/20'></div>";
            echo "<span class='name uppercase'>" . $arr[$a]->title . "</span></a></li>";
        }
        ?>
            </ul>
        </section>
        <?php if ($isMobile) { ?>
        <div class="linksMobile">
            <a href="javascript:utilBoxes2('apps');" class="content">
                <?= $b->generalInfo->field_texto_boton_app_movil ?>
            </a>
            <a href="javascript:utilBoxes('72');" class="content">Recorridos gratuitos</a>
            <!-- <a href="javascript:utilBoxes('id5');" class="content">Directorio de Operadores Turísticos</a> -->
        </div>
        <?php } else { ?>
        <div class="links">
            <div class="links_item">

                <a href="javascript:utilBoxes2('apps','<?= $b->generalInfo->field_playstore ?>', '<?= $b->generalInfo->field_appstore ?>');"
                    class="content">
                    <img loading="lazy"
                        data-src="<?= $urlGlobal ?><?= $b->generalInfo->field_fondo_app ? $b->generalInfo->field_fondo_app : 'img/noimg.png' ?>"
                        alt="imagen_alt" class="links_item_img lazyload" src="https://picsum.photos/20/20">
                    <h3 class="links_item_title">
                        <?= $b->generalInfo->field_texto_boton_app_movil ?>
                    </h3>
                </a>
            </div>
            <div class="links_item last_item">
                <a href="javascript:utilBoxes('72');" class="content">
                    <?php $tripInfo = $b->tripinfo($catInfo[1]->tid); ?>
                    <img loading="lazy" data-src="<?= $urlGlobal ?><?= $tripInfo[0]->field_image ?>" alt="imagen_alt"
                        class="links_item_img lazyload" src="https://picsum.photos/20/20">
                    <h4 class="links_item_title">
                        <?= $tripInfo[0]->title ?>
                    </h4>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
    <section class="header-<?=$bodyClass?>">
        <h2><img src="images/pf.svg" alt="info">
            <?php
            switch ($lang) {
                case 'es':
                    echo 'Preguntas Frecuentes';
                    break;
                case 'en':
                    echo 'Frequent questions';
                    break;
                case 'pt':
                    echo 'Perguntas frequentes';
                    break;
            }
            ?>
        </h2>
    </section>
    <div class="faqs-container">
        <section class="faq"></section>
    </div>
</main>
<? include 'includes/imports.php'?>