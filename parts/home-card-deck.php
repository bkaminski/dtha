<div class="card-row">
	<div class="container pt-5 pb-5">
		<div class="card-deck">
			<div class="card rounded-0">
				<figure>
					<img src="<?php the_field('card_img_1'); ?>" class="card-img-top pt-3 pr-5 pl-5 pb-0" alt="<?php the_field('card_1_alt'); ?>">
				</figure>
				<div class="card-body">
					<h5 class="text-uppercase text-green font-weight-bold"><?php the_field('card_1_title'); ?></h5>
					<p class="card-text"><?php the_field('card_1_text'); ?></p>
				</div>
				<div class="card-footer text-center">
					<a href="#" class="btn btn-lg btn-yellow rounded-0 pr-3 pl-3">Learn More</a>
				</div>
			</div>
			<div class="card rounded-0">
				<figure>
					<img src="<?php the_field('card_img_2'); ?>" class="card-img-top pt-3 pr-5 pl-5 pb-0" alt="<?php the_field('card_2_alt'); ?>">
				</figure>
				<div class="card-body">
					<h5 class="card-title text-green font-weight-bold"><?php the_field('card_2_title'); ?></h5>
					<p class="card-text"><?php the_field('card_2_text'); ?></p>
				</div>
				<div class="card-footer text-center">
					<a href="#" class="btn btn-lg btn-yellow rounded-0 pr-3 pl-3">View Schedule</a>
				</div>
			</div>
			<div class="card rounded-0">
				<figure>
					<img src="<?php the_field('card_img_3'); ?>" class="card-img-top pt-3 pr-5 pl-5 pb-0" alt="<?php the_field('card_3_alt'); ?>">
				</figure>
				<div class="card-body">
					<h5 class="card-title text-green font-weight-bold"><?php the_field('card_3_title'); ?></h5>
					<p class="card-text"><?php the_field('card_3_text'); ?></p>
				</div>
				<div class="card-footer text-center">
					<a href="#" class="btn btn-lg btn-yellow rounded-0 pr-3 pl-3">Read On</a>
				</div>
			</div>
		</div>
	</div>
</div>