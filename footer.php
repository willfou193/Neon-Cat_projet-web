<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>

	<footer>
		<div id="contenant__footer">
			<div id="contenant__bulles">
				<div class="footer__bulle">1</div>
				<div class="footer__bulle">2</div>
				<div class="footer__bulle">3</div>
				<div class="footer__bulle">4</div>
				<div class="footer__bulle">5</div>
			</div>
		</div>
		<!-- ?php 
		wp_nav_menu(
			array(
				"menu" => "menu_burger"
			)
		);
		?> -->
	</footer><!-- #colophon -->
<!--</div> #page -->

<?php wp_footer(); ?>
</body>
</html>
