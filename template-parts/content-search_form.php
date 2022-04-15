<?php
/**
 * Template part for displaying search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gazi_Theme
 */

?>

<div class="search-home">
	<form class="akter-search-from" action="<?php echo home_url('/'); ?>" method="get">
		<input class="input-search-text" type="search" placeholder="Search keyword..." name="s" required>
		<input type="submit" name="" value="Search">
	</form>
</div>

