<?php
// First: Get 'category' Terms for current post.
// Then: get $category as a first item from $categories terms array.
$categories = wp_get_post_terms(get_the_ID(), 'category');
$category = $categories[0];
?>

<div <?php post_class('post_list'); ?>>
	<div class="inner_bg">
		<div class="row">
			<div class="thumbnail col-5 col-lg-4">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('home_slider'); ?>
				</a>
			</div>
			<div class="post_inner col-7 col-lg-8">
				<div class="cats">
					<?php if( $categories ) {
						$i = 0;
						foreach ($categories as $category) {
							$i++;
							echo '<span class="cat"><a href="'. get_term_link( $category, 'category') .'" title="'. $category->name .'">'. $category->name .'</a></span>';
							if( $i != count($categories) ) {
								echo ', ';
							}
						}
					} ?>
				</div>
				
				<h3 class="h4">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_excerpt(); ?>
				</a>
				<div class="meta">
					<div class="meta_item">
						<i class="far fa-user"></i>
						<?php the_author(); ?>
					</div>
					<div class="meta_item">
						<i class="far fa-calendar-alt"></i>
						<?php echo get_the_date(); ?>
					</div>
					<div class="meta_item">
						<i class="far fa-comments"></i>
						<?php echo get_comments_number(); ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>