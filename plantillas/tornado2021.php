<?php 
/* Template Name: Tornado2021 */ 
get_header(); 
?>

<div id="slide">
    <?php add_revslider('tunel2021'); ?>
</div>

<section id="salta" class="tornado">

    <div class="wrapper">
        <img class="salta" src="<?php echo get_template_directory_uri(); ?>/less/img/tornado/tornado-tequesquitengo.png"
            alt="salta en paracaidas">

        <div class="info">
           
            <h3>INFO</h3>
            <p>Tornado es el único simulador de caída libre o túnel de viento en Latinoamérica que genera una corriente de aire continua que alcanza una velocidad de 270 km/h y te permitirá experimentar la sensación de volar usando tu cuerpo.</p>
            <p>El túnel de viento ¡te hará VOLAR! con 2 ventiladores que crean un flujo de aire ascendente que te elevará.</p>
            <p>Un instructor experimentado te preparará con movimientos básicos para que puedas controlar el vuelo, así aprenderás a cómo cambiar la altura de tu vuelo con movimientos del cuerpo y además, entrará junto a ti para estar al pendiente de que mantengas la posición correcta de tu cuerpo, así como brazos y piernas.</p>
            <p>¡Podrás volar sólo! no estarás atado al instructor mientras él controla todos los movimientos.</p>
        </div>
    </div>
</section>



<section id="costo-tornado">
    <div class="wrapper">
        <h2>PRECIOS</h2>
        
         <div class="flex cols-2">
            <div class="column"><a href="https://skydivemexico.mx/wp-content/uploads/2021/07/PreciosAdv.pdf" target="_blank" class="btn naranja">PARA EXPERIMENTADOS</a></div>
            <div class="column"><a href="#tornado-reserva" class="btn naranja">RESERVA AHORA</a></div>
        </div>
        
        <div class="flex cols-3">
            <div class="column">
                <div class="precio">
                    <h5>$280 MXN</h5>
                    <p>Con reservación o si realizaste un salto tandem.</p>
                </div>
            </div>
            <div class="column">
                <div class="precio">
                    <h5>$300 MXN</h5>
                    <p>Acompañantes del pasajero que saltó en tandem.</p>
                </div>
            </div>
            <div class="column">
                <div class="precio">
                    <h5>$350 MXN</h5>
                    <p>Sin reservación o alumnos de otras escuelas.</p>
                </div>
            </div>
        </div>
       
        
    </div>
</section>
<section id="tornado-video">

<iframe width="100%" height="600px" src="https://www.youtube.com/embed/70Z5HVxg8UA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</section>
<section id="tornado-reserva">
<?php add_revslider('reserva-tornado'); ?>


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