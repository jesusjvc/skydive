<?php 
/* Template Name: Home */ 
get_header(); 
?>

<div id="slide">
    <?php add_revslider('home'); ?>
</div>

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
            <p>El salto tándem es el método de entrenamiento más importante para aquellos que lo hacen por primera vez, haciendo que este deporte extremo sea accesible para millones de personas alrededor del mundo. En tu salto tándem irás acompañado por un instructor experimentado quien te guiará en todo momento.</p>
        </div>
    </div>
</section>

<section id="instagram">
    <div class="wrapper">
        <h2>¡AVIÉNTATE TU TAMBIÉN!</h2>
        <p>Estas son las pruebas de quienes ya lo hicieron</p>
        <?php echo do_shortcode('[instagram-feed]'); ?>
        <a href="https://skydivemexico.mx/#paquetes" class="btn morado">!Quiero SALTAR!</a>
    </div>
</section>

<section id="why">
    <div class="wrapper">
        <div class="flex cols-2">
            <div class="column">
                <h2><b>¿POR QUÉ</b> <br> SKYDIVE MÉXICO <br> TEQUESQUITENGO <br> <small> es el centro de paracaidismo en</small> <strong>SALTOS TANDEM?</strong></h2>
            </div>
            <div class="column">
                <div class="info">
                    <p>Skydive México cuenta con un <strong>récord perfecto de seguridad </strong>, esto gracias al puntual mantenimiento de nuestras aeronaves, invertimos en los mejores equipos TANDEM a nivel mundial.</p>
                    <p>Tu seguridad es nuestra principal prioridad Para lograr altos estándares de seguridad no escatimamos gastos en mantenimientos de aviones, equipos, capacitación a instructores y personal de apoyo.</p>
                </div>
            </div>
        </div>
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
                    <h2>INSTRUCTORES <span>experimentados</span></h2>
                    <p>Los instructores Tandem que colaboran en SKYDIVE MÉXICO, cuentan con años  de experiencia y participan en cursos de seguridad y procedimientos de emergencia periódicos. Su salud y condiciones físicas son revisados  por paramédicos certificados antes de iniciar actividades y durante el desarrollo de los vuelos.</p>
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
    <?php add_revslider('aviones'); ?>
</section>

<section id="testimonios">
    <div class="wrapper">
    <?php echo do_shortcode('[google-reviews-pro place_photo=https://lh3.googleusercontent.com/p/AF1QipNG7atRgPLnIe2F91Q5MgZKeMrggH1T5V0qMpQ-=s1600-w300-h300 place_name="Skydive México - Paracaidismo Tequesquitengo" place_id=ChIJAUB80GzUzYURx8aRtasn4Cs auto_load=true sort=3 min_filter=2 view_mode=slider slider_speed=7 open_link=true]');
                ?>
               
    </div>
</section>

<section id="paquetes">
    <div class="wrapper">
        <h2>¿A QUÉ ALTITUD QUIERES SALTAR?</h2>

        <div class="paquete uno">
            <div class="fondo">
                <h3>
                    13 MIL<span>ft</span>
                    <span class="snm">sobre el nivel medio del mar</span>
                    <div class="precio">$1,850</div>
                </h3>
            </div>

            <div class="detalles">
                <ul>
                    <li>30 seg de CAÍDA LIBRE</li>
                    <li>Peso Max 90 Kg</li>
                </ul>
                <a href="https://skydivemexico.mx/promociones/" class="btn rayado"><span>COMPRAR</span></a>
            </div>
        </div>
        <div class="paquete dos">
            <div class="fondo">
                <h3>
                    15 MIL<span>ft</span>
                    <span class="snm">sobre el nivel medio del mar</span>
                    <div class="precio">$2,250</div>
                </h3>
            </div>
            <div class="detalles">
                <ul>
                    <li>45 seg de CAÍDA LIBRE</li>
                    <li>Peso Max 90 Kg</li>
                </ul>
                <a href="https://skydivemexico.mx/promociones/" class="btn rayado"><span>COMPRAR</span></a>
                <div class="nota">
                    En grupos de 12, el doceavo se lleva un salto GRATIS
                </div>
            </div>
        </div>
        <div class="paquete tres">
            <div class="fondo">
                <h3>
                    17 MIL<span>ft</span>
                    <span class="snm">sobre el nivel medio del mar</span>
                    <div class="precio">$2,750</div>
                </h3>
            </div>
            <div class="detalles">
                <ul>
                    <li>60 seg de CAÍDA LIBRE</li>
                    <li>Peso Max 90 Kg</li>
                </ul>
                <a href="https://skydivemexico.mx/promociones/" class="btn rayado"><span>COMPRAR</span></a>
                <div class="nota">
                    En grupos de 12, el doceavo se lleva un salto y video GRATIS
                </div>
            </div>
        </div>
    </div>
