<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<?php dynamic_sidebar( 'footerfull' ); ?>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
