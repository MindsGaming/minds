<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$class = 'layout minds-channel-layout clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

// navigation defaults to breadcrumbs
$nav = elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));
?>
<div class="inner fixed-inner">
	<div class="minds-fixed-layout">
		<div class="minds-fixed-sidebar-left">
			<?= $vars['sidebar'] ?>
		</div>
		<div class="minds-fixed-content">		
			<div class="main body elgg-main elgg-body">
				<?php
					if (isset($vars['content'])) {
						echo $vars['content'];
					}
				?>
			</div>
			<div class="footer elgg-footer">
				<?php 
					if(isset($vars['footer'])){
						echo $vars['footer'];
					}
				?>
			</div>
		</div>
	</div>
</div>