</section>

<section id="condiciones">
    <div class="wrapper">
        <h2>CONDICIONES DE SEGURIDAD</h2>
        <ul>
            <li>Tu peso no puede exceder los 90kg, sino existirá un costo adicional. (Lo máximo aceptable serán 110kg)</li>

            <li>Los niños pueden vivir la experiencia siempre que tengan 7 años cumplidos y pesen más de 25 kilos.</li>

            <li>Por seguridad, no pueden saltar personas con gripa, problemas cardiacos, fracturas o cirugías recientes, epilepsia o mujeres embarazadas.</li>

            <li>Es indispensable presentar tu identificación oficial y tu comprobante de pago original en la zona de salto.</li>

            <li>Recuerda que no tenemos políticas de reembolso. Si no puedes asistir por favor notifícalo 48 horas antes para agendar tu salto en otra fecha.</li>

            <li>Todos nuestros precios en zona de salto aplican SIN promoción alguna.</li>
        </ul>
    </div>


</section>



<section id="garantia">
    <div class="wrapper">
        <div class="flex">
            <div class="column">
                <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/garantia/2.png" alt="">
            </div>
            <div class="column">
                <div class="info">
                    <p>Si al llegar a nuestras instalaciones tus expectativas de calidad, servicio o seguridad no son satisfactorias y decides realizar tu salto en otro sitio, nos comprometemos a reembolsar inmediatamente el 100 % de tu depósito que hiciste para garantizar tu reserva.</p>
                    <p>Somas el único Centro de Paracaidismo que te ofrece esta opción de GARANTÍA DE SATISFACCIÓN y no "TE AMARRAMOS" pidiéndote depósitos no reembolsables... ¡COMPARA!</p>
                </div>
            </div>
        </div>
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
                        <div class="precio">$950</div>
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
                        <div class="precio">$1,200</div>
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
                        <div class="precio">$1,650</div>
                    </div>
                </div>
                <div class="column">
                    <div class="paquete">
                        <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/addons/4.png" alt="">
                        <h3 class="text-right">PAQUETE <span>PREMIUM</span></h3>
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
                        <div class="precio">$1,890</div>
                    </div>
                </div>
            </div>

            <div class="nota text-left">
                <h4>NOTA:</h4>
                <p>
                    *La entrega de tus archivos se realizará 25 minutos después en cualquiera de tus dispositivos Android o Apple, USB, Micro SD y es importante contar con 5 G de memoria.

                </p>
                <p>*Si deseas tus archivos en USB, puedes adquirirla con nosotros por un costo adicional de $150.00 mxn.</p>
               
            </div>

            <a href="https://skydivemexico.mx/promociones" class="btn azul">RESERVA aqui</a>
        </div>
    </div>
</section>

<section id="advertencia">
    <div class="wrapper">
        <div class="flex cols-70-30">
            <div class="column">
               
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

<section id="recomendaciones">
    <div class="wrapper">
        <h2>¿Qué más hay en teques <br> y sus alrededores</h2>
        <p>¿Ya tienes tu reservación? ¡Excelente! Tequesquitengo tiene mucho más para ofrecerte.</p>

        <div class="flex cols-2">
            <div class="column">
                <div class="opcion">
                    <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/recomendaciones/1.png" alt="">
                    <h3><span>¿Qué hacer en</span> TEQUES? <span>Y sus alrededores</span></h3>
                    <a href="https://skydivemexico.mx/blog/actividades-tequesquitengo/" class="btn azul">VER MÁS</a>
                </div>
            </div>
            <div class="column">
                <div class="opcion">
                     <img src="<?php echo get_template_directory_uri(); ?>/less/img/home/recomendaciones/2.png" alt="">
                    <h3>HOTELES<span>en Tequesquitengo</span></h3>
                    <a href="http://t.ly/FLZ6" class="btn azul">VER MÁS</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
