<?php

// Template Name: Gallery Single Page

get_header(); ?>

<body>
	<div class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-fx="scrollHorz">
		<?php if( have_rows('slider') ){
			while( have_rows('slider') ){
				the_row(); ?>
				<div class="slide">
					<img src="<?php the_sub_field('image'); ?>">
				</div><?php
			}
		} ?>
	</div>
	<div id="content">
		<div class="wrap">
			<div class="single-gallery">
				<div class="current-image">
					<img>
				</div>
				<div class="pager cycle-slideshow" data-cycle-fx=carousel data-cycle-slides=".carousel-slide">
					<?php if( have_rows('images') ){
						while( have_rows('images') ){
							the_row(); ?>
							<div class="carousel-slide">
								<img src="<?php the_sub_field('image'); ?>">
							</div><?php
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
</body>

?>