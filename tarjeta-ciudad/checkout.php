<?php 
$bodyClass = 'tc-checkout';
include "includes/head.php";
?>
<main data-tcoffers="<?=str_replace(' ', '', $card[0]->field_tcoffers);?>">
    <div class="container">
        <form action="">
            <span>
                <label for="">Tu nombre</label>
                <input type="text">
            </span>
            <span>
                <label for="">Tu Correo</label>
                <input type="text">
            </span>
            <span>
                <label for="">Tu número telefónico</label>
                <input type="tel" name="phone" id="phone">
            </span>
            <span>
                <label for="">Tipo de documento</label>
                <div class="c-select">
                    <select name="" id="">
                        <option value=""></option>
                        <option>Cédula de Ciudadanía</option>
                        <option>Cédula de Extranjería</option>
                        <option>Pasaporte</option>
                    </select>
                </div>
            </span>
            <span>
                <label for="">Número de documento</label>
                <input type="text">
            </span>
            <span>
                <label for="">País</label>
                <input type="text">
            </span>
            <span>
                <label for="">Fechas estimadas de tu viaje</label>
                <div class="flex">
                    <span>
                        <label for="">Desde:</label>
                        <input type="date">
                    </span>
                    <span>
                        <label for="">Hasta:</label>
                        <input type="date">
                    </span>
                </div>
            </span>
        </form>
        <div class="right">
            <img src="/tarjeta-ciudad/img/logo.svg" alt="logo">
            <div class="resumen">
                <div class="resumen-content">
                    <div class="resumen-item" data-quantity="1" data-unit-price="150000">
                        <div class="flex">
                            <h3>Plan Bogotá card</h3>
                        </div>
                        <h4 class="unit-price">COP $150.000</h4>
                    </div>

                </div>
                <a href="/<?=$lang?>/tarjeta-ciudad/finalizar-compra" class="payCart ms900">FINALIZAR COMPRA</a>
            </div>
        </div>
    </div>
</main>
<? include 'includes/imports.php'?>
</body>

</html>