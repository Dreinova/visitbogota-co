<?php 
    $bodyClass = "porque"; 
    include 'includes/header.php';
?>
<body style="background-image: url(https://www.idt.gov.co<?=$landing->field_fondo_interna_1?>);" class="<?=$bodyClass?>">
    <main>
        <img src="img/logo_t.png" alt="logot" class="logot">
       <?=$landing->field_info_interna_1?>
    </main>
    <footer>
        <img src="img/logos_g.png" alt="logos">
    </footer>
<?php include 'includes/footer.php' ?>