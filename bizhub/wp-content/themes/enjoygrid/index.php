<?php get_header(); ?>

	<div id="primary" class="content-area full-width clear">

		<?php 
			get_template_part('template-parts/content','featured');
		?>

		<main id="main" class="site-main clear">

			<?php if ( is_active_sidebar( 'home' ) ) { ?>

			<div id="recent-content">

				<?php dynamic_sidebar( 'home' ); ?>

			</div><!-- #recent-content -->	

			<?php } else { ?>

			<div id="recent-content" class="content-loop clear">

				<?php

				if ( have_posts() ) :	
				
				$i = 1;		
					
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part('template-parts/content', 'loop');

					$i++;

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; 

				?>

			</div><!-- #recent-content -->
			
			<?php get_template_part( 'template-parts/pagination', '' ); ?>

			<?php } ?>							

		</main><!-- .site-main -->

	</div><!-- #primary -->

<?php get_footer(); ?>
