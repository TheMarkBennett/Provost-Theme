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
	<div class="ucf-breadcrumbs mt-4">	 <?php if(function_exists("seopress_display_breadcrumbs")) { seopress_display_breadcrumbs(); } ?> </div>
	 <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
 	<?php if ( have_posts() ): ?>
	 	<h3 class="mt-4"> Current Task Forces </h3>
 		<?php while ( have_posts() ) : the_post(); ?>
		 <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );?>
 		<article class="<?php echo $post->post_status; ?> post-list-item mt-4 mb-4 row  " style="background-color:#f1f1f1;">
		
			<div class="col-md-7 py-5 px-5">
 			<h2 class="h3 text-secondary">
 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 			</h2>
 			<div class="summary">
 				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="">Learn More >></a>
 			</div>
		</div>
 		</article>
 		<?php endwhile; ?>
 	<?php else: ?>
 		<p>No results found.</p>
 	<?php endif; ?>
 </div>

 <?php get_footer(); ?>
