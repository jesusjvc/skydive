<div class="contenedor-blog">
    <?php
    $bar = 0;
    $bar2 = 0;
    
   
    if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php
$bar=$bar+1;
    $bar2=$bar2+1;
    ?>
	<!-- article -->
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
		<!-- post thumbnail -->
		<?php
      
        if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(668,376)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		

		<!-- post details -->
		<div class="datos">
		
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->
        </div>
        <!-- post title -->
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php // edit_post_link(); ?>

	</article>
	
	<?php
    if($bar==2){
        
       
      $bar=0;
         ?>
        </div>
        <div class="contenedor-blog">
        <?php
    }
    ?>
	<!-- /article -->

<?php endwhile; 
            if ($bar%2==0){
   // echo "el $numero es par";
}else{
                ?>
                <article class="nodemostrar"></article>
                <?php
   // echo "el $numero es impar";
}
            
            ?>
 
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

