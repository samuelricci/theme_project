<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package themebase
 */

?>

	</div><!-- #content -->
            <?php
                $layout = get_option( 'layout_main' );
                $layoutabstract = 'Content-abstract';

                if ( $layout === $layoutabstract ) {
                    get_template_part( 'layouts/footer/footer-abstract' );
                } else {
                    get_template_part( 'layouts/footer/footer-regular' );
                }
             ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
