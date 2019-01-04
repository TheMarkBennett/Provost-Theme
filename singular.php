<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
<?php if( get_field('ucf_theme_content_layout') != "container-fluid" || get_field('ucf_theme_sidebar') != "no_sidebar"): ?>
	<div class="<?php the_field('ucf_theme_content_layout'); ?> mt-3 mt-sm-3 mb-5 pb-sm-4">
    <div class="row">
  <?php endif; ?>
      <?php
        if(get_field('ucf_theme_sidebar') == "left_sidebar"): get_sidebar(''); endif; //adds left sidebar
        get_template_part( 'templates/content', 'no_sidebar' ); //content
        if(get_field('ucf_theme_sidebar') == "right_sidebar"): get_sidebar(''); endif; //right sidebar
      ?>
  <?php if( get_field('ucf_theme_content_layout') != "container-fluid" || get_field('ucf_theme_sidebar') != "no_sidebar"): ?>
    </div>
  </div>
<?php endif; ?>
</article>

<?php get_footer(); ?>
