<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-3 mt-sm-2 mb-3 pb-sm-4">
        <?php get_template_part( 'formats/content', get_post_format() ); ?>
	</div>
</article>

<?php get_footer(); ?>
