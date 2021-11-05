<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoygrid
 */


?>

<aside id="secondary" class="widget-area sidebar">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

<?php } else { ?>

<?php } ?>

</aside><!-- #secondary -->

