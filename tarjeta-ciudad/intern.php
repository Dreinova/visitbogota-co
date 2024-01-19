<?php 
$bodyClass = 'tc-intern';
include "includes/head.php";
$card = $tarjetaCiudad->getCards($_GET["id"]);

?>
<main data-tcoffers="<?=str_replace(' ', '', $card[0]->field_tcoffers);?>">
    <div class="container">
        <div class="info">
            <img src="img/logo.svg" alt="logo" class="logo">
            <div class="right">
                <h1 class="ms700"><?=$card[0]->title?></h1>
                <?=$card[0]->body?>
                <a href="javascript:document.getElementById('cart').classList.toggle('active');" class="btn uppercase ms900">Agregar a mi viaje (COP $<?=number_format($card[0]->field_precio_cop,0,",",".")?>)</a>
            </div>
        </div>
    </div>
    <div class="tc-plans">
        <div class="container">
            <h2 class="ms700 uppercase">¿Qué incluye?</h2>
            <ul>
                <li>
                    <img src="" alt="">
                    <div class="txt">
                        <h3>Entrada atractivo 1</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus molestias iusto nihil ut libero. Earum ut ipsam quidem qui quis ipsum officiis, provident similique dolor sit eveniet ab tenetur sint?</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <section class="paymethods">
        <h6 class="ms700">RECIBIMOS TODOS LOS MEDIOS DE PAGO</h6>
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