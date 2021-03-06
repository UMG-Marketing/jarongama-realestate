<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

				<nav class="header-nav position-fixed w-100" role="navigation">

					<div class="container h-100 w-100">
						<div class="d-flex align-items-center w-100 h-100 position-relative">


						<!-- mobile -->

							<div class="mr-auto h-100">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/jaron.png" class="jaron-logo position-absolute mx-auto" alt="Jaron Gama Real Estate Specialist">
								</a>
							</div>
							<div class="ml-auto d-md-none align-self-center">
								<?php get_template_part('template-parts/burgermenu'); ?>
							</div>
						<!-- /end mobile -->
						</div>
					</div>
					
				</nav>
				
			</header>
			<!-- /header -->
