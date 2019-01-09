<?php


/**
 * Returns the default markup for page headers without a media background.
 *
 * @author Jo Dickson
 * @since 1.0.0
 * @param object $obj A WP_Post or WP_Term object
 * @return string HTML for the page header
 **/

 function ucfwp_get_header_default_markup( $obj ) {
		$title               = ucfwp_get_header_title( $obj );
		$subtitle            = ucfwp_get_header_subtitle( $obj );
		$field_id            = ucfwp_get_object_field_id( $obj );
		$header_content_type = get_field( 'page_header_content_type', $field_id );
		$exclude_nav         = get_field( 'page_header_exclude_nav', $field_id );
		$h1                  = ucfwp_get_header_h1_option( $obj );
		$h1_elem             = ( is_home() || is_front_page() ) ? 'h2' : 'h1'; // name is misleading but we need to override this elem on the homepage
		$title_elem          = ( $h1 === 'title' ) ? $h1_elem : 'span';
		$subtitle_elem       = ( $h1 === 'subtitle' ) ? $h1_elem : 'p';
		$title_classes = 'h1 d-block mt-3 mt-sm-4 mt-md-4 mb-2 mb-md-3';
		$subtitle_classes = 'lead mb-2 mb-md-3';
		ob_start();
	?>
		<?php if ( !$exclude_nav ) { echo ucfwp_get_nav_markup( false ); } ?>

		<?php
		if ( $header_content_type === 'custom' ):
			echo ucfwp_get_header_content_custom( $obj );
		elseif ( $title ):
		?>
		<div class="container">
		<div class="breadcrumbs mt-4"> <?php if(function_exists('seopress_display_breadcrumbs')) { seopress_display_breadcrumbs(); } ?></div>
			<<?php echo $title_elem; ?> class="<?php echo $title_classes; ?>">				
				<?php echo $title; ?>
			</<?php echo $title_elem; ?>>

			<?php if ( $subtitle ): ?>
				<<?php echo $subtitle_elem; ?> class="<?php echo $subtitle_classes; ?>">
					<?php echo $subtitle; ?>
				</<?php echo $subtitle_elem; ?>>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	<?php
		return ob_get_clean();
	}

