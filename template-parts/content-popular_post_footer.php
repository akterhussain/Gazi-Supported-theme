<?php
/**
 * Template part for displaying Pupolar posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gazi_Theme
 */

?>

<section class="popular-post">
	<div class="popular-post-area">
		<div class="row">
			<?php 
							// the query
			$sidebar_popular = new WP_Query( array(

				'post_type' => 'post',
				'posts_per_page' => 2,
				'meta_key' => 'my_post_viewed',
				'orderby' => 'meta_value_num',
				'order'=> 'DESC'
				)); ?>

				<?php if ( $sidebar_popular->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $sidebar_popular->have_posts() ) : $sidebar_popular->the_post(); ?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
							<div class="popular-post-content">
								<div class="popular-left footer-gallery">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image'); ?></a>
								</div><!-- .popular-left -->
							</div><!-- .popular-post-content -->
						</div><!-- .col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 -->
					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, Popular Post not available.', 'gazi-theme'); ?></p>
				<?php endif; ?>
		</div> <!-- row -->
	</div><!-- .popular-post-area -->
</section><!-- .popular-post -->

