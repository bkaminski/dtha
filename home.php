<?php get_header(); ?>
<div class="container pt-5">
	<h1>News:</h1>
	<div class="row mt-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-12 mb-4">
			<section>
				<h1 class="tag-link text-uppercase">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
							
					</a>
				</h1>
				<small>Posted on: <?php echo get_the_date(); ?></small>
					<?php the_excerpt(); ?>
					<a class="btn btn-green rounded-0" href="<?php the_permalink(); ?>">Read More</a>
				
				<hr>
			</section>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
