<?php get_header(); ?>
<section>
	<div class="container mt-5 mb-5">
	<?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<img src="<?php echo $featImg['0'];?>" class="img-fluid pb-2" alt="" />
		<br />
		<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>


			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div>

</section>
<?php get_footer(); ?>
