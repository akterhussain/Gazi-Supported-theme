<?php
/**
 * Template part for displaying main content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

?>

<div class="col-12">
	<article class="blog-post">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image') ?></a>
		<div class="blog-text">
			<div class="time-cate">
				<span class="post-time"><?php the_time('F j, Y'); ?></span>
				<span class="post-cate"><?php the_category( ' | ' ); ?></span>
			</div>
			<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</div><!-- blog-text -->
		<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
	</article><!-- .blog-post -->
</div><!-- .col-xl-6 -->