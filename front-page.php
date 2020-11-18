<?php get_header(); ?>

	<header>
		<?php get_template_part('parts/home', 'carousel'); ?>

	</header>

	<main>
		<?php get_template_part('parts/home', 'main'); ?>
	
	</main>

	<section>
		<?php get_template_part('parts/home', 'quick-links'); ?>

	</section>

	<section>
		<?php get_template_part('parts/home', 'card-deck'); ?>

	</section>

	<section>
		<?php get_template_part('parts/home', 'jockey-blog-posts'); ?>

	</section>

	<section>
		<?php get_template_part('parts/home', 'image-blocks'); ?>

	</section>

<?php get_footer(); ?>
