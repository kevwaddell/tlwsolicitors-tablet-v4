<?php 
/*
Template Name: Business Services page template
*/
 ?>

<?php get_template_part( 'parts/headers/header', 'for-business' ); ?>
	<!-- MAIN CONTENT START -->
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
	$freephone_num = get_field('freephone_num', 'option');
	$number_pos = get_field('tel_num_position');
	if (empty($number_pos)) {
	$number_pos = "bottom";	
	}
	$page_icon = get_field('page_icon');
	$brochure = get_field('brochure');
	$color = get_field('page_colour');
	$hide_title = get_field('hide_title'); 
	$parent = get_page($post->post_parent);
	$feedback_active = get_field('feedback_active'); 
	$how_it_works_active = get_field('hiw_active');
	
	//echo '<pre>';print_r($page_icon);echo '</pre>';
	
	if ($page_icon == 'null' || !$page_icon) {
	$parent = get_page($post->post_parent);
	$grand_parent = $parent->post_parent;
	$page_icon = get_field('page_icon', $post->post_parent);
		if ($page_icon == 'null' || !$page_icon) {
		$page_icon = get_field('page_icon', $grand_parent);	
		}
	}
	?>	
	
	<?php if ( has_post_thumbnail() ) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/business-service-page/wide-feat-img.php'); ?>
	<?php } ?>
	
	<div class="container-fluid">
	
		<div class="content">
			<!-- PAGE TOP SECTION -->
			<main class="<?php echo (!empty($color)) ? 'page-col-'.$color : 'red'; ?> animated fadeIn">
				
					<article <?php post_class(); ?>>
					
						<div class="row">
			
							<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-0">
								
								<div class="entry wide-entry">
									
									<header class="pg-header">				
										<?php if ($hide_title == 1) { ?>
										<div class="service-tag"><?php echo get_the_title(); ?></div>
										<?php } ?>	
										<?php if ($hide_title != 1) { ?>
										<h1><?php the_title(); ?></h1>
										<?php } ?>
									</header>
									
									<div class="main-txt">
										<?php the_content(); ?>
									</div>
									
									<?php include (STYLESHEETPATH . '/_/inc/business-service-page/footer-info.php'); ?>
																				
								</div>
						
							</div>
							
						<?php get_template_part( 'parts/sidebars/sidebar', 'services-business' ); ?>
						
						</div>
						
					</article>
					
			</main>
			<!-- PAGE TOP SECTION -->
					

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
	
	<?php include (STYLESHEETPATH . '/_/inc/service-page/how-it-works.php'); ?>
	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
