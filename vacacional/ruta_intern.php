<?php 
$bodyClass = 'ruta_intern';
include "includes/head.php";
$ID = $_GET['id'];
$ruta = $vacacional->getRutasTuristicas($ID);
$ruta = $ruta[0];
?>
<main data-cat="<?=$ruta->field_categor?>" data-rutaid="<?=$ID?>">
    <div class="container">
    <h1 class="uppercase"><img src="images/rutaicon.svg" alt="descubre"><?=$ruta->title?></h1>
    <h2 class="subtitle"><?=$ruta->field_subtitle?></h2>
    <div class="intro">
    <svg width="14" height="14" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 18.94V2.84C0 0.310003 3.05 -0.949997 4.83 0.830003L12.88 8.88C13.99 9.99 13.99 11.78 12.88 12.88L4.83 20.93C3.05 22.71 0 21.45 0 18.93V18.94Z" fill="#E51B2B"/></svg> <?=$ruta->field_intro_blog?>
    </div>
    <?php 
        $galItems = explode(",", $ruta->field_galery);
        $galItemsAlt= explode(",", $ruta->field_galery_1);
        if($galItems[0] != ''){
            $extraClass="";
            if(count($galItems) == 2){
                $extraClass="only2";
            }
            if(count($galItems) == 3){
                $extraClass="only3";
            }
            if(count($galItems) == 5){
                $extraClass="only5";
            }
    ?>
    <ul class="gallery-grid <?=$extraClass?>">
        <?php for ($i = 0; $i < count($galItems); $i++) { $galItem = $galItems[$i]; ?>
            <li class="gallery-grid__item"><a data-fancybox="gallery"  data-caption="<?=trim($galItemsAlt[$i], " ")?>" data-src="https://files.visitbogota.co<?=trim($galItem," ")?>"><img src="https://files.visitbogota.co<?=trim($galItem," ")?>" alt="<?=trim($galItemsAlt[$i], " ")?>"></a></li>
        <?php } ?>
    </ul>
    <div class="info">
    <section class="descripton">
        <h2><svg width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 18.94V2.84C0 0.310003 3.05 -0.949997 4.83 0.830003L12.88 8.88C13.99 9.99 13.99 11.78 12.88 12.88L4.83 20.93C3.05 22.71 0 21.45 0 18.93V18.94Z" fill="#E51B2B"/></svg>Descripción</h2>
        <?=$ruta->body?>
        <?php if($ruta->field_conocer){ ?>
            <h3 class="llegar"><svg width="277" height="52" viewBox="0 0 277 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M273.41 51.35H0V0H273.41C275.68 0 276.99 2.58 275.65 4.41L262.53 22.32C261.07 24.32 261.07 27.03 262.53 29.02L275.65 46.93C276.99 48.76 275.68 51.34 273.41 51.34V51.35Z" fill="#E51B2B"/></svg><span>¿Qué vas a conocer?</span></h3>
            <?=$ruta->field_conocer?>
        <?php } ?>
        </section>
        <section class="llegar">
        <h4><svg width="30" height="52" viewBox="0 0 30 52" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50.89 9.94C51.48 10.04 52.08 10.11 52.67 10.25C57.08 11.28 60.44 15.01 61.05 19.49C61.34 21.62 60.97 23.67 60.27 25.67C59.38 28.19 58.08 30.51 56.59 32.72C54.82 35.35 52.98 37.94 51.17 40.54C51.07 40.68 50.98 40.83 50.87 40.97C50.45 41.54 49.73 41.54 49.32 40.97C48.93 40.42 48.55 39.86 48.17 39.3C46.49 36.86 44.76 34.44 43.13 31.97C41.72 29.83 40.53 27.57 39.74 25.12C38.95 22.68 38.71 20.2 39.54 17.73C40.98 13.48 43.95 10.93 48.36 10.08C48.67 10.02 48.98 9.99 49.3 9.95C49.83 9.95 50.36 9.95 50.9 9.95L50.89 9.94ZM50.09 38.82C50.14 38.76 50.17 38.73 50.19 38.7C51.74 36.48 53.32 34.27 54.84 32.03C56.3 29.87 57.6 27.63 58.49 25.17C59.12 23.44 59.49 21.67 59.23 19.81C58.52 14.63 53.8 11.12 48.64 11.91C43.56 12.69 40.06 17.66 41.03 22.71C41.37 24.47 42.01 26.12 42.81 27.72C44.1 30.29 45.72 32.65 47.37 34.99C48.27 36.26 49.17 37.52 50.09 38.82Z" fill="#E51B2B"/><path d="M50.07 26.53C47.03 26.53 44.56 24.03 44.57 20.98C44.57 17.94 47.07 15.47 50.12 15.48C53.16 15.48 55.63 17.98 55.62 21.03C55.62 24.07 53.12 26.54 50.07 26.53ZM46.41 21C46.41 23.03 48.07 24.69 50.1 24.69C52.11 24.69 53.77 23.03 53.78 21.02C53.78 18.99 52.13 17.32 50.1 17.32C48.07 17.32 46.41 18.98 46.41 21.01V21Z" fill="#E51B2B"/></svg><span>¿Cómo llegar?</span></h4>
        <?=$ruta->field_como_llegar?>
        </section>
        <section class="ir">
        <h4><svg width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 18.94V2.84C0 0.310003 3.05 -0.949997 4.83 0.830003L12.88 8.88C13.99 9.99 13.99 11.78 12.88 12.88L4.83 20.93C3.05 22.71 0 21.45 0 18.93V18.94Z" fill="#E51B2B"/></svg><span>¿Quieres ir?</span></h4>
        <?=$ruta->field_quieres_ir?>
        </section>
        <?php 
        if($ruta->field_duracion_recorrido != '' && $ruta->field_edades != '' && $ruta->field_valor_de_la_entrada){
        ?>
        <section>
            <ul class="details">
                <?php if($ruta->field_duracion_recorrido != '') { ?>
                    <li><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.2026 11.5516C13.2026 10.7616 13.2026 9.96165 13.2026 9.17165C13.2026 8.64165 13.5426 8.27164 14.0226 8.27164C14.5026 8.27164 14.8426 8.64165 14.8426 9.17165C14.8426 10.5916 14.8426 12.0216 14.8426 13.4416C14.8426 13.5716 14.9126 13.7416 15.0126 13.8416C16.4726 15.3216 17.9426 16.7916 19.4226 18.2616C19.6326 18.4716 19.7926 18.6916 19.7626 19.0016C19.7326 19.3116 19.5826 19.5516 19.2926 19.6916C19.0026 19.8316 18.7226 19.7916 18.4626 19.6116C18.3826 19.5516 18.3126 19.4816 18.2426 19.4116C16.6926 17.8616 15.1326 16.3016 13.5726 14.7516C13.3126 14.4916 13.1826 14.2016 13.1826 13.8316C13.2026 13.0716 13.1826 12.3216 13.1826 11.5616L13.2026 11.5516Z" fill="#E51B2B"/><path d="M28.0326 13.1416V14.8916C28.0126 14.9616 27.9926 15.0316 27.9826 15.1016C27.8726 15.8216 27.8026 16.5516 27.6426 17.2616C26.3926 22.6516 21.8626 26.9016 16.4326 27.8216C15.9226 27.9116 15.4126 27.9616 14.8926 28.0316H13.1426C13.0626 28.0116 12.9826 27.9916 12.9026 27.9816C12.3126 27.8916 11.7026 27.8416 11.1226 27.7216C7.99261 27.0516 5.37261 25.4916 3.32261 23.0416C0.492609 19.6416 -0.537391 15.7316 0.262609 11.3816C0.912609 7.88164 2.70261 5.04163 5.53261 2.89163C8.74261 0.44163 12.3726 -0.438357 16.3626 0.201643C19.0226 0.631643 21.3526 1.78163 23.3526 3.58163C25.7526 5.74163 27.2526 8.41164 27.8226 11.6016C27.9126 12.1116 27.9626 12.6316 28.0426 13.1416H28.0326ZM26.3926 14.0216C26.3926 7.20163 20.8326 1.64163 14.0126 1.64163C7.20261 1.64163 1.66261 7.18163 1.64261 14.0016C1.63261 20.8116 7.18261 26.3816 14.0026 26.3916C20.8226 26.3916 26.3826 20.8416 26.3826 14.0216H26.3926Z" fill="#E51B2B"/><path d="M14.8426 4.98164C14.8426 5.25164 14.8426 5.53164 14.8426 5.80164C14.8326 6.27164 14.4726 6.62164 14.0226 6.62164C13.5726 6.62164 13.2126 6.27165 13.2026 5.81165C13.1926 5.26165 13.1926 4.70163 13.2026 4.14163C13.2026 3.68163 13.5826 3.33163 14.0326 3.33163C14.4726 3.33163 14.8226 3.68164 14.8426 4.13164C14.8526 4.41164 14.8426 4.69164 14.8426 4.98164Z" fill="#E51B2B"/><path d="M4.98262 14.8316C4.71262 14.8316 4.43262 14.8316 4.16262 14.8316C3.70262 14.8216 3.34262 14.4616 3.34262 14.0116C3.34262 13.5616 3.69262 13.2016 4.15262 13.1916C4.70262 13.1816 5.26262 13.1816 5.81262 13.1916C6.27262 13.1916 6.62262 13.5716 6.62262 14.0216C6.62262 14.4616 6.27262 14.8116 5.82262 14.8316C5.54262 14.8416 5.26262 14.8316 4.97262 14.8316H4.98262Z" fill="#E51B2B"/><path d="M23.0526 14.8316C22.7826 14.8316 22.5026 14.8316 22.2326 14.8316C21.7726 14.8216 21.4126 14.4616 21.4126 14.0116C21.4126 13.5616 21.7626 13.2016 22.2226 13.1916C22.7726 13.1816 23.3326 13.1816 23.8826 13.1916C24.3426 13.1916 24.6926 13.5716 24.6926 14.0216C24.6926 14.4616 24.3426 14.8116 23.8926 14.8316C23.6126 14.8416 23.3326 14.8316 23.0426 14.8316H23.0526Z" fill="#E51B2B"/><path d="M14.8426 23.0716C14.8426 23.3316 14.8426 23.6016 14.8426 23.8616C14.8326 24.3416 14.4626 24.7016 14.0126 24.6916C13.5626 24.6916 13.2126 24.3316 13.2026 23.8616C13.2026 23.3116 13.2026 22.7716 13.2026 22.2216C13.2026 21.7616 13.5726 21.4016 14.0226 21.4016C14.4726 21.4016 14.8326 21.7516 14.8426 22.2116C14.8426 22.4916 14.8426 22.7716 14.8426 23.0616V23.0716Z" fill="#E51B2B"/><path d="M20.9926 21.8016C20.5326 21.8016 20.1726 21.4416 20.1626 20.9916C20.1626 20.5516 20.5326 20.1716 20.9826 20.1616C21.4326 20.1616 21.8026 20.5216 21.8026 20.9716C21.8026 21.4316 21.4526 21.7916 20.9926 21.7916V21.8016Z" fill="#E51B2B"/><path d="M6.24261 7.03164C6.24261 6.57164 6.60261 6.22164 7.07261 6.23164C7.53261 6.23164 7.89261 6.61164 7.88261 7.06164C7.88261 7.51164 7.49261 7.88164 7.05261 7.87164C6.60261 7.87164 6.24261 7.49164 6.25261 7.04164L6.24261 7.03164Z" fill="#E51B2B"/><path d="M21.8026 7.05164C21.8026 7.50164 21.4326 7.87164 20.9826 7.87164C20.5426 7.87164 20.1626 7.48164 20.1626 7.05164C20.1626 6.60164 20.5326 6.24164 20.9826 6.24164C21.4426 6.24164 21.7926 6.60165 21.7926 7.06165L21.8026 7.05164Z" fill="#E51B2B"/><path d="M7.05261 21.8016C6.60261 21.8016 6.2326 21.4416 6.2326 20.9916C6.2326 20.5416 6.6026 20.1616 7.0426 20.1616C7.4826 20.1616 7.8626 20.5416 7.8726 20.9816C7.8726 21.4316 7.50261 21.8016 7.05261 21.8016Z" fill="#E51B2B"/></svg><?=$ruta->field_duracion_recorrido?></li>
                <?php } ?>
                <?php if($ruta->field_edades != '') { ?>
                    <li><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.61 3.86375C22.57 2.81375 21.52 1.76375 20.47 0.723755C19.5 -0.246245 18.11 -0.236245 17.15 0.723755C12.26 5.66375 7.37 10.5937 2.48 15.5437C2.35 15.6737 2.25 15.8538 2.2 16.0238C1.65 17.9238 1.11 19.8238 0.57 21.7238C0.39 22.3638 0.19 22.9937 0 23.6237V23.9538C0.14 24.0838 0.29 24.2038 0.43 24.3338H0.72C0.79 24.3038 0.86 24.2738 0.94 24.2438C3.39 23.5438 5.84 22.8438 8.29 22.1338C8.47 22.0838 8.66 21.9838 8.8 21.8538C13.75 16.9638 18.69 12.0638 23.62 7.16376C23.78 7.01376 23.93 6.83375 24.04 6.64375C24.59 5.68375 24.44 4.65375 23.64 3.84375L23.61 3.86375ZM8.85 20.2538L7.75 21.1537C7.14 21.3237 6.54 21.5038 5.94 21.6738C5.7 21.7438 5.44 21.8737 5.22 21.8737L1.36 22.9738L2.46 19.1038C2.46 19.1038 2.46 19.0637 2.47 19.0437C2.53 18.8537 2.58 18.6637 2.63 18.4837L3.12 16.7637C3.15 16.6737 3.18 16.6137 3.25 16.5938L4.08 15.4837C6.52 13.0237 8.94 10.5838 11.34 8.16376L12.6 6.89375C13.33 6.15375 14.06 5.42375 14.79 4.68375L17.64 7.52376C18.31 8.18376 18.97 8.85375 19.65 9.53375C16.07 13.0838 12.48 16.6438 8.83 20.2538H8.85ZM22.79 6.43375C22.03 7.20375 21.29 7.97376 20.53 8.74376C18.87 7.08376 17.26 5.47376 15.63 3.85376C15.67 3.81376 15.72 3.75375 15.77 3.70375C16.48 2.98375 17.2 2.26375 17.91 1.54375C18.48 0.973747 19.12 0.973747 19.7 1.54375C20.73 2.57375 21.76 3.60376 22.79 4.63376C23.38 5.22376 23.38 5.83375 22.79 6.43375Z" fill="#E51B2B"/></svg><?=$ruta->field_edades?></li>
                <?php } ?>
                <?php if(!$ruta->field_valor_de_la_entrada || $ruta->field_valor_de_la_entrada == 0) { ?>
                    <li><?=$ruta->field_valor_de_la_entrada?></li>
                <?php } ?>
            </ul>
            <!-- <div class="libre">Entrada libre</div> -->
        </section>
        <?php 
        }
        ?>
       
       <section class="mapRuta">
        <?php if(isset($ruta->field_iframe_google_maps) && $ruta->field_iframe_google_maps != ""){ ?>
            <?=$ruta->field_iframe_google_maps?>
        <?php }else{ ?>
            <img src="https://files.visitbogota.co<?=$ruta->field_imagen_ruta?>" alt="https://files.visitbogota.co<?=$ruta->field_imagen_ruta?>">
        <?php } ?>
       </section>
    </div>
    <?php } ?>
    </div>
    <section class="listRTRel container">
        <h4>Otras rutas que te pueden interesar</h4>
    </section>
</main>

<? include 'includes/imports.php'?>

</body>

</html>