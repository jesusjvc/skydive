<?php 
/* Template Name: Promociones */ 
get_header(); 
?>

<section id="promo-form">
    <div class="wrapper">
       
            <h1>Reserva <span>tu lugar</span></h1>
        <div class="flex cols-2">
            <div class="column">
                <img src="<?php echo get_template_directory_uri(); ?>/less/img/promo.jpg" alt="salta en paracaidas">
            </div>
            <div class="column">
             <?php echo do_shortcode('[caldera_form id="CF587931c76c06e"]'); ?>
            </div>
        </div>

    </div>
</section>

<section id="salta">

    <div class="wrapper">
        <img class="salta" src="<?php echo get_template_directory_uri(); ?>/less/img/home/salta/salta.png" alt="salta en paracaidas">

        <h2>
            <div class="text">SALTA</div>
            <div class="column"> <b>EN</b> <strong>CAÍDA LIBRE</strong> <span>a 200 km/h</span></div>

        </h2>
        <div class="info">
            <h3>SALTOS TANDEM</h3>
            <p>Salta con un instructor en un paracaídas especial llamado Tándem y experimenta con seguridad la maravilla de este increíble deporte.
            </p>
            <p>Podrás vivir la indescriptible emoción de volar y aterrizar suavemente después de un placentero planeo de cinco minutos con tu paracaídas abierto.</p>
            <p><strong>TU SALTO SERÁ LA MEJOR EXPERIENCIA QUE VIVIRÁS CON LA ROPA PUESTA.</strong></p>
            <p>El salto tándem es el método de entrenamiento más importante para aquellos que lo hacen por primera vez, haciendo que este deporte extremo sea accesible para millones de personas alrededor del mundo. En tu salto tándem irás acompañado por un instructor certificado quien te guiará en todo momento.</p>
        </div>
    </div>
</section>

<section id="instagram">
    <div class="wrapper">
        <h2>¡AVIÉNTATE TU TAMBIÉN!</h2>
        <p>Estas son las pruebas de quienes ya lo hicieron</p>

        <a href="#" class="btn morado">!Quiero SALTAR!</a>
    </div>
</section>

<section id="beneficios">
    <div class="wrapper">
        <div class="flex cols-3">
            <div class="column">
                <div class="beneficio">
                    <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/Beneficios/1.png" alt="salta en paracaidas">
                    <h2>SALTOS <span>seguros</span></h2>
                    <p>Nuestros equipos tienen un dispositivo de seguridad
                        llamado VIGIL, que abre el paracaídas de emergencia
                        automáticamente si es
                        necesario.</p>
                </div>
            </div>
            <div class="column">
                <div class="beneficio">
                    <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/Beneficios/2.png" alt="salta en paracaidas">
                    <h2>INSTRUCTORES <span>certificados</span></h2>
                    <p>Instructores certificados y súper experimentados. Para garantizar tu seguridad todos los instructores de Skydive México pasan por una serie de rigurosas capacitaciones.</p>
                </div>
            </div>
            <div class="column">
                <div class="beneficio">
                    <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/Beneficios/3.png" alt="salta en paracaidas">
                    <h2>AVIONES <span>dedicados</span></h2>
                    <p>Nuestros aviones están especialmente modificados con base en las regulaciones para la práctica del paracaidismo.</p>
                    <p>
                        Son los más seguros por sus modernos motores nuevos tipo Turbo-Hélice, los más rápidos y los más económicos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mejores-aviones">
    <?php add_revslider('slider-1'); ?>
</section>

<section id="testimonios">
    <div class="wrapper">

    </div>
</section>

