<?php $bodyClass="mice-home"; include "includes/head.php"; ?>
    <div id="mobile"></div>
    <main class="graybg">
      <section class="banner">
        <video
          autobuffer
          autoplay
          muted
          poster=""
          preload="auto"
          loop
          src="<?= "https://bogotadc.travel".$mice->miceinfo->field_cover; ?>"
        >
          <source
            src="<?= "https://bogotadc.travel".$mice->miceinfo->field_cover; ?>"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
        <ul class="banner-links">
          <li class="basic_bg"
            style="
              background-image: url(<?= "https://bogotadc.travel".$mice->miceinfo->field_img1homemice;?>);
            "
          >
            <a href="/<?=$lang?>/mice/por-que-bogota" class="uppercase"><?= $mice->miceinfo->field_mice_ui_27; ?></a>
          </li>
          <li class="basic_bg"
            style="
              background-image: url(<?= "https://bogotadc.travel".$mice->miceinfo->field_img2homemice;?>);
            "
          >
            <a href="/<?=$lang?>/mice/locaciones" class="uppercase"><?= $mice->miceinfo->field_mice_ui_1; ?></a>
          </li>
          <li class="basic_bg"
            style="
              background-image: url(<?= "https://bogotadc.travel".$mice->miceinfo->field_img3homemice;?>);
            "
          >
            <a href="/<?=$lang?>/mice/proveedores" class="uppercase"><?= $mice->miceinfo->field_mice_ui_28; ?></a>
          </li>
        </ul>
      </section>
      <section class="known loading">
        <h2><?= $mice->miceinfo->field_mice_ui_11; ?></h2>
        <div class="loader"></div>

                <div class="container ">
                        <div class="content flex"></div>
                 </div>
      </section>
      <section class="success-stories loading">
        <h2><?= $mice->miceinfo->field_mice_ui_16; ?></h2>
        <div class="loader"></div>
        <div class="container">
        <div class="content flex"></div>

            </div>
        </div>                  
      </section>
    </main>
  <? include 'includes/imports.php'?>
