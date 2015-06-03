<?php if ($how_it_works_active) { ?>	
	<div id="how-it-works" class="hidden panel-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		
		<button id="close-how-it-works"><span class="sr-only">Close</span><i class="fa fa-times fa-2x"></i></button>
		
		<div id="jmpress">
			<?php include (STYLESHEETPATH . '/_/inc/how-it-works/how-it-works-panel.php'); ?>
		</div>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jmpress/0.4.5/jmpress.all.min.js"></script>
		
	</div>
<?php } ?>
