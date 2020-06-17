<?php 
/* Template Name: Transporte */ 
get_header(); 
?>
<section id="transporte-banner">
    <?php add_revslider('transporte'); ?>
</section>

<section id="transporte-contacto">
    <div class="wrapper">
        <h1>Contacto</h1>        
        <?php echo do_shortcode('[caldera_form id="CF58ec0a56e1dab"]'); ?>    
    </div>
</section>

<?php get_footer(); ?>