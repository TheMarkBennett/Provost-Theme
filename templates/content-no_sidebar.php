		<?php // hooks will be coming ?>
		<?php
		$width = '';
			if( get_field('ucf_theme_sidebar') != "no_sidebar" ):
				$width = 'col-12 col-md-9';
			endif;
		?>
  <div class="content-area primary <?php echo $width ?>">
    <div class="entry-content">
		    <?php the_content(); ?>
    </div>
  </div>
