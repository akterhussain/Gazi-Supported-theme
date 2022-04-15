<?php
/**
 * Template Name: About Me
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gazi_Theme
 */

get_header();
?>

<div class="content-section extra-padding">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<main class="main-section">
					<div class="row">
						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="page-title">About Me</h1>
							</header><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->	
					<div class="row">
						<div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 offset-lg-1 col-xl-3 offset-xl-1">
							<div class="about-image">
								<img class="about-photo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/akter_hussain.jpg" alt="gazi akter">
								<img class="about-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gazi_akter_black.png" alt="gazi akter">
							</div><!-- about-image -->
						</div><!-- col-xl-6 -->
						<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
							<div class="about-text">
								<h2 class="about-title">Who Am I?</h2>
								<p class="about-para">I'm Gazi Akter, a well-experienced full-stack developer. And have special experience with WordPress theme development and WordPress plugin development. Also, have deep-level experience in small and mid-level enterprise software development by laravel framework in PHP. Have 7 years of working experience in this development area. 
								</p>
								<p class="about-para">
								Have special skills in digital marketing like Technical SEO, On-page SEO, Off-page SEO or Backlink, Keyword research, competitor analysis, SEO Audit, Email marketing, social media marketing, and different types of ads campaigns.
								</p>
								<p class="about-para">
								Expert in PHP, Laravel, WordPress, JavaScript, jQuery, HTML5, CSS3, Bootstrap, SASS, JSON, AJAX, SQL, MySQL, Git, Photoshop, and Illustrator.
								</p>
								<h2 class="about-title">What do I do?</h2>
								<p class="about-para">
								I work in WordPress theme development, WordPress Plugin development,  WordPress Theme Customization, WooCommerce functionality, elementor widget development, WordPress Speed Optimization, PHP Web Application, JPG to WordPress, PSD to WordPress, PSD to Responsive HTML, and, JPG to Responsive HTML.
								</p>
								<p class="about-para">
								The top feature of my or Gazi Akter's service is SEO-friendly, valid, and clean coding. 
								easy coding structure to customization;  fully responsive design like mobile, laptop, desktop, and tab device supported; all browsers supported; maximum time revision and maximum time free support.
								</p>
								<p class="about-para">
								I always focus on client recommendations, quality full service, developing a sustainable product, and 100% satisfaction. 

								</p>
							</div><!-- about-text -->
						</div><!-- col-xl-6 -->
					</div><!-- .row -->
					<div class="row">
						<div class="col-xl-12">
							<footer class="page-footer">
								<nav class="about-menu">
								<ul>
									<li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a target="_blank" href="#"><i class="fab fa-github"></i></a></li>
									<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
								</ul>
								</nav><!-- about-menu -->
							</footer><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->				
				</main><!-- .main-section -->
			</div><!-- col-cl-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
