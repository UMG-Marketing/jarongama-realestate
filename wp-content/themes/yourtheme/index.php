<?php get_header(); ?>

	<main role="main">
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>

		<?php get_template_part('template-parts/home/nblinks'); ?>
	</main>


<?php get_footer(); ?>
