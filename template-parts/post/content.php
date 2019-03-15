<?php
/**
 * Template part for displaying posts
 *
 */

?>

<article  class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-3 mt-sm-2 mb-3 pb-sm-4">
		<header class="entry-header">

			<?php if ( has_post_thumbnail() ): ?>
				<div class="post-thumbnail">
						<?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid' ) ); ?>					
				</div><!-- .post-thumbnail -->
			<?php endif; ?>

		</header><!-- .entry-header -->

	</div>
	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
