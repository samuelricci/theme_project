<?php get_header(); 

        $layout = get_option( 'layout_main' );
        $layoutleft = 'Content-left';
        $layoutright = 'Content-right';
        $layouttop = 'Content-top';
        $layoutmid = 'Content-mid';
        $layoutcenter = 'Content-center';
        $layoutabstract = 'Content-abstract';
        $layouttiles = 'Content-tiles';
        $layoutlargeright = 'Content-largeright';
        $layoutmanytiles = 'Content-manytiles';

        if ( $layout === $layoutleft ) {
            get_template_part( 'layouts/content/content-left' );
        } elseif ( $layout === $layoutright ) {
            get_template_part( 'layouts/content/content-right' );
        } elseif ( $layout === $layouttop ) {
            get_template_part( 'layouts/content/content-top' );
        } elseif ( $layout === $layoutmid) {
            get_template_part( 'layouts/content/content-mid' );
        } elseif ( $layout === $layoutcenter) {
            get_template_part( 'layouts/content/content-center' );
        } elseif ( $layout === $layoutabstract) {
            get_template_part( 'layouts/content/content-abstract' );
        } elseif ( $layout === $layouttiles) {
            get_template_part( 'layouts/content/content-tiles' );
        } elseif ( $layout === $layoutlargeright) {
            get_template_part( 'layouts/content/content-largeright' );
        } elseif ( $layout === $layoutmanytiles) {
            get_template_part( 'layouts/content/content-manytiles' );
        }

?>



<?php get_footer(); ?>



