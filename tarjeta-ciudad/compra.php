<?php 
$bodyClass = 'tc-compra';
include "includes/head.php";
$emailSended2 = $tarjetaCiudad->campaignMonitorEmail("julian.delgado@idt.gov.co","Tickets Tarjeta ciudad", "52033e72-80d7-4957-b291-fa647e724a6e", "{'PBLINK':'https://files.visitbogota.co/es/tarjeta-ciudad/qrs'}");
$emailSended2 = $tarjetaCiudad->campaignMonitorEmail("nestor@idt.gov.co","Tickets Tarjeta ciudad", "52033e72-80d7-4957-b291-fa647e724a6e", "{'PBLINK':'https://files.visitbogota.co/es/tarjeta-ciudad/qrs'}");
?>
    <style>
        .tc-compra main{
            padding-top: 180px;
            min-height: 100vh;
        }
        .tc-compra main .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .tc-compra main .container h1 {
            margin-bottom: 30px;
            color: #333;
        }
        .tc-compra main .container a{
            color: #333;
            font-size: 18px;
        }
    </style>
<main>
    <div class="container">
    <h1>AQUI SE RESUELVE LA TRANSACCIÓN </h1>
    <a href="javascript:openAprobado();" >CONTINUAR</a>
    </div>
</main>
<? include 'includes/imports.php'?>
</body>

</html>