<section id="addons">
    <div class="wrapper">
        <h2>¡INMORTALIZA ESTA <br> INCREÍBLE EXPERIENCIA!</h2>
        <p>Esta memorable vivencia, se puede preservar si contratas el servicio de grabación en donde se capta la secuencia de todo tu salto, desde la preparación hasta su aterrizaje. Sabemos que aventarte y no grabar la experiencia sería imperdonable. Nuestros servicios de fotografía y vídeo puedes contratarlos directamente en zona de salto.</p>

        <div id="packs">
            <div class="flex cols-2">
                <div class="column">
                    <div class="paquete">
                        <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/addons/1.png" alt="">
                        <h3 class="text-right">VIDEO <span>de mano</span></h3>
                        <p class="text-left"><b>INCLUYE</b></p>
                        <ul>
                            <li> Video desde la muñeca del instructor</li>
                            <li> Tomas del abordaje al avión</li>
                            <li> Tomas de la caída libre</li>
                            <li> Tomas del vuelo en paracaídas</li>
                            <li> Tomas del aterrizaje</li>
                            <li> Video editado (3 a 5 min.)</li>
                        </ul>
                        <div class="precio">$850</div>
                    </div>
                </div>
                <div class="column">
                    <div class="paquete">
                        <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/addons/2.png" alt="">
                        <h3 class="text-right">FOTO Y VIDEO <span>de mano</span></h3>
                        <p class="text-left"><b>INCLUYE</b></p>
                        <ul>
                            <li> Video desde la muñeca del instructor</li>
                            <li> Tomas del abordaje al avión</li>
                            <li> Tomas de la caída libre</li>
                            <li> Tomas del vuelo en paracaídas</li>
                            <li> Tomas del aterrizaje</li>
                            <li> Video editado (3 a 5 min.)</li>
                            <li> Captura de 60 a 90 fotografías</li>
                        </ul>
                        <div class="precio">$1000</div>
                    </div>
                </div>
            </div>
            <div class="flex cols-2">
                <div class="column">
                    <div class="paquete">
                        <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/addons/3.png" alt="">
                        <h3 class="text-right">FOTO Y VIDEO <span>externo</span></h3>
                        <p class="text-left"><b>INCLUYE</b></p>
                        <ul>
                            <li> 1 paracaidista y fotógrafo profesional te graba a distancia</li>
                            <li> Tomas del abordaje al avión</li>
                            <li> Tomas de la caída libre</li>
                            <li> Tomas del aterrizaje</li>
                            <li> Video editado (4 a 6 min.)</li>
                            <li> Captura de 60 a 90 fotografías</li>
                        </ul>
                        <div class="precio">$1350</div>
                    </div>
                </div>
                <div class="column">
                    <div class="paquete">
                        <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/addons/4.png" alt="">
                        <h3 class="text-right">PAQUETE <span>PREMIUN</span></h3>
                        <p class="text-left"><b>INCLUYE</b></p>
                        <ul>
                            <li> Video desde la muñeca del instructor</li>
                            <li> 1 paracaidista y fotógrafo profesional te graba a distancia</li>
                            <li> Tomas del abordaje al avión</li>
                            <li> Tomas de la caída libre</li>
                            <li> Tomas del vuelo en paracaídas</li>
                            <li> Tomas del aterrizaje</li>
                            <li> Video editado (4 a 6 min.)</li>
                            <li> Captura de 60 a 100 fotografías</li>
                        </ul>
                        <div class="precio">$1700</div>
                    </div>
                </div>
            </div>

            <div class="nota text-left">
                <h4>NOTA:</h4>
                <p>
                    *La entrega de tus archivos se realizará 25 minutos después en cualquiera de tus dispositivos Android o Apple, USB, Micro SD y es importante contar con 5 G de memoria.

                </p>
                <p>*Si deseas tus archivos en USB, puedes adquirirla con nosotros por un costo adicional de $80.00 mxn.</p>
                <p>
                    En caso de requerir factura, los precios no incluyen I.V.A.
                </p>
            </div>

            <a href="#" class="btn azul">RESERVA aqui</a>
        </div>
    </div>
</section>

<section id="advertencia">
    <div class="wrapper">
        <div class="flex cols-70-30">
            <div class="column">
                <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/Advertencia/2.png" alt="">
            </div>
            <div class="column">
                <div class="info text-left">
                    <h2>ADVERTENCIA</h2>
                    <p>Otros Centros de paracaidismo, en la geografía de nuestro país, se hacen pasar por nosotros. Usan ilegalmente nuestra marca registrada "SKYDIVE MÉXICO" para promocionarse como si fuera suya, lo que causa serios inconvenientes a nuestros participantes además, tratan de desprestigiarnos con falacias.
                    </p>

                    <p><strong>POR FAVOR, ¡NO TE CONFUNDAS! NO TENEMOS SUCURSALES.</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>