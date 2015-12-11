<div class="frontpage-top pad">
	
	<?php if ( ot_get_option('front-picture') ): ?>
	<div class="front-picture">
		<img src="<?php echo ot_get_option('front-picture'); ?>" alt="" />
	</div>
	<?php endif; ?>
	
	<?php get_template_part('inc/page-title'); ?>

	<?php while ( have_posts() ): the_post(); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php endwhile; ?>
	
	<?php if ( ot_get_option('front-button-text') && ot_get_option('front-button-link') ): ?>
	<div class="front-button">
		<a href="<?php echo esc_attr( ot_get_option('front-button-link') ); ?>">
			<span><?php echo esc_attr( ot_get_option('front-button-text') ); ?></span>
		</a>
	</div>
	<?php endif; ?>
	
</div>