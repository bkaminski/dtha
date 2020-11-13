<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand order-md-last" href="<?php echo get_home_url(); ?>">
			<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/11/DTHA-logo-2.webp' ) . '" class="img-fluid" alt="Delaware Thoroughbread Horsemens Association">';?>
	                		
	    </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dthaNavbar" aria-controls="dthaNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="dthaNavbar">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => '',
				'container_class'   => '',
				'container_id'      => '',
				'menu_class'        => 'navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
	    </div>
	</div>
 </nav>