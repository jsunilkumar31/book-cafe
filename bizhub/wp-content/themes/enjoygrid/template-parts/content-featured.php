<?php		
	$args = array( 
	    'posts_per_page' => 7,
		'meta_query' => array(
                array(
                'key' => 'enjoygrid-featured',
                'value' => 'yes'
        	)
    	)
	);  

	// The Query
	$the_query = new WP_Query( $args );

	$i = 1;

	if ( $the_query->have_posts() && (!get_query_var('paged')) ) {	
?>

	<div id="featured-content" class="clear">

	<?php
		while ( $the_query->have_posts() ) : $the_query->the_post();
	?>	

	<?php if ($i == 1) { ?>

	<div class="featured-large hentry clear">

			<div class="thumbnail-wrap">
				<a class="thumbnail-link" href="<?php the_permalink(); ?>">					
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('enjoygrid_featured_large_thumb');  
					} else {
						echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/featured-large-thumb.png" alt="" />';
					}
					?>
				</a>					
			</div><!-- .thumbnail-wrap -->

			<div class="entry-header">	
				<span class="entry-category"><?php enjoygrid_first_category(); ?></span>				
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
			</div><!-- .entry-header -->

			<div class="gradient"></div>

	</div><!-- .featured-large -->			

	<?php } else { ?>

	<div class="featured-small hentry">

		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			<div class="thumbnail-wrap">
				<?php 
					if ( ($i > 3) && ($i < 8) ) {
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('enjoygrid_featured_large_thumb');  
						} else {
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/featured-large-thumb.png" alt="" />';
						}
					} else {
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('enjoygrid_featured_small_thumb');  
						} else {
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/featured-small-thumb.png" alt="" />';
						}
					}
				?>
			</div><!-- .thumbnail-wrap -->										
		</a>

		<div class="entry-header">	
			<span class="entry-category"><?php enjoygrid_first_category(); ?></span>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
		</div><!-- .entry-header -->	

		<div class="gradient"></div>

	</div><!-- .featured-small -->

	<?php

		}
		$i++;
		endwhile;
	?>

	</div><!-- #featured-content -->

<?php
	}
	wp_reset_postdata();	
?>
	