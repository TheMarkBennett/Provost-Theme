<?php

if(is_singular('post') ):

  get_header('newsroom');

else:
get_header();

endif;


the_post(); ?>
<?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
<?php get_footer(); ?>
