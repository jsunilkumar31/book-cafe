<div class="entry-meta clear">
	
	<?php if (is_single()) { ?>
		<span class="entry-category"><?php enjoygrid_first_category(); ?></span>
		<span class="entry-author"><?php esc_url( the_author_posts_link() ); ?> &#8212; </span> 		
	<?php } ?>
	<span class="entry-date"><?php echo get_the_date(); ?></span>
	<span class="sep">&middot;</span>
	<span class='entry-comment'><?php comments_popup_link( __('0 Comment','enjoygrid'), __('1 Comment','enjoygrid'), __('% Comments','enjoygrid'), 'comments-link', __('Comments off','enjoygrid')); ?></span>
	
</div><!-- .entry-meta -->