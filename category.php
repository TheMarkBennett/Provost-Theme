<<?php get_header(); ?>

<div class="container mt-4 mb-5 pb-sm-4">
	<div class="row">
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post(); ?>			
		<article class="<?php echo $post->post_status; ?> post-list-item mb-4">
			<div class="row">
				<div class="col-12">
					<div class="meta">
						<span class="date text-muted text-uppercase letter-spacing-3"><?php the_time( 'F j, Y' ); ?></span>
					</div>
					<h2 class="h3">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					
					<div class="summary">
						<?php the_excerpt(); ?>
					</div>
				</div>	
			</div>
		</article>
		<?php endwhile; ?>
	<?php else: ?>
		<p>No results found.</p>
	<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>