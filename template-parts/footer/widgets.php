<?php
/**
 * Footer widgets
 *
 * @package Ashar
 */

$active = array();
for ($i = 1; $i <= 4; $i++) {
	if (is_active_sidebar('footer-' . $i)) {
		$active[] = $i;
	}
}

if (0 === count($active)) {
	return;
}
?>

<div class="overlay"></div>
<div id="footer-widgets" class="row">
	<?php foreach ($active as $ashar_id) : ?>
		<?php dynamic_sidebar('footer-' . $ashar_id); ?>
	<?php endforeach; ?>
</div><!-- #footer-widgets -->
<button class="up-btn" id="up-btn" title="<?php echo esc_html(__('Go to top', 'ashar')); ?>" style="display: block;"><i class="fas fa-chevron-up"></i></button>