<div class="jockey-blog-posts">
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-md-6">
				<h5 class="text-green font-weight-bold"><?php the_field('jockey_list_title'); ?></h5>
				<figure>
					<img class="img-fluid" src="<?php the_field('jockey_list_image'); ?>" alt="<?php the_field('jockey_list_img_alt'); ?>" />
				</figure>
			</div>
			<div class="col-md-6">
				<?php
				// the query
				$the_query = new WP_Query( array(
					'category_name' => 'news',
					'posts_per_page' => 2,
				)); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php 
						$featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						
						?>
						<img src="<?php echo $featImg['0'];?>" class="img-fluid pb-2" alt="" />
						<br />
						<h4 class="text-green text-uppercase"><?php the_title(); ?></h4>
						<div class="row pb-3">
							<div class="col-md-8">
								<?php the_excerpt(); ?>
									
							</div>
							<div class="col-md-4">
								<a class="btn btn-green btn-block rounded-0" href="<?php the_permalink(); ?>">Read More</a>

							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php __('No News'); ?></p>
					<?php endif; ?>
			</div>
		</div>
	</div>
</div>