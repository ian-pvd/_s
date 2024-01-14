<?php
/**
 * The template for displaying the site footer
 *
 * @package _s
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="https://github.com/ian-pvd/">ian.pvd</a>' );
			?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
