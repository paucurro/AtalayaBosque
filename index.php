<?php require_once '_config.php'; ?>
<?php require_once 'libreria.php'; ?>
<?php

if (isset($_REQUEST['lang']) && ($_REQUEST['lang'] != '')) {
    if (array_search($_REQUEST['lang'], array_column($arrLenguajes, 'idioma')) !== false) {
        $_SESSION['datos_usuario']->idioma = $_REQUEST['lang'];
    }
}

carga_idiomas($_SESSION['datos_usuario']->idioma);
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['datos_usuario']->idioma; ?>">
<head>
    <?php require_once 'ls_head.php'; ?>
</head>
<body>

<?php require_once 'ls_menu.php'; ?>

<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url(pictures/home.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.014'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.015'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/habitacion1.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.037'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.002'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/portada3.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.035'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.036'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/habitacion3.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.033'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.034'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/portada5.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.038'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.039'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/dormitorio.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.001'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.003'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/piscina_3.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.042'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.043'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(pictures/campdemar.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                            <h1 class="probootstrap-heading probootstrap-animate"><?php echo trans('txt_portada.040'); ?></h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap"><?php echo trans('txt_portada.041'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

<!--<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
        <div class="row mb30">
            <div class="col-md-12">
                <div class="ibe" data-region="emea" data-channelcode="atalayabosqueapartmentsdirect" data-query-locale="<?php /*echo ($_SESSION['datos_usuario']->idioma); */?>" data-widget="property_grid"></div>
            </div>
        </div>
    </div>
</section>-->


<section class="probootstrap-section">
    <div class="container">
        <div class="row mb30">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                <h2><?php trans('txt_portada.016'); ?></h2>
                <p class="lead"><?php trans('txt_portada.017'); ?></p>
                <p><img src="img/curve.svg" class="svg" alt=""></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <img src="img/flaticon/svg/005-bed.svg" class="svg" alt="All rooms with bed">
                    </div>
                    <div class="text">
                        <h3><?php echo trans('txt_portada.044'); ?></h3>
                        <p><?php echo trans('txt_portada.045'); ?></p>
                        <!-- <p><a href="#" class="link-with-icon">< ?php echo trans('genericos.learn'); ?> <i class=" icon-chevron-right"></i></a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <img src="img/flaticon/svg/003-restaurant.svg" class="svg" alt="All offer restaurant nearby">
                    </div>
                    <div class="text">
                        <h3><?php echo trans('txt_portada.018'); ?></h3>
                        <p><?php echo trans('txt_portada.018A'); ?></p>
                        <!-- <p><a href="#" class="link-with-icon">< ?php echo trans('genericos.learn'); ?> <i class=" icon-chevron-right"></i></a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <img src="img/flaticon/svg/006-beach.svg" class="svg" alt="Beach near apartment">
                    </div>
                    <div class="text">
                        <h3><?php echo trans('txt_portada.047'); ?></h3>
                        <p><?php echo trans('txt_portada.048'); ?></p>
                        <!-- <p><a href="#" class="link-with-icon">< ?php echo trans('genericos.learn'); ?> <i class=" icon-chevron-right"></i></a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
        <div class="row mb30">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
                <h2><?php echo trans('txt_portada.046'); ?></h2>
                <p class="lead"><?php echo trans('txt_portada.046A'); ?></p>
                <p><img src="img/curve.svg" class="svg" alt=""></p>
            </div>
        </div>
        <div class="row probootstrap-gutter10">
            <div class="col-md-4">
                <div class="probootstrap-block-image-text">
                    <figure>
                        <a href="pictures/dormitorio.jpg" class="image-popup">
                            <img src="pictures/dormitorio.jpg" alt="" class="img-responsive">
                        </a>
                    </figure>
                    <div class="text">
                        <h3><a href="#"><?php echo trans('txt_portada.052'); ?></a></h3>
                        <p><?php echo trans('txt_portada.053'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-block-image-text">
                    <figure>
                        <a href="pictures/cocina_2.jpg" class="image-popup">
                            <img src="pictures/cocina_2.jpg" alt="" class="img-responsive">
                        </a>
                    </figure>
                    <div class="text">
                        <h3><a href="#"><?php echo trans('txt_portada.025'); ?></a></h3>
                        <p><?php echo trans('txt_portada.026'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-block-image-text">
                    <figure>
                        <a href="pictures/salon_2.jpg" class="image-popup">
                            <img src="pictures/salon_2.jpg" alt="" class="img-responsive">
                        </a>
                    </figure>
                    <div class="text">
                        <h3><a href="#"><?php echo trans('txt_portada.054'); ?></a></h3>
                        <p><?php echo trans('txt_portada.055'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-half">
    <div class="image" style="background-image: url(pictures/piscina_1.jpg);"></div>
    <div class="text">
        <div class="probootstrap-animate fadeInUp probootstrap-animated">
            <h2 class="mt0"><?php echo trans('txt_portada.029'); ?></h2>
            <p><img src="img/curve_white.svg" class="seperator" alt=""></p>
            <div class="row">
                <div class="col-md-6">
                    <p><?php echo trans('txt_portada.030'); ?></p>
                </div>
                <div class="col-md-6">
                    <p><?php echo trans('txt_portada.031'); ?></p>
                </div>
            </div>
            <!-- <p><a href="#" class="link-with-icon white">< ?php echo trans('genericos.learn'); ?> <i class=" icon-chevron-right"></i></a></p> -->
        </div>
    </div>
</section>

<section class="probootstrap-half">
    <div class="text">
        <div class="probootstrap-animate fadeInUp probootstrap-animated">
            <h2 class="mt0"><?php echo trans('txt_portada.029A'); ?></h2>
            <p><img src="img/curve_white.svg" class="seperator" alt=""></p>
            <div class="row">
                <div class="col-md-6">
                    <p><?php echo trans('txt_portada.030A'); ?></p>
                </div>
                <div class="col-md-6">
                    <p><?php echo trans('txt_portada.031A'); ?></p>
                </div>
            </div>
            <!-- <p><a href="#" class="link-with-icon white">< ?php echo trans('genericos.learn'); ?> <i class=" icon-chevron-right"></i></a></p> -->
        </div>
    </div>
    <div class="image" style="background-image: url(pictures/bar_3.jpg);"></div>
</section>

<?php require_once 'ls_footer.php'; ?>

<script src="https://widget.siteminder.com/ibe.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        /*var element,
        timer_espera = setInterval(function () {
            element = $('iframe').contents().find('head');
            if (element.length == 1) {
                element.append('<link rel="stylesheet" media="screen" href="https://www.atalayabosque.com/css/custom.css">');
                clearInterval(timer_espera);
            }
        }, 1000);
        console.log(element);*/

        $('.ibe').find('iframe').css('height', '200px')
    })

    /*(function (i, s, o, g, r, a, m) {
        i['SBSyncroBoxParam'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://cdn.simplebooking.it/search-box-script.axd?IDA=5721', 'SBSyncroBox');

    SBSyncroBox({
        CodLang: '< ?php echo strtoupper($_SESSION['datos_usuario']->idioma); ?>',
        Styles: {
            Theme: "light-pink",
            CustomColor: "#333333",   //primary color ex. #CDEFDD
            CustomBGColor: "#f5f5f5",   //background color
            CustomLabelColor: "#999999",   //labels color
            CustomWidgetColor: "#333333",   //popovers text color,
            CustomButtonBGColor: "#903479",
        },

    }); */
</script>

</body>
</html>