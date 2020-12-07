<?php
/**
* Template Name: DCTP Sidebar
*
* @package WordPress
* @subpackage DTHA / DCTP
* 
*/
get_header(); ?>
	<div class="dctp-header">
		<div class="container">
			<div class="row">
				<div class="col-3 pt-0">
					<a href="<?php echo get_home_url(); ?>/dctp">
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/11/dctp-logo.png' ) . '" class="float-right img-fluid" width="70" alt="Delaware Certified Thoroughbred Program">';?>
					</a>
				</div>
				<div class="col-9">
					<h3 class="text-left h1 pt-3 dctp--title">Delaware Certified Thoroughbred Program</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container dctp-container">
		<div class="row">
			<div class="col-lg-3 pb-5">
				<?php bellows( 'main' , array( 'theme_location' => 'dctp_menu' ) ); ?>
			</div>
			<div class="col-lg-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1 class="h3"><?php the_title(); ?></h2>

						<?php the_content(); ?>


				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
