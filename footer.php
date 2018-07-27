<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ianpvd
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__wrapper">
			<div class="site-info copyright">
				<span class="copyright__author">
					<a href="https://pvdind.com/"><?php echo get_bloginfo( 'name' ); ?></a>
				</span>
				<span class="copyright__year">1985 &ndash; 2018</span>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part( 'template-parts/footer-includes' ); ?>

</body>
</html>
