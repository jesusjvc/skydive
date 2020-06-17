<?php 
/* Template Name: Como llegar */ 
get_header(); 
?>
<section id="comollegar-banner" class="sin-margin sin-padding">
    <?php add_revslider('como-llegar'); ?>
</section>

<section id="comollegar-faq">
    <div class="wrapper">
        <ul class="faq acordion">
            <li>
                <div class="pregunta">
                    <h3>¿Cómo llegar a Skydive México en automóvil desde CDMX?</h3>
                </div>

                <div class="respuesta">
                    <p>
                        Toma la autopista México-Acapulco y 22 Km después de pasar Cuernavaca, en la caseta de cobro de Alpuyeca, se toma la extrema derecha y se siguen los señalamientos hacia Balnearios, Zacatepec, Jojutla y Tequesquitengo.
                    </p>
                    <p> Esta carretera es estatal de cuatro carriles sin camellón. Se debe tener especial cuidado con los topes, pues no hay señalamientos y son muy grandes. Al llegar al poblado llamado Xoxocotla, es necesario continuar de frente rumbo al Lago de Tequesquitengo, ya que el camino de la izquierda conduce a Jojutla, Mor.</p>

                    <p>En este punto, empieza un camellón de cuatro km. de longitud, hasta el poblado San José Vista Hermosa.</p>

                    <p> Seguir 300 metros más y al lado derecho encontrarás un letrero que dice “CENTRO DE PARACAIDISMO”. Justo frente al letrero, girar hacia la izquierda por una calle angosta y después de 100 mts. se llega al Centro de Paracaidismo, “El lugar donde vivirás una de las mejores experiencias de tu vida”</p>

                </div>
            </li>

            <li>
                <div class="pregunta">
                 
                    <h3>¿Cómo llegar a Skydive México en autobus desde CDMX?</h3>
                </div>
                <div class="respuesta">
                    <p>
                        Para venir en autobús a saltar desde el CDMX, ve a la Terminal del Sur en el metro Taxqueña, ya en la terminal del sur busca en dónde salen autobuses a Jojutla o Zacatepec y ahí compra un boleto hasta Xoxocotla.
                    </p>
                    <p>El autobús se va por la autopista México-Acapulco. Cuando pase Cuernavaca como a 20 min. Va a salir en una caseta de cobro y luego tomará otra carretera amplia sin camellón y con muchos topes. Pide al operador que te baje en el crucero de Xoxocotla que está pasando el puente peatonal y la gasolinería.</p>

                    <p> Tomar un taxi que te lleve al aeródromo San José vista hermosa, pide al operador que te baje en el letrero del paracaidismo. El letrero está del lado derecho, es tipo espectacular, color negro con letras blancas y dice CENTRO DE PARACAIDISMO.</p>

                </div>
            </li>

            <li>
                <div class="pregunta">
                    <h3>¿Cómo llegar a Skydive México en autobus desde Toluca?</h3>
                </div>
                <div class="respuesta">
                    <p>
                        Tomar Hacia Ixtapan de la Sal, Tonatico, Las Grutas, Michapa. En la orilla del pueblo se bifurcan dos caminos, hay que tomar la derecha. A 16 Km. Se llega a la carretera libre México-Acapulco, se da vuelta a la izquierda, a unos 3 Km. está la gasolinera de Puente de Ixtla y como a 2 Km. después de terminar una recta, antes de cruzar un puente y de empezar la subidita, se dobla a la izquierda y pasa por abajo del puente de la Autopista México, Acapulco.


                    </p>
                    <p>A 4 Km. aprox. llegas al crucero de Tequesquitengo, dar vuelta a la izquierda y a 300 m sobre la acera izquierda está el anuncio del CENTRO DE PARACAIDISMO es tipo espectacular, color negro con letras blancas. Enfrente del letrero, en la acera derecha entra a la callecita de terracería (en la esquina hay una farmacia) la calle se llama Emiliano Zapata, nosotros estamos en el número 19, como a 100 m de la farmacia.

                    </p>
                </div>
            </li>

            <li>
                <div class="pregunta">
                    <h3>¿Cómo llegar a Skydive México desde Puebla?</h3>
                </div>
                <div class="respuesta">
                    <p>De Puebla a Atlixco. Antes de llegar a Atlixco hay una desviación a la derecha que va por la falda del Popocatepetl.

                    </p>
                    <p>De ahí a Cuautla dobla a su derecha rumbo a México hasta llegar un poquito antes de la pera ahí dobla a la izquierda rumbo a Cuernavaca por la autopista del sol a 20 km de Cuernavaca esta la caseta de Alpuyeca la cual costara 38 pesos. Tomar a su extrema derecha por debajo del puente y llegas a la gasolinera. Y de ahí tomar el camino a Tequesquitengo.

                    </p>
                </div>
            </li>
        </ul>
        
        <img class="pregunta" src="<?php echo get_template_directory_uri(); ?>/less/img/como-llegar/pregunta.jpg" alt="¿Y tu te lo vas a perder?">
    </div>
</section>

<script>
    
jQuery(document).ready(function($) {
   
    $(".respuesta").hide();
    
    $(".pregunta").click(function(e){        
        padre = $(this).parent();     
         $(padre).find("h3").toggleClass("active");
        $(padre).find(".respuesta").toggle();
        
    });
})
</script>

<?php get_footer(); ?>
