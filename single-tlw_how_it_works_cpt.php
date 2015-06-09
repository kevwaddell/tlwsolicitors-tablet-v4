<?php get_header(); ?>
	<!-- MAIN CONTENT START -->
	<div class="container-fluid">
	
		<div class="content">

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
			$freephone_num = get_field('freephone_num', 'option');
			$date = get_the_date('l - jS F - Y');	
			$gallery_imgs = get_field('gallery_imgs');	
			$show_feat_img = get_field('show_feat_img');
			$show_author = get_field('show_author');
			if ($show_feat_img) {
			$feat_img_options = get_field('feat_img_options');
			}
			?>	
			<main class="page-col-red animated fadeIn">
				
				<article <?php post_class(); ?>>
					
				<div class="row">
					
					<div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
						<div class="entry wide-entry">
							
							<header class="pg-header">		
								<h1><?php the_title(); ?></h1>
							</header>
			
							<div class="how-it-works-single">
							
							</div>
							
						</div>
					</div>
						
				</div>
			
								
				</article>
				
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
<?php get_footer(); ?>
