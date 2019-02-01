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
	
 	<?php if ( have_posts() ): ?>
	 	<h3 class="mt-4 heading-underline row"> Current Task Forces </h3>
		 <ul class="initiatives-list list-unstyled">
 		<?php while ( have_posts() ) : the_post(); ?>
		 <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
 		<article class="<?php echo $post->post_status; ?> post-list-item mt-4 mb-4 row  ">
		
			<li class="pb-3 initiatives ">
 			<h2 class="h3 text-secondary">
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
 	<?php else: ?>
 		<p>No results found.</p>
 	<?php endif; ?>

	 <h3 class="mt-4 heading-underline row"> Completed Task Forces </h3>
 </div>

 <?php get_footer(); ?>
