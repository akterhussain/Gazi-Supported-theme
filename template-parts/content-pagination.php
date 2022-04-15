<?php
/**
 * Template part for displaying pagination
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gazi_Theme
 */

?>

<div class="akter-posts-pagination">
	<?php 
	the_posts_pagination( array(
		'screen_reader_text' => __( ' ' ),
		'mid_size' => 2,
		'prev_text' => __( '<', 'gazi-theme' ),
		'next_text' => __( '>', 'gazi-theme' ),
	) );  
	?>
</div><!-- akter-posts-pagination -->