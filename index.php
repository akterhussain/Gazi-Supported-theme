<?php
/**
 * 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gazi_Theme
 */

    get_header( 'home' );
?>

<main class="home-page">
	<div class="container">
		<div class="col-12">
			<div class="home-content">
				<div class="home-photo">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/akter_photo.png" alt="gazi akter">
				</div>
				<div class="home-logo">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Gazi_Akter.png" alt="gazi akter">
				</div>
				<div class="home-text">
					<p>Expert WordPress theme and plugin developer. Web Application developer by laravel and have well experience in the digital marketing area. Working in WordPress theme and plugin development, WordPress theme customization, and website speed optimization.</p>
				</div>
				<div class="home-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'home_menu'
					) );
				?>
				</div>						
			</div>
		</div>
	</div>
</main>

<?php
    get_footer( 'home' );
