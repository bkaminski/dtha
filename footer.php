<?php get_template_part('parts/page', 'footer-border'); ?>
<footer class="footer">
	<div class="container pt-3 pb-5">
		<div class="row">
			<div class="col-md-6">
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'footer_menu',
						'depth'             => 2,
						'container'         => '',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				<figure>
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/11/DTHA-logo-2.webp' ) . '" class="img-fluid" alt="Delaware Thoroughbread Horsemens Association">';?>
						
				</figure>
			</div>
			<div class="col-md-6">
				<p class="text-green pt-2">Subscribe to our newsletter</p>
				<form class="form-inline">
					<div class="form-group mb-2">
						<label for="subscribeEmail" class="sr-only">Email Address</label>
						<input type="email" class="form-control rounded-0 mr-4" id="subscribeEmail" placeholder="Enter your email address">
					</div>
					<a type="submit" class="btn btn-green-sm rounded-0 mb-2">Subscribe Now</a>
				</form>
				<ul class="list-inline pt-2 float-right mr-5" style="color:#ccc;">
					<li class="list-inline-item pr-3"><i class="fab fa-facebook-f fa-2x"></i></li>
					<li class="list-inline-item"><i class="fab fa-twitter fa-2x"></i></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
