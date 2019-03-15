<?php get_header(); the_post(); ?>
<?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
<?php get_footer(); ?>
