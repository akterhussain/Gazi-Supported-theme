<?php
/**
 * Template Name: Contact Me
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

<div class="content-section extra-padding contact-overflow">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<main class="main-section">
					<div class="row">
						<div class="col-xl-12">
							<header class="page-header">
								<h1 class="page-title">Contact Me</h1>
							</header><!-- page-header -->
						</div><!-- col-xl-12 -->
					</div><!-- .row -->	
					<div class="row">
							<div class="col-12 col-sm-12 col-md-8 offset-md-2 offset-lg-0 col-lg-6 col-xl-6">

							<div class="contact-content">
								<?php echo do_shortcode('[contact-form-7 id="89" title="my_contact form"]'); ?>
							</div><!-- contact-content -->
						</div><!-- col-xl-6 -->

						<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
							<div class="contact-over">
							<div class="contact-icon">
								<ul>
								<li><i class="fas fa-envelope"></i><a href="mailto:admin@gaziakter.com"> admin@gaziakter.com</a></li>
								<li><i class="fas fa-phone"></i><a href="tel:008801568826898"> ++8801568-826898</a></li>
								<li><i class="fab fa-skype"></i><a href="skype:live:.cid.eeae36e2127ad1ba?chat">gaziakterpro@gmail.com</a></li>
								<li class="li-address"><i class="fas fa-map-marker-alt"></i><span class="address">Gazi Bari, Dakkhin Khar, Dhampti, Debidwar, Cumilla - 5333, Bangladesh</span></li>
							</ul>
							</div><!-- contact-icon -->
							</div>
						</div><!-- col-xl-6 -->
					</div><!-- .row -->		
				</main><!-- .main-section -->
			</div><!-- col-cl-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
