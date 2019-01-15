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
	 <?php if(function_exists("seopress_display_breadcrumbs")) { seopress_display_breadcrumbs(); } ?>
	 <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
 	<?php if ( have_posts() ): ?>
 		<?php while ( have_posts() ) : the_post(); ?>
 		<article class="<?php echo $post->post_status; ?> post-list-item mt-4 mb-4 row no-gutters " style="background-color:#f9f9f9;">
			<div class="col-md-4">
			<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></a>
			<?php endif; ?>
		</div>
			<div class="col-md-8 py-5 px-5 align-self-center text-center">
 			<h2 class="h3">
 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 			</h2>
 			<div class="summary">
 				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
 			</div>
		</div>
 		</article>
 		<?php endwhile; ?>
 	<?php else: ?>
 		<p>No results found.</p>
 	<?php endif; ?>
 </div>

 <?php get_footer(); ?>
