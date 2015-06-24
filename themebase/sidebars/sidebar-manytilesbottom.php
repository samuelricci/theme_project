<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'bottom-manytiles' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area manytilesbottom" role="complementary">
	<?php dynamic_sidebar( 'bottom-manytiles' ); ?>
</div><!-- #secondary -->
