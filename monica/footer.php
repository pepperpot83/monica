<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Penscratch 2
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div class="footer-widgets clear">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>

				<?php if ( is_active_sidebar( 'sidebar-3' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>

				<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>
			</div><!-- .sidebar-widgets -->
		<?php endif; ?>
		<div class="site-info-wrapper clear">
			<?php penscratch_2_social_menu(); ?>
			<div class="site-info">
				<a href="<?php //echo esc_url( __( 'http://wordpress.org/', 'penscratch-2' ) ); ?>"><?php // printf( esc_html__( 'Proudly powered by %s', 'penscratch-2' ), 'WordPress' ); ?></a>
				<span class="sep"> ~ </span>
                                
                                <div class="mail">
                                    <p> Monica Ciaghi | Via Monte Stivo, 3 - Valle S. Felice - Mori | Tel 348 4798340 <br />E-mail <a href="mailto:monica.ciaghi@gmail.com">monica.ciaghi@gmail.com</a></p>    
                                    
                                    
                                </div>
				<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'penscratch-2' ), 'Penscratch 2', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .site-info-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
