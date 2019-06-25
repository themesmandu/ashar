<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ashar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="row contact-row">
			<div class="col-md-6 column">
				<div class="column-content">
					<h2 class="contact-heading">Start a new project?</h2>
					<address>
						<h3 class="contact-heading">Visit our studio at</h3>
						<p>2005 Stokes Isle Apt. 896,</p>
						<p>Venaville 10010, USA</p>
					</address>

					<address>
						<h3 class="contact-heading">Message us</h3>
						<p>info@yourdomain.com</p>
						<p>(+68) 120034509</p>
						<?php
							if ( has_nav_menu( 'menu-2' ) ) :
								wp_nav_menu(
									array(
										'theme_location' => 'menu-2',
										'menu_id'        => 'social-menu',
										'menu_class'     => 'social-menu',
									)
								);
							endif;
							?>

					</address>
				</div>
			</div>
			<div class="col-md-6 column">
				<?php
				the_content();
				?>
			</div>
		</div>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'ashar'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'ashar'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->