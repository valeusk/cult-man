<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cult-man
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-lg-4 col-md-4">
    <div class="row">
        <aside id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside>
        <!-- #secondary -->
    </div>
    <!-- row -->
</div>
<!-- col-lg-4 -->
