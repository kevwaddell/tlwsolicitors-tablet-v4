<?php
global $page_icon;
global $page_links;
global $feedback_active;
global $how_it_works_active;
global $freephone_num;
global $number_pos;
$parent = get_page($post->post_parent);
$form_active = get_field('form_activated');

//echo '<pre>';print_r($parent->post_parent);echo '</pre>';

if ($parent->post_parent == 0) {
$post_ID = $post->post_parent;
} else {
$post_ID = $parent->post_parent;	
}	
/*
CHECK FOR FREEPHONE POSITION
Remove or keep number 
depending on orientation
*/
$sb_visible = "";
if ($number_pos == 'bottom') {
$sb_visible = ' hidden-sm hidden-md';	
}	
if ($number_pos == 'sidebar') {
$sb_visible = ' hidden-sm';	
}	

$feedback_args = array(
	'posts_per_page'   => 1,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand',
); 
$feedback_quote = get_posts($feedback_args); 

$child_args = array(
'sort_column' => 'menu_order',
'parent'	=> $post_ID
); 

$children = get_pages($child_args);
?>
<aside class="sidebar col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
	
	<?php if ($form_active) : 
	$form = get_field('form');	
	?>
	<div class="contact-form sb-form form-closed hidden-sm">
		<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.php'); ?>	
		<h3 class="icon-header">Make a claim enquiry <i class="fa fa-arrow-circle-down fa-lg"></i></h3>
		
		<?php gravity_form($form->id, false, true, false, null, true); ?>
					
	</div>	
	
	<?php endif; ?>
	
	<p class="tel-num tel-num-<?php echo (!empty($color)) ? $color : 'red'; ?><?php echo $sb_visible; ?>">Call us <span>free <a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event','Freephone click', 'tap', '<?php echo $post->post_title; ?> - Call back')" title="Call us now"><?php echo $freephone_num; ?></a></span></p>
	
	<?php if ($how_it_works_active) { ?>	
	<div class="how-it-works-link">
		<a href="#how-it-works" class="hiw-link">
			<span class="txt-mid">The Claims Process</span>
			<span class="txt-lg">How it Works</span>
			<span class="txt-sml">Click here for more information</span>
		</a>
	</div>
	<?php } ?>
	
	<?php if (!empty($children)) { ?>
	<div class="menu-collapse closed">
	<a name="sb-menu-collapse" id="sb-menu-collapse"></a>
	<button class="sb-menu-btn btn btn-default btn-block">Services Menu</button>
		<ul class="list-unstyled menu-links">
			
			<?php foreach ($children as $child) { 
			$g_child_args = array(
			'sort_column' => 'menu_order',
			'parent'	=> $child->ID
			); 

			$g_children = get_pages($g_child_args);
			?>
			<li class="page_item page-item-<?php echo $child->ID; ?><?php echo ($post->ID == $child->ID) ? ' current_page_item':''; ?><?php echo (!empty($g_children)) ? ' page_item_has_children':''; ?><?php echo (!empty($g_children) && ($post->post_parent == $child->ID || $post->ID == $child->ID) ) ? ' view-children':' hide-children'; ?>">
				<a href="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a>
				
				<?php if (!empty($g_children)) { ?>
					<ul class="children">
						<li class="page_item page-item-<?php echo $child->ID; ?><?php echo ($post->ID == $child->ID) ? ' current_page_item':''; ?>"><a href="<?php echo get_permalink($child->ID); ?>">Overview</a></li>
						<?php foreach ($g_children as $g_child) { ?>
						<li class="page_item page-item-<?php echo $g_child->ID; ?><?php echo ($post->ID == $g_child->ID) ? ' current_page_item':''; ?>"><a href="<?php echo get_permalink($g_child->ID); ?>"><?php echo get_the_title($g_child->ID); ?></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
			</li>
			<?php } ?>	
			
		
		</ul>
	
	</div>
	<?php } ?>	
						
</aside>