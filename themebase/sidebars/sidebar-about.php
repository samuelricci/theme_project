<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'about' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area aboutsidebar" role="complementary">
	<?php dynamic_sidebar( 'about' ); ?>
</div><!-- #secondary -->
