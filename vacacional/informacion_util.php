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
    <div class="container">
        <h1><svg width="63" height="72" viewBox="0 0 63 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4C0 1.79086 1.79086 0 4 0H59C61.2091 0 63 1.79086 63 4V67.3975C63 70.1428 60.2977 72.0722 57.7011 71.1807L32.7989 62.6311C31.9571 62.3421 31.0429 62.3421 30.2011 62.6311L5.29889 71.1807C2.70232 72.0722 0 70.1428 0 67.3975V4Z" fill="#E50728"/><path d="M31.22 56.9863C30.983 56.9314 30.7552 56.881 30.5043 56.8215C27.446 56.0757 25.5591 54.1722 24.755 51.1888C24.696 50.9823 24.5577 50.8067 24.3692 50.6992C23.5247 50.3639 22.8048 49.7821 22.3062 49.0319C21.8076 48.2818 21.5544 47.3993 21.5806 46.5032C21.5527 45.2311 21.6178 43.959 21.5062 42.6961C21.268 40.2318 20.2242 37.9101 18.5317 36.0795C16.6886 33.9965 15.3705 31.515 14.6844 28.8364C13.9983 26.1577 13.9636 23.3575 14.583 20.6632C15.2024 17.9689 16.4586 15.4564 18.2494 13.3297C20.0402 11.203 22.3153 9.52211 24.8898 8.42351C33.4137 4.94135 42.8347 8.01169 47.4871 15.8409C49.4646 19.1497 50.2383 23.023 49.6808 26.8227C49.2523 30.1845 47.832 33.3488 45.5955 35.924C44.4475 37.2692 43.4343 38.7015 42.9788 40.4128C42.7054 41.5301 42.522 42.6669 42.4304 43.8126C42.3467 44.7003 42.4304 45.6017 42.4304 46.4986C42.4579 47.395 42.2052 48.278 41.7065 49.0285C41.2077 49.7789 40.487 50.3604 39.6417 50.6946C39.5513 50.7425 39.4715 50.8077 39.4069 50.8862C39.3423 50.9648 39.2941 51.0552 39.2653 51.1522C38.3961 54.3827 36.3372 56.3411 32.9722 56.9268C32.9092 56.9444 32.8484 56.969 32.7909 57L31.22 56.9863ZM39.4837 42.2294C39.6696 41.4332 39.8137 40.6645 40.0182 39.9186C40.6642 37.5758 42.0121 35.6311 43.5458 33.7688C44.8854 32.1903 45.8602 30.3438 46.4027 28.3574C46.9452 26.3711 47.0425 24.2923 46.6877 22.2653C46.2418 19.21 44.7807 16.3862 42.5326 14.2348C39.1769 10.9997 35.0962 9.53543 30.4485 10.0342C24.834 10.6336 20.6882 13.5301 18.462 18.6001C15.9847 24.1917 16.8771 29.4721 20.837 34.1897C22.3023 35.8521 23.3894 37.8039 24.0253 39.914C24.2391 40.6736 24.3785 41.4515 24.5551 42.2294H39.4837ZM39.4465 45.2082H24.5737C24.5737 45.6658 24.5737 46.0502 24.5737 46.4528C24.5737 47.5236 25.1686 48.1001 26.2702 48.1001H31.1224C33.3719 48.1001 35.6168 48.1001 37.8616 48.1001C38.0571 48.1137 38.2533 48.0889 38.4388 48.027C38.6244 47.965 38.7955 47.8673 38.9422 47.7395C39.0889 47.6116 39.2083 47.4563 39.2933 47.2825C39.3783 47.1087 39.4272 46.92 39.4372 46.7274C39.4744 46.2423 39.4465 45.7207 39.4465 45.2082ZM27.8643 51.0378C28.169 51.9447 28.7659 52.729 29.5645 53.2716C30.363 53.8142 31.3196 54.0854 32.289 54.044C34.0737 53.8976 35.9468 52.4334 36.1234 51.0378H27.8643Z" fill="white"/><path d="M43.9026 24.2251C43.9436 25.294 43.4107 25.99 42.5362 26.0445C41.6618 26.0991 41.0469 25.4259 41.0059 24.3661C40.9512 22.1251 40.0327 19.9917 38.4417 18.4104C36.8508 16.8291 34.7102 15.922 32.4662 15.8782C31.1317 15.8372 30.5897 14.7183 30.8903 13.9359C30.987 13.6413 31.177 13.3861 31.4317 13.2088C31.6864 13.0316 31.992 12.9419 32.3022 12.9534C34.248 12.9488 36.1632 13.4365 37.8692 14.3712C39.5752 15.3058 41.0163 16.6568 42.058 18.2981C43.2139 20.0635 43.8528 22.1163 43.9026 24.2251Z" fill="white"/></svg><?= $b->generalInfo->field_info_txt ?></h1>
    </div>
    <div class="container  fade" >
        <?php
        $icons = array("map_toilet","gis_map-route","recorridos_guiados","puntos_info");
        $customOrder = array("2","3", "1" );
        function cmp($a, $b) {
            global $customOrder;
            $posA = array_search($a->tid, $customOrder);
            $posB = array_search($b->tid, $customOrder);
            return $posA - $posB;
        }
        usort($catInfo, "cmp");
        for ($i = 0; $i < count($catInfo); $i++) {
            $tripInfo = $b->tripinfo($catInfo[$i]->tid);
            if($catInfo[$i]->tid != "2"){
                echo "<h2>" . $catInfo[$i]->name . "</h2>";
                echo "
                <section class='utilSlideContainer' id='".$b->get_alias($catInfo[$i]->name)."'>
                    <ul class='utilSlide'>";
                for ($a = 0; $a < count($tripInfo); $a++) {
                    echo "
                        <li>
                            <a href='javascript:utilBoxes(\"" . $tripInfo[$a]->nid . "\");'>
                                <div class='img'>
                                    <img loading='lazy' data-src='" . ($tripInfo[$a]->field_image ? $urlGlobal . $tripInfo[$a]->field_image : 'img/noimg.png') . "' alt='bogota' class='zone_img lazyload' src='https://picsum.photos/20/20'>
                                </div>";

                    if ($tripInfo[$a]->field_address) {
                        echo "<span class='name uppercase'>" . $tripInfo[$a]->title . "<small class='dir uppercase'>" . $tripInfo[$a]->field_address . "</small></span>";
                    } else {
                        echo "<span class='name uppercase'>" . $tripInfo[$a]->title . "</span>";
                    }

                    echo "</a></li>";
                }

                echo "</ul>
                </section>";

            }else{
                if (count($tripInfo) > 0) {
                    echo "<h2>" . $catInfo[$i]->name . "</h2>";
                    echo "
                    <section class='utilSlideContainer' id='".$b->get_alias($catInfo[$i]->name)."'>
                        <ul class='utilSlide'>";
                    for ($a = 0; $a < count($tripInfo); $a++) {
                        echo "
                            <li>
                                <a href='javascript:utilBoxes(\"" . $tripInfo[$a]->nid . "\");'>
                                    <div class='img'>
                                        <img loading='lazy' data-src='images/" . $icons[$a] . ".svg' alt='bogota' class='zone_img lazyload' src='https://picsum.photos/20/20'>
                                    </div>";

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
        }
        ?>
        <?php if(count($arr) > 0){ ?>
            <section class='rls' id="lsc">
                <h2><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M31.696 2.2859C31.6043 2.19279 31.4949 2.11888 31.3743 2.06849C31.2537 2.0181 31.1243 1.99225 30.9936 1.99243C30.8629 1.99262 30.7335 2.01884 30.6131 2.06957C30.4926 2.1203 30.3835 2.19453 30.292 2.2879C30.1075 2.47998 30.0058 2.73684 30.0088 3.00318C30.0118 3.26951 30.1192 3.52402 30.308 3.7119C31.7469 5.15337 32.831 6.90953 33.4749 8.84178C34.1187 10.774 34.3046 12.8295 34.018 14.8459C33.9799 15.1091 34.0465 15.3768 34.2036 15.5914C34.3606 15.8061 34.5956 15.9506 34.858 15.9939C34.9873 16.014 35.1192 16.0081 35.2462 15.9765C35.3731 15.945 35.4925 15.8885 35.5973 15.8103C35.7022 15.732 35.7904 15.6337 35.8568 15.521C35.9232 15.4083 35.9664 15.2835 35.984 15.1539C36.3153 12.8234 36.1004 10.4478 35.3563 8.21464C34.6121 5.98146 33.359 3.95181 31.696 2.2859ZM9.252 6.0659C9.28084 5.35192 9.54781 4.66814 10.0104 4.12351C10.473 3.57887 11.1045 3.20473 11.8044 3.0607C12.5043 2.91668 13.2323 3.01105 13.8723 3.32878C14.5123 3.64651 15.0276 4.16932 15.336 4.8139C15.733 4.45913 16.2122 4.20902 16.7302 4.08621C17.2483 3.96341 17.7888 3.9718 18.3027 4.11062C18.8167 4.24944 19.288 4.51431 19.6737 4.88123C20.0595 5.24815 20.3476 5.70552 20.512 6.2119L20.688 6.7519C21.0897 6.41708 21.5672 6.18579 22.079 6.07827C22.5907 5.97074 23.121 5.99026 23.6234 6.13511C24.1259 6.27996 24.5852 6.54573 24.9611 6.90918C25.3371 7.27262 25.6182 7.72265 25.78 8.2199L27.912 14.6799L29.08 18.0879C29.9374 20.5932 30.1976 23.2642 29.84 25.8879L29.3 29.8639C29.1827 30.7274 28.8417 31.5452 28.311 32.2363C27.7802 32.9274 27.078 33.4678 26.274 33.8039L21.958 35.6059C20.014 36.4179 17.822 35.9019 16.35 34.4919C10.13 28.5279 4.592 26.5519 3.07 26.0939C2.354 25.8779 1.742 25.0539 2.122 24.1499C2.422 23.4379 3.142 22.1899 4.684 21.5079C5.87 20.9819 7.406 20.8479 9.384 21.3719L5.53 10.2019C5.26761 9.39161 5.3363 8.51043 5.72109 7.75059C6.10588 6.99074 6.77555 6.4139 7.584 6.1459C8.144 5.9639 8.718 5.9459 9.252 6.0659ZM13.552 13.3559L14.662 16.7139C14.7032 16.8387 14.7195 16.9703 14.7099 17.1014C14.7002 17.2324 14.6648 17.3602 14.6058 17.4776C14.5467 17.595 14.4651 17.6996 14.3657 17.7854C14.2662 17.8713 14.1508 17.9367 14.026 17.9779C13.9012 18.0191 13.7696 18.0354 13.6386 18.0258C13.5075 18.0161 13.3797 17.9807 13.2623 17.9217C13.0252 17.8024 12.8453 17.5939 12.762 17.3419L11.626 13.9019L9.722 8.8639L9.714 8.8439C9.61775 8.53873 9.40491 8.28391 9.12176 8.13485C8.83861 7.98578 8.50807 7.95454 8.202 8.0479C7.89944 8.15158 7.64937 8.36938 7.50514 8.65484C7.36091 8.94031 7.33395 9.27084 7.43 9.5759L11.944 22.6719C12.0069 22.855 12.0154 23.0524 11.9682 23.2402C11.9211 23.428 11.8205 23.5981 11.6787 23.7298C11.5368 23.8615 11.3597 23.9492 11.1689 23.9823C10.9782 24.0153 10.7819 23.9922 10.604 23.9159C7.94 22.7759 6.378 22.9439 5.492 23.3359C4.904 23.5959 4.512 24.0019 4.26 24.3759C6.528 25.1519 11.86 27.4199 17.732 33.0479C18.68 33.9559 20.038 34.2399 21.186 33.7619L25.5 31.9579C25.9822 31.7565 26.4034 31.4326 26.7219 31.0183C27.0405 30.604 27.2453 30.1137 27.316 29.5959L27.856 25.6199C28.172 23.3044 27.9425 20.947 27.186 18.7359L26.016 15.3219L26.012 15.3119L23.878 8.8439V8.8399C23.7857 8.54896 23.5859 8.30414 23.3195 8.15527C23.053 8.0064 22.7398 7.96467 22.4436 8.03858C22.1475 8.11249 21.8906 8.29649 21.7253 8.55311C21.5601 8.80973 21.4988 9.1197 21.554 9.4199L23.264 14.6859C23.343 14.9368 23.3199 15.2088 23.1997 15.4428C23.0796 15.6768 22.8721 15.854 22.6221 15.9361C22.3722 16.0182 22.1 15.9985 21.8645 15.8813C21.629 15.7641 21.4492 15.5588 21.364 15.3099L21.354 15.3119L19.694 10.1999C19.6664 10.1143 19.6424 10.0275 19.622 9.9399L18.61 6.8319C18.5051 6.53784 18.2897 6.29624 18.0096 6.1584C17.7294 6.02056 17.4066 5.99732 17.1096 6.09363C16.8126 6.18994 16.5649 6.3982 16.4189 6.67421C16.273 6.95022 16.2404 7.27224 16.328 7.5719L17.534 11.2839C17.558 11.3579 17.574 11.4339 17.58 11.5079L18.634 14.6919C18.7173 14.9439 18.6971 15.2186 18.5778 15.4556C18.4585 15.6927 18.25 15.8726 17.998 15.9559C17.746 16.0392 17.4713 16.019 17.2343 15.8997C16.9972 15.7804 16.8173 15.5719 16.734 15.3199L13.588 5.8199C13.4878 5.51782 13.2716 5.26794 12.9871 5.12522C12.7026 4.98251 12.3731 4.95865 12.071 5.0589C11.7689 5.15915 11.519 5.3753 11.3763 5.65979C11.2336 5.94429 11.2098 6.27382 11.31 6.5759L13.514 13.2359L13.56 13.3559H13.552ZM28.486 6.1399C28.5988 6.07247 28.7238 6.02792 28.8538 6.00881C28.9838 5.9897 29.1163 5.99641 29.2437 6.02854C29.3711 6.06068 29.491 6.11761 29.5964 6.19609C29.7018 6.27456 29.7907 6.37305 29.858 6.4859L30.45 7.4759C31.446 9.1439 31.982 11.0459 32 12.9899C32.0024 13.2551 31.8993 13.5104 31.7135 13.6996C31.5276 13.8889 31.2742 13.9965 31.009 13.9989C30.7438 14.0013 30.4885 13.8982 30.2993 13.7124C30.11 13.5265 30.0024 13.2731 30 13.0079C29.9856 11.4201 29.5486 9.86486 28.734 8.5019L28.142 7.5119C28.0745 7.39924 28.0298 7.27437 28.0106 7.14444C27.9913 7.0145 27.9978 6.88205 28.0298 6.75464C28.0617 6.62723 28.1185 6.50736 28.1967 6.40189C28.275 6.29641 28.3733 6.20739 28.486 6.1399Z" fill="#373737"/></svg>Recursos lengua de señas</h2>
                <ul>
                    <?php
            for ($a = 0; $a < count($arr); $a++) {
                if($arr[$a]->field_langfile){
                    echo "<li><a data-fancybox href='https://bogotadc.travel".$arr[$a]->field_langfile."'><div class='img'><img loading='lazy' data-src='" . ($arr[$a]->field_imagen ? $urlGlobal . $arr[$a]->field_imagen : '/img/noimg.png') . "' alt='bogota' class='zone_img lazyload' src='https://picsum.photos/20/20'></div>";
                    echo "<span class='name uppercase'>" . $arr[$a]->title . "</span></a></li>";
                }
            }
            ?>
                </ul>
            </section>
        <?php } ?>
    </div>
    <!-- <section class="header-<?=$bodyClass?>">
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
    </div> -->
</main>
<? include 'includes/imports.php'?>