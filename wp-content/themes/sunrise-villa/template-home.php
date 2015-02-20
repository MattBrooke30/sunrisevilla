<?php

// Template Name: Homepage

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
		<div class="cycle-pager"></div>
	</div>
	<div id="content">
		<div class="wrap">
			<div class="box top">
				<div class="col-1">
					<h1><?php the_field('top_box_headline'); ?></h1>
					<p><?php the_field('top_box_text'); ?></p>
					<a class="button" href="<?php the_field('top_box_button_link'); ?>">
						<?php the_field('top_box_button_text'); ?>
					</a>
				</div>
				<div class="col-2"><img src="<?php the_field('top_box_image'); ?>"></div>
			</div>
			<div class="sidebar">
				<div class="box map">
					<?php the_field('map_embed'); ?>
				</div>
				<div class="box contact">
					<h2><?php the_field('contact_headline'); ?></h2>
					<div class="phone"><img src="/wp-content/themes/sunrise-villa/assets/img/phone.png"><?php the_field('phone'); ?></div>
					<div class="email"><img src="/wp-content/themes/sunrise-villa/assets/img/email.png"><?php the_field('email'); ?></div>
					<?php if( have_rows('links') ){
						while( have_rows('links') ){
							the_row(); ?>
							<a class="link" href="<?php the_sub_field('link'); ?>">
								<?php the_sub_field('text'); ?>
							</a><?php
						}
					} ?>
					<div class="social">
						<?php if( have_rows('social_icons') ){
							while( have_rows('social_icons') ){
								the_row(); ?>
								<a href="<?php the_sub_field('link'); ?>">
									<img src="<?php the_sub_field('icon'); ?>">
								</a><?php
							}
						} ?>
					</div>
				</div>
			</div>
			<div class="content-area">
				<div class="box letter">
					<img src="<?php the_field('box_1_image'); ?>">
					<div class="text">
						<h2><?php the_field('box_1_headline'); ?></h2>
						<p><?php the_field('text'); ?></p>
					</div>
				</div>
				<div class="box info">
					<?php the_field('content'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
</body>