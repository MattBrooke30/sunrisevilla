<?php

// Template Name: Gallery Parent Page

get_header(); 

$this_page_id = $wp_query->post->ID;

?>

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
			<?php if( have_posts() ){
				while( have_posts() ){
					the_post(); ?>
					<h1 class="page-title"><?php the_title(); ?></h1><?php
				}
			} wp_reset_query(); ?>
			<div class="gallery-selection">
				<div class="wrap">
					<?php $args = array(
						'post_type' => 'page',
						'post_parent' => $this_page_id
						);
					$query = New WP_Query($args);
					if( $query->have_posts() ){
						while( $query->have_posts() ){
							$query->the_post(); ?>
							<div class="gallery-box"><?php
								if( has_post_thumbnail() ){ ?>
									<a href="<?php the_permalink(); ?>"</a><?php the_post_thumbnail('gallery'); ?></a><?php
								} ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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