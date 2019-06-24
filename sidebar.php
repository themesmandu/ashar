<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ashar
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<aside id="sidebar" class="col-md-4">
	<div class="sidebar-content">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</div>
</aside><!-- #secondary -->