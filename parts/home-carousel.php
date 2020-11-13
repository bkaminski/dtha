<div class="dtha-carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php the_field('carousel_image_1');?>" class="d-block w-100" alt="<?php the_field('image_1_alt'); ?>">
            </div>
            <div class="carousel-item">
                <img src="<?php the_field('carousel_image_2');?>" class="d-block w-100" alt="<?php the_field('image_2_alt'); ?>">
            </div>
            <div class="carousel-item">
                <img src="<?php the_field('carousel_image_3');?>" class="d-block w-100" alt="<?php the_field('image_3_alt'); ?>">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>