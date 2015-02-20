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
	</div>
	<div id="content" <?php if( !get_field('slider') ){ ?>
								class="no-slider"<?php
							} ?>>
		<div class="wrap">
			<div class="page-main-content">
				<?php if( have_posts() ){
					while( have_posts() ){
						the_post();
						the_content();
					}
				} ?>
			</div>
			<div class="page-sidebar">
				<?php
				$children = get_pages('child_of='.$post->ID);
				 if( count( $children ) != 0 ){ ?>
				 	<div class="widget int-menu">
				 		<?php $args = array(
				 			'post_type' => 'page',
				 			'post_parent' => $post->ID
				 			);
				 		$query = New WP_Query($args);
				 		if( $query->have_posts() ){
				 			while( $query->have_posts() ){
				 				$query->the_post(); ?>
				 				<li>
				 					<a href="<?php the_permalink(); ?>">
				 						<?php the_title(); ?>
				 					</a>
				 				</li><?php
				 			}
				 		} ?>
				 	</div><?php
				 }
				 elseif( is_page() && $post->post_parent > 0 ){ ?>
				 	<div class="widget int-menu">
				 		<?php $args = array(
				 			'post_type' => 'page',
				 			'post_parent' => $post->post_parent
				 			);
				 		$query = New WP_Query($args);
				 		if( $query->have_posts() ){
				 			while( $query->have_posts() ){
				 				$query->the_post(); ?>
				 				<li>
				 					<a href="<?php the_permalink(); ?>">
				 						<?php the_title(); ?>
				 					</a>
				 				</li><?php
				 			}
				 		} ?>
				 	</div><?php
				 } ?>
				<div class="box contact">
					<h2><?php the_field('contact_headline', 'option'); ?></h2>
					<div class="phone"><?php the_field('phone', 'option'); ?></div>
					<div class="email"><?php the_field('email', 'option'); ?></div>
					<?php if( have_rows('links', 'option') ){
						while( have_rows('links', 'option') ){
							the_row(); ?>
							<a class="link" href="<?php the_sub_field('link'); ?>">
								<?php the_sub_field('text'); ?>
							</a><?php
						}
					} ?>
					<div class="social">
						<?php if( have_rows('social_icons', 'option') ){
							while( have_rows('social_icons', 'option') ){
								the_row(); ?>
								<a href="<?php the_sub_field('link'); ?>">
									<img src="<?php the_sub_field('icon'); ?>">
								</a><?php
							}
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
</body>

?>