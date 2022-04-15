<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gazi_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-6 col-xl-4 col-lg-3 col-md-6">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div><!-- .col-xl-4 -->
				<div class="col-6 col-xl-8 col-lg-9 col-md-6">
					<div class="primary-menu-area">
						<div class="main-menu">
							<nav>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'primary_menu'
								) );
								?>
							</nav><!-- .main-menu -->
						</div>
						<div class="mobile-menu-area">
						<button id="mobile_menu_btn" class="top-search-btn"><i class="fas solid fa-bars"></i></button>
							<div class="mobile-menu">
								<nav>
									<?php
									wp_nav_menu( array(
										'theme_location' => 'primary_menu'
									) );
									?>
								</nav><!-- .main-menu -->
								<div class="menu-hide"></div>
							</div>
						</div>

					</div><!-- primary-menu -->
					<div class="top-search-area">
						<button id="search-btn" class="top-search-btn"><i class="fas fa-search"></i></button>
						<div class="search-content">
							<?php
							// Template for search form
							get_template_part( 'template-parts/content', 'search_form' );
							?>
							<div class="search-hide"></div>
						</div>
					</div>
				</div><!-- .col-xl-8 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .header-section -->





