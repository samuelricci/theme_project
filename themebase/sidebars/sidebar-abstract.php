<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'content-abstract' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area abstractsidebar" role="complementary">
	<?php dynamic_sidebar( 'content-abstract' ); ?>
</div><!-- #secondary -->
