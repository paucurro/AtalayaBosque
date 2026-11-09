<?php require_once '_config.php'; ?>
<?php require_once 'libreria.php'; ?>
<?php

if (isset($_REQUEST['lang']) && ($_REQUEST['lang'] != '')) {
    if (array_search($_REQUEST['lang'], array_column($arrLenguajes, 'idioma')) !== false) {
        $_SESSION['datos_usuario']->idioma = $_REQUEST['lang'];
    }
}

carga_idiomas($_SESSION['datos_usuario']->idioma);

$array_fotos = [
    'home.jpg',
    'serra_tramuntana.jpg',
    'fachada_3.jpg',
    'salon_3.jpg',
    'paguera_2.jpg',
    'piscina_1.jpg',
    'cocina_2.jpg',
    'dormitorio.jpg',
    'puigmajor5.jpg',
    'paguera_3.jpg',
    'paguera_4.jpg',
    'pasillo.jpg',
    'piscina_3.jpg',
    'pasillo_1.jpg',
    'cala_moro_santanyi.jpg',
    'pasillo_4.jpg',
    'salon_1.jpg',
    'cocina_1.jpg'
];

?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['datos_usuario']->idioma; ?>">
<head>
    <?php require_once 'ls_head.php'; ?>

    <link rel="stylesheet" href="./css/vendor/magnific-popup.css">

</head>

<body>

<?php require_once 'ls_menu.php'; ?>

<section class="probootstrap-section">
    <div class="container">

        <!--Carousel Wrapper-->
        <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Slides and lightbox-->

            <div class="carousel-inner mdb-lightbox" role="listbox">
                <div id="mdb-lightbox-ui"></div>
                <!--First slide-->
                <div class=" carousel-item active text-center">

                    <?php
                    $contador = 0;
                    foreach ($array_fotos as $foto) {
                        echo '<figure class="col-md-6 d-md-inline-block">' . PHP_EOL;
                        echo '    <a class="img_zoom" href="pictures/' . $foto . '" data-size="800x450">' . PHP_EOL;
                        echo '        <img src="pictures/' . $foto . '" class="img-responsive">' . PHP_EOL;
                        echo '    </a>' . PHP_EOL;
                        echo '</figure>' . PHP_EOL;

                        $contador ++;
                        if ($contador >= 2) {
                            $contador = 0;
                            echo '</div>' . PHP_EOL;
                            echo '<div class="carousel-item text-center">' . PHP_EOL;
                        }
                    }

                    ?>

                </div>
                <!--/.First slide-->

        </div>
        <!--/.Carousel Wrapper-->

    </div>
</section>

<?php require_once 'ls_footer.php'; ?>

</body>
</html>
