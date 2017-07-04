<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Deneemotion UAE
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row dark get-in-touch">
			<div class="cell">
				<div class="footer-title">Get in touch</div>
				<div class="title-border"></div>
				<div class="footer-contact-info">
					<div class="email">By appointment only<br/><a href="mailto:info@deneemotion.ae"><span></span> info@deneemotion.ae</a></div>
				</div>
			</div>
		</div>

		<div class="row body social">
			<div class="cell">
				<div class="social-icons">
					<div class="container">
						<a href="https://www.facebook.com/deneemotion" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/soc-fb.png" alt="facebook social icon"></a>
						<a href="http://twitter.com/deneemotion" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/soc-twt.png" alt="twitter social icon"></a>
						<a href="http://vimeopro.com/deneemotion/destination" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/soc-vimeo.png" alt="vimeo social icon"></a>
						<a href="https://instagram.com/deneemotion" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/soc-inst.png" alt="instagram social icon"></a>
						<a href="http://uk.linkedin.com/pub/deneemotion-boutique-wedding-cinema/2a/485/70a" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/soc-flink.png" alt="linkedin social icon"></a>
						<a href="http://pinterest.com/deneemotion" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/deneemotion/images/soc-pin.png" alt="pinterest social icon"></a>
					</div>					
				</div>
			</div>
		</div>

		<div class="row black copyright">
			<div class="cell">
				<div class="container">&copy; <?php echo date("Y"); ?> <a href="http://deneemotion.com" target="_blank">DENEE MOTION</a> | All right reserved<br/>Crafted by <a href="https://iriepixel.com" target="_blank">IRIE PIXEL</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
