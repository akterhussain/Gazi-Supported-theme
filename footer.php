<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gazi_Theme
 */

?>

<footer class="footer-section">
	<section class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
					<div class="footer-content">
						<h2 class="footer-title">Learn More</h2>
						<div class="footer-content-area">
							<nav class="footer-menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'learn_more_menu'
								) );
								?>
							</nav>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->
				<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
					<div class="footer-content">
						<h2 class="footer-title">Post Gallery</h2>
						<div class="footer-content-area">
							<?php 
							get_template_part( 'template-parts/content', 'popular_post_footer' );
							?>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->
				<div class="col-12 col-sm-5 col-md-6 col-lg-2 col-xl-2">
					<div class="footer-content">
						<h2 class="footer-title">Read More</h2>
						<div class="footer-content-area">
							<nav class="footer-menu">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'read_more_menu'
								) );
								?>
							</nav>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->
				<div class="col-12 col-sm-7 col-md-6 col-lg-4 col-xl-4">
					<div class="footer-content">
						<h2 class="footer-title">Contact Me</h2>
						<div class="footer-content-area">
							<nav class="contact-manu">
							<ul>
								<li><i class="fas fa-envelope"></i><a href="mailto:admin@gaziakter.com"> admin@gaziakter.com</a></li>
								<li><i class="fas fa-phone"></i><a href="tel:008801568826898"> ++8801568-826898</a></li>
								<li><i class="fab fa-skype"></i><a href="skype:live:.cid.eeae36e2127ad1ba?chat">gaziakterpro@gmail.com</a></li>
								<li class="li-address"><i class="fas fa-map-marker-alt"></i><span class="address">Gazi Bari, Dakkhin Khar, Dhampti, Debidwar, Cumilla - 5333, Bangladesh</span></li>
							</ul>
							</nav>
						</div>
					</div>	
				</div><!-- .col-xl-3 -->

				
			</div><!-- Row -->
		</div><!-- .container -->
	</section><!-- .top-footer -->

	<section class="button-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-4 col-xl-6">
					<nav class="footer-social">
						<ul>
							<li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-github"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</nav>
				</div><!-- .col-xl-6 -->
				<div class="col-12 col-sm-12 col-md-8 col-xl-6">
					<div class="copyright-text">
						<p>Copyright &copy; 2015 - <?php echo (date('Y')); ?> <a href="https://gaziakter.com/">Gazi Akter.</a> All Rights Reserved.</p>
					</div><!-- .copyright-text -->
				</div><!-- .col-xl-6 -->
			</div><!-- Row -->	
		</div><!-- .container -->
	</section><!-- .button-footer -->
</footer><!-- .footer-section -->

<?php wp_footer(); ?>

</body>
</html>
