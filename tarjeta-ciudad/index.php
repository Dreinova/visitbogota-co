<?php 
$bodyClass = 'tc-home';
include "includes/head.php";
$infoGnrl = $tarjetaCiudad->generalInfo[0];
?>
    <main>
        <div class="banner">
            <img src="<?=$urlGlobal?><?=$infoGnrl->field_home_img?>" alt="banner">
            <div class="container">
                <?=$infoGnrl->field_texto_banner?>
            </div>
        </div>
        <section class="intro">
            <div class="container">
                <img src="img/logo.svg" alt="logo">
                <?=$infoGnrl->body?>
            </div>
            <a href="" class="btn">ADQUIRE TU BOGOPASS</a>
        </section>
        <section class="cards"></section>
        <section class="start">
            <div class="container">
                <h3 class="ms700"><?=$tarjetaCiudad->palabras[0]?></h3>
                <h4 class="ms900"><?=$tarjetaCiudad->palabras[1]?></h4>
                <h5 class="ms700"><?=$tarjetaCiudad->palabras[2]?></h5>
            </div>
        </section>
        <section class="paymethods">
            <h6 class="ms700"><?=$tarjetaCiudad->palabras[3]?></h6>
            <ul>
                <li><img src="img/visa.png" alt="visa"></li>
                <li><img src="img/mc.png" alt="master card"></li>
                <li><img src="img/ae.png" alt="American Express"></li>
            </ul>
        </section>
    </main>
<? include 'includes/imports.php'?>
</body>
</html>