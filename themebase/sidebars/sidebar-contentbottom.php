<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'content-bottom' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area content-bottom" role="complementary">
	<?php dynamic_sidebar( 'content-bottom' ); ?>
</div><!-- #secondary -->
