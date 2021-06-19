<?php
/**
 * The template for displaying the footer.
 *
 * @package vinyl
 * @since vinyl 1.0
 */
?>

		</div><!-- #content -->

	</div><!-- .container -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">

			<div class="site-info">

				<?php if ( get_theme_mod( 'vinyl_footer' ) ) : ?>
					
					<?php echo get_theme_mod( 'vinyl_footer' ); ?>
				
				<?php else : ?>
					
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'vinyl' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'vinyl' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<a href="<?php echo esc_url( __( 'http://hipstertheme.com', 'vinyl' ) ); ?>" rel="designer"><?php printf( __( 'Theme: %1$s by %2$s.', 'vinyl' ), 'Vinyl', 'Hipster Theme' ); ?></a>
				
				<?php endif; ?>

			</div><!-- .site-info -->

		</div><!-- .container -->
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
