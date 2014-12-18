<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 */
?>
	</div><!-- #main -->
</div></div>
	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
<div id="siteinfo">
			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'celine_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://codepuzzle.net/?page_id=109', 'celine' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'celine' ); ?>" rel="generator">Celine Theme <?php printf( __( 'Proudly powered by %s.', 'celine' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->
</div>
		</div><!-- #colophon -->
	</div><!-- #footer -->

<!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
