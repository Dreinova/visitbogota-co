<?php 
    $bodyClass = 'eventsnew';
    include 'includes/head.php';
    // Obtener la fecha actual
    $today = time();
    $agenda = $b->getTaxAgenda($_GET['idAgenda']);

    switch ($lang) {
        case 'es':
            // Set the locale to Spanish (ES)
            setlocale(LC_TIME, 'es_ES');
            
            break;
        case 'pt':
            // Set the locale to Portuguese (PT)
            setlocale(LC_TIME, 'pt_PT');
            
            break;
        case 'fr':
            // Set the locale to French (FR)
            setlocale(LC_TIME, 'fr_FR');
            
            break;
        
        default:
            
            break;
    }

?>
<main data-agenda="<?=$_GET['idAgenda']?>">
    <section class="banner"
        style="background-image:url(<?= isset($agenda->field_banner_principal_agenda) && $agenda->field_banner_principal_agenda != "" ? $agenda->field_banner_principal_agenda : "https://images.pexels.com/photos/2897462/pexels-photo-2897462.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"?>);">
        <?= isset($agenda->field_banner_principal_agenda) && $agenda->field_banner_principal_agenda != "" ? "" : "<h1 class='uppercase'>Eventos</h1>"?>
    </section>
    <section class="agendaInfo">
        <?php if(isset($_GET['idAgenda'])){?>
        <p><?=$agenda->description__value?></p>
        <?php 
        $titles = explode(',', $agenda->field_titulos_agenda); 
        $links = explode(',', $agenda->field_links_agenda); 
        
        if($titles[0] != ""){
          
            ?>
            <ul class="linksAgenda">
                <?php 
                    $images = array(
                        "field_imagenes_agenda",
                        "field_imagen_2_agenda",
                        "field_imagen_3_agenda",
                        "field_imagen_4_agenda"
                    );
                    for ($i=0; $i < count($titles); $i++) { 
                        $imageVariable = $images[$i];
                        $imageURL = $agenda->$imageVariable;
                ?>
                    <li>
                        <a href="<?=$links[$i]?>">
                            <img loading="lazy" class="lazyload" data-src="<?php echo $imageURL; ?>" src="https://picsum.photos/20/20" alt="Reserva aquí tu viaje al Festival de la igualdad">
                            <small><?=$titles[$i]?></small>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
        <?php } ?>
    </section>
    <div class="events_list">
        <aside class="filters">
            <div class="container-switch">
                <label class="switch" for="closeMe">
                    <input type="checkbox" id="closeMe">
                    <span class="slider round"></span>
                </label>
                <small>Cerca de mí</small>
            </div>
            <h2 class="ms900">Prográmate con los eventos más destacados</h2>
            <div class="filtergroup checkboxes color open" data-filterid="categorias_eventos">
                <span class="ms700"><span class="arrow"></span>Categoría de Evento</span>
                <div class="content"></div>
            </div>
            <div class="filtergroup checkboxes color open" data-filterid="test_zona">
                <span class="ms700"><span class="arrow"></span>Zona de la ciudad</span>
                <div class="content"></div>
            </div>
        </aside>
        <ul class="events_list_grid"></ul>
        <?php if($_GET['idAgenda'] == '149'){ ?>
            <div class="aclaracion">
                <p>El IDT no es el organizador de los eventos aquí publicados.</p>
            </div>
        <?php } ?>
    </div>
</main>

<?php include 'includes/imports.php'; ?>