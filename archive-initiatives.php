<?php

/**
 * Template Name: Initiatives Template
 * Description: Used as a page template to show page contents, followed by a loop through a CPT archive
 */?>
<?php get_header(); ?>

<?php

function grd_custom_archive_title( $title ) {
	// Remove any HTML, words, digits, and spaces before the title.
	return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'grd_custom_archive_title' );
 ?>

 <div class="container mt-4 mb-5 pb-sm-4 ">
	<?php 
	$args = array(
	'post_type' => 'initiatives',
	'tax_query' => array(
		array(
			'taxonomy' => 'initiative_status',
			'field'    => 'slug',
			'terms'	   => 'active'			
		),
	),
);
		$the_query = new WP_Query( $args ); ?>
	
 	<?php if ( $the_query->have_posts() ): ?>
	 	<h2 class="mt-4 active-int"> Current Task Forces </h3>
		 <ul class="initiatives-list list-unstyled">
 		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		 <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
 		<article class="<?php echo $post->post_status; ?> post-list-item mt-4 mb-4">
		
			<li class="pb-3 initiatives ">
 			<h3 class="text-secondary">
 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 			</h2>
 			<div class="summary">
 				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="">Learn More >></a>
 			</div>
		</li>
 		</article>
 		<?php endwhile; ?>
		 </ul> 	
 	<?php endif; ?>


	 <?php 
	$args = array(
	'post_type' => 'initiatives',
	'tax_query' => array(
		array(
			'taxonomy' => 'initiative_status',
			'field'    => 'slug',
			'terms'	   => 'completed'			
		),
	),
);
		$the_query1 = new WP_Query( $args ); ?>
	 
	 <?php if ( $the_query1->have_posts() ): ?>
	 	<h2 class="mt-4 comp-init"> Completed Task Forces </h3>
		 <ul class="initiatives-list list-unstyled">
 		<?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
		 <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
 		<article class="<?php echo $post->post_status; ?> post-list-item mt-4 mb-4">
		
			<li class="pb-3 initiatives ">
 			<h3 class="text-secondary">
 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 			</h2>
 			<div class="summary">
 				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="">Learn More >></a>
 			</div>
		</li>
 		</article>
 		<?php endwhile; ?>
		 </ul> 	
 	<?php endif; ?>
	 
 </div>

 <?php get_footer(); ?>
