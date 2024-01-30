<?php
/**
 * The site header for our theme
 *
 * @package _s
 */

?>
<header id="masthead" class="site-header">
	<div class="site-header__branding">

		<?php the_custom_logo(); ?>

		<span class="site-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>

		<?php
		$_s_description = get_bloginfo( 'description', 'display' );
		if ( $_s_description || is_customize_preview() ) : ?>

			<p class="site-header__description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

		<?php endif; ?>

	</div><!-- .site-header__branding -->

	<?php get_template_part( 'template-parts/site-navigation' ); ?>
</header><!-- #masthead -->
