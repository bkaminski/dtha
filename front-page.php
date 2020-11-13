<?php get_header(); ?>

	<?php get_template_part('parts/page', 'main-nav'); ?>

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

<?php get_footer(); ?>
