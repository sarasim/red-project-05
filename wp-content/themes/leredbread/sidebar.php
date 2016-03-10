<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<!-- <aside id="text-2" class="widget">
		<h2 class="widget-title">Contact Into</h2>
		<div class="text-widget">
			<p class="contact-meta"><i class="fa fa-phone"></i><a href="tel:5553434567891"> (555) 343 456 7891</a></p>
			<p class="contact-meta"><i class="fa fa-envelope"></i><a href="mailto: info@leredbread.com"> info@leredbread.com</a></p>
  		<p class="contact-meta"><i class="fa fa-map-marker"></i><span>123 Hastings Street<br> Vancouver, BC V61 2T9, CA</span></p>
    </div>
	</aside> -->
</div><!-- #secondary -->
