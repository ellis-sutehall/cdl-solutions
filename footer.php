<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cdl-solutions
 */

?>

	<footer class="footer">
	<div class="container">
		<div class="columns">
			<div class="column is-one-third">
				<img src="<?php echo get_template_directory_uri() . '/dist/img/cdl-solutions-footer-logo-white.svg' ?>" alt="CDL Solutions Logo" width="300">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="column is-one-third">
				<h3 class="title is-3">Contact Info</h3>
				<p><span class="dark-blue-text">T</span> 012345678</p>
				<p><span class="dark-blue-text">E</span> info@example.com</p>
				<div class="social-icons">
					<a href="#" target="_blank" rel="norefferer">
						<img src="<?php echo get_template_directory_uri() . '/dist/img/icons/facebook-icon.svg' ?>" alt="Facebook Icon" width="30">
					</a>
					<a href="#" target="_blank" rel="norefferer">
						<img src="<?php echo get_template_directory_uri() . '/dist/img/icons/twitter-icon.svg' ?>" alt="Twitter Icon" width="30">
					</a>
					<a href="#" target="_blank" rel="norefferer">
						<img src="<?php echo get_template_directory_uri() . '/dist/img/icons/linkedin-icon.svg' ?>" alt="LinkedIn Icon" width="30">
					</a>
				</div>
			</div>
			<div class="column is-one-third">
			<h3 class="title is-3">Contact Form</h3>
				<?php echo do_shortcode('[contact-form-7 id="8" title="Contact Form Footer"]'); ?>
			</div>
		</div>
	</div>
	</footer>
	<section class="section sub-footer">
		<div class="container">
			<div class="copyright">
				<p><span class="link-blue-text">Copyright &copy; <?php echo Date('Y'); ?> CDL Solutions Ltd.</span> All Rights Reserved.</p>
			</div>
			<div class="credit">
				<p>Website by <a class="link-blue-text" href="https://www.redgraphic.co.uk/" target="_blank" rel="norefferer">Red Graphic</a></p>
			</div>
		</div>
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
