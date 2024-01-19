<?php 
    $bodyClass = "directorio"; 
    include 'includes/header.php';
?>
<body style="background-image: url(https://www.idt.gov.co<?=$landing->field_fondo_interna_3?>);" class="<?=$bodyClass?>">
    <main>
        <div class="left">
            <section>
                <h1>Directorio</h1>
                <h2>Descubre los restaurantes participantes.</h2>
            </section>
           <img src="img/logo.png" alt="logo" width="320">
            <footer>
                <img src="img/logos_w.png" alt="logos">
            </footer>
        </div>
        <div class="right">
            <ul>
                <?php 
                    $restaurantes = $idtInstance->getRestaurantes();
                    for ($i=0; $i < count($restaurantes); $i++) { 
                        $rest = $restaurantes[$i];
                ?>
                    <li data-label="RESTAURANTE">
                    <div class="card__container">
                        <div class="card-header">
                            <img src="https://www.idt.gov.co<?=$rest->field_logo?>" alt="<?=$rest->name?>">
                        </div>
                        <small><img src="img/redes.svg" alt="redes"><?=$rest->field_redes_res?></small>
                        <small><img src="img/add.svg" alt="add"><?=$rest->field_direccion?></small>
                        <small><img src="img/tel.svg" alt="tel"><?=$rest->field_telefo?></small>
                    </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </main>
<?php include 'includes/footer.php' ?>