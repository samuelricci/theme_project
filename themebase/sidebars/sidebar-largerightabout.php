<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'about-largeright' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area largerightabout" role="complementary">
	<?php dynamic_sidebar( 'about-largeright' ); ?>
</div><!-- #secondary -->
