<?php
// First: Get 'category' Terms for current post.
// Then: get $category as a first item from $categories terms array.
$categories = wp_get_post_terms(get_the_ID(), 'category');
$category = $categories[0];
?>

<div <?php post_class('col-xl-2 col-lg-3 col-md-4 col-6 absolute_post_content'); ?>>
	<div class="position-relative">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('home_slider'); ?>
			<div class="post_inner">
				<span class="cat"><?php echo $category->name; ?></span>
				<h3 class="h4"><?php the_title(); ?></h3>
				<span class="meta"><?php echo get_the_date(); ?></span>
			</div>
		</a>
	</div>
</div>