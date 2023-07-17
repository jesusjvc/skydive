<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });

    </script>

</head>

<body <?php body_class(); ?>>

    <!-- header -->
    <header class="header clear" role="banner">

        <div class="topbar">
           
                <div class="flex centrado">
                    <div class="column">
                        <div class="inf">
                             <i class="fas fa-map-marker-alt"></i>
                            <span>Emiliano Zapata #21, 62670 San José Vista Hermosa, Mor.</span>
                        </div>
                    </div>
                    <div class="column">
                        <div class="inf">
                            <i class="fas fa-phone-alt"></i>
                            <span>
                                <a href="tel:55 4044 0422">55 4044 0422 </a> /
                                <a href="tel:5573970829">55 7397 0829</a> /
                                <a href="tel:7771715650">777 171 5650</a>
                            </span>
                        </div>
                    </div>
                    <div class="column">
                        <div class="inf">
                            <i class="fas fa-envelope"></i>
                            <span><a href="mailto:contacto@paracaidismo.mx">contacto@paracaidismo.mx</a></span>
                        </div>
                    </div>

                    <div class="column">
                        <div class="inf">
                            <ul class="redes flex">
                                <li><a href="https://www.facebook.com/skydivemexico/"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.instagram.com/skydivemexicooficial/"><i class="fab fa-instagram-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
        </div>

        <!-- logo -->
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
            </a>
        </div>
        <!-- /logo -->

        <!-- nav -->

<div class="topnav" id="myTopnav">
 <nav class="nav" role="navigation">
  <a href="/" class="active">INICIO</a>
  <a href="https://skydivemexico.mx/curso-de-paracaidismo/#precios-academia">PRECIOS</a>
  <a href="https://skydivemexico.mx/curso-de-paracaidismo/#faq-academia">PREGUNTAS FRECUENTES</a>
  <a href="https://skydivemexico.mx/curso-de-paracaidismo/#licencia-academia">LICENCIA TIPO A</a>
  <a href="https://skydivemexico.mx/curso-de-paracaidismo/#condiciones">EXPERIMENTADOS</a>
  <a href="https://skydivemexico.mx/curso-de-paracaidismo/#entrenamiento">TÚNEL DEL VIENTO</a>
  <a href="https://skydivemexico.mx/curso-de-paracaidismo/#contacto">CONTACTO	</a>
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
   </nav>
</div>
      <!--  <nav class="nav" role="navigation">
            <?//php html5blank_nav(); ?>
        </nav>
        -->
        <!-- /nav -->

    </header>
    <!-- /header -->
