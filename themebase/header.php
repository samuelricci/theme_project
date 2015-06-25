<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package themebase
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php echo get_option('site_title'); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_the_guid( get_option( 'favicon_img' )); ?>" />

<?php   
    if ( $layout === $layoutleft ) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layoutleft.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layoutright ) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layoutright.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layouttop ) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layouttop.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layoutmid) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layoutmid.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layoutcenter) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layoutcenter.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layoutabstract) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-abstract.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layouttiles) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layouttiles.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layoutlargeright) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layoutlargeright.css' ) ?>" type="text/css" media="screen" /> <?php
    } elseif ( $layout === $layoutmanytiles) {
        ?> <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/layouts/css/style-layoutmanytiles.css' ) ?>" type="text/css" media="screen" /> <?php
    }
?>
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php 
        $layout = get_option( 'layout_main' );
        $layoutcenter = 'Content-center';
        $layoutabstract = 'Content-abstract';
        $layouttiles = 'Content-tiles';
        $layoutlargeright = 'Content-largeright';
        $layoutmanytiles = 'Content-manytiles';

        if ( $layout === $layoutcenter ) {
            get_template_part( 'layouts/header/header-sidebar' );
        } elseif ($layout === $layoutabstract) { 
            get_template_part( 'layouts/header/header-abstract' );
        } elseif ($layout === $layouttiles) { 
            get_template_part( 'layouts/header/header-tiles' );
        } elseif ($layout === $layoutlargeright) { 
            get_template_part( 'layouts/header/header-largeright' );
        } elseif ($layout === $layoutmanytiles) { 
            get_template_part( 'layouts/header/header-manytiles' );
        } else {
            get_template_part( 'layouts/header/header-regular' );
        }
    ?>