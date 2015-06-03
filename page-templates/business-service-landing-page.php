<?php 
/*
Template Name: Business Service Landing page template
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
			$download_active = get_field('download_active');
			$form_active = get_field('form_activated');
			$color = get_field('page_colour');
			$page_icon = get_field('page_icon');
			$page_links = get_field('page_links');
			$on_page_script = get_field('on_page_script');
			$main_title = get_field('main_title');
			$feedback_active = get_field('feedback_active'); 
			$how_it_works_active = get_field('hiw_active');
			
			if (empty($number_pos)) {
			$number_pos = "bottom";	
			}
			
			if ($page_icon == 'null' || !$page_icon) {
			$parent = get_page($post->post_parent);
			$grand_parent = $parent->post_parent;
			$page_icon = get_field('page_icon', $post->post_parent);
				if ($page_icon == 'null' || !$page_icon) {
				$page_icon = get_field('page_icon', $grand_parent);	
				}
			}
			
			//echo '<pre>';print_r($page_icon);echo '</pre>';
			?>	
	<div class="title-banner bg-col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		<div class="container-fluid">
			Services for <span class="bold"><?php the_title(); ?></span>
		</div>
	</div>
				
	<?php if ( has_post_thumbnail() ) { ?>
	
		<?php include (STYLESHEETPATH . '/_/inc/business-service-page/banner-feat-img.php'); ?>
		
	<?php } ?>
	
	<a name="main-content" id="main-content"></a>
	<div class="container-fluid">
	
		<div class="content">

			<?php if (!empty($on_page_script)) { ?>
			<?php echo $on_page_script; ?>
			<?php } ?>
			
			<main class="page-col-<?php echo (!empty($color)) ? $color : 'red'; ?> animated fadeIn">
					 	
			 	<article <?php post_class(); ?>>
				 	
				 	<div class="row">
					 	
					 	<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-0">
					 	
						 	<div class="entry wide-entry">
	
								<div class="main-txt">
								<?php the_content(); ?>
								</div>
								
								<?php include (STYLESHEETPATH . '/_/inc/business-service-page/footer-info.php'); ?>
							
						 	</div>
						
					 	</div>
					 	
					 	<?php get_template_part( 'parts/sidebars/sidebar', 'biz-landing-page' ); ?>
					 			
				 	</div>
				
				</article>
							 	
			</main>

	</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
	
	<?php include (STYLESHEETPATH . '/_/inc/service-page/how-it-works.php'); ?>
						
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
