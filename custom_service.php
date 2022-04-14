<?php
/**
 * Template Name: My Service
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akter_hussain
 */

get_header();
?>

<div class="content-section extra-padding  service-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/service_bg.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<main class="main-section" >
					<div class="row">
						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="page-title">My Services</h1>
							</header><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->	
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-6 offset-lg-6">
							<div class="service-text">
								<ul>
									<li><i class="fas fa-angle-double-right"></i>WordPress Speed Optimization</li>
									<li><i class="fas fa-angle-double-right"></i>WordPress Theme Development</li>
									<li><i class="fas fa-angle-double-right"></i>WordPress Plugin Development</li>
									<li><i class="fas fa-angle-double-right"></i>PHP Web Application</li>
									<li><i class="fas fa-angle-double-right"></i>WordPress Theme Customization</li>
									<li><i class="fas fa-angle-double-right"></i>HTML5 and CSS3 Template Design</li>
									<li><i class="fas fa-angle-double-right"></i>JPG to WordPress</li>
									<li><i class="fas fa-angle-double-right"></i>PSD to WordPress</li>
									<li><i class="fas fa-angle-double-right"></i>PSD to Responsive HTML</li>
									<li><i class="fas fa-angle-double-right"></i>JPG to Responsive HTML</li>
								</ul>
							</div><!-- Skill text -->
						</div><!-- col-xl-6 -->
					</div><!-- .row -->		
				</main><!-- .main-section -->
			</div><!-- col-cl-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
