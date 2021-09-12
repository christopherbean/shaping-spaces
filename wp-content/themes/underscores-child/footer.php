<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="content-wrapper">
            <nav class="social-media-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'social-media-menu')); ?>
            </nav>
            <div class="footer-copyright">&copy;
                <?php echo date_i18n(
                            /* translators: copyright date format, see https://www.php.net/date */
                            _x( 'Y', 'copyright date format', 'underscores')
                );
                ?>
                
                <a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
            
            </div> <!-- .footer-copyright -->
            <div class="developer-credits">
                <p>Website by <a href="https://www.chrisbeandev.com">Chrisbeandev.com</a></p>
            </div>
        </div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
