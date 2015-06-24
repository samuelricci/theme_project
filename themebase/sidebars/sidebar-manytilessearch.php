<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package themebase
 */

if ( ! is_active_sidebar( 'search-manytiles' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area manytilessearch" role="complementary">
	<?php dynamic_sidebar( 'search-manytiles' ); ?>
</div><!-- #secondary -->
