<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="home_slider w-100">
				<?php
				$args = [
					'post_type' => 'post',
					'posts_per_page' => 10,
					'post__in'  => get_option( 'sticky_posts' ),
					'ignore_sticky_posts' => 1
				];
				$slider_query = new WP_Query( $args );
				if( $slider_query->have_posts() ):
					while( $slider_query->have_posts() ):
						$slider_query->the_post();
						get_template_part( 'template-parts/post', 'slider');
					endwhile;
				endif;
				?>
			</div>
			<?php // TODO Slider Loop ?>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-xl-9 col-lg-8">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php // TODO Posts Loop ?>
			</div>
			<div class="col-xs-12 col-xl-3 col-lg-4">
				SideBar...
				<?php // TODO get sidebar ?>
			</div>
		</div>
	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages matched your criteria.', 'cs' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
