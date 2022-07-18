<?php 
/* Template Name: Mensaje Enviado */ 
get_header(); 
?>


<section id="gracias">
    <div class="wrapper">        

        <div id="packs">
            <div class="flex cols-2">
                <div class="column">
                <h3>¡Solicitud enviada correctamente, ahora agenda tu fecha!</h3>

                <p>Para poder agendar tu fecha de Salto, por favor llámanos al <a href="tel:5540440422">55 4044 04 22</a></p>
                <p>O mándamos un WhatsApp</p>
                <a href="https://api.whatsapp.com/send?phone=525540440422&text=Hola,%20Quiero%20agendar%20la%20fecha%20de%20mi%20salto" class="btn azul">Enviar WhatsApp</a>
                </div>
                <div class="column">
                <img src="<?php echo get_template_directory_uri(); ?>/less/img/banner.jpg" alt="Reserva">
                </div>
            </div>
     
         

            
        </div>
    </div>
</section>

<?php get_footer(); ?>