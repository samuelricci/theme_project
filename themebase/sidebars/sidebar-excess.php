<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'excess' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area excess-sidebar" role="complementary">
	<?php dynamic_sidebar( 'excess' ); ?>
</div><!-- #secondary -->
