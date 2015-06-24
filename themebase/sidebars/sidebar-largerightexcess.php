<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'excess-largeright' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area largerightexcess" role="complementary">
	<?php dynamic_sidebar( 'excess-largeright' ); ?>
</div><!-- #secondary -->
