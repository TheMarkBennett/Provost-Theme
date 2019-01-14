<?php

/**
 * Template Name: Initiatives Template
 * Description: Used as a page template to show page contents, followed by a loop through a CPT archive 
 */?>

<?php get_header(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item" id="post-<?php the_ID(); ?>">
	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4">     
        <h1><?php the_title() ?> </h1>
		<?php the_content(); ?>
     
     <?php// WP_Query arguments
        $args = array(
            'post_type'              => array( 'initiatives' ),
            'post_status'            => array( 'publish' ),
            'nopaging'               => false,
            'posts_per_page'         => '20',
            'posts_per_archive_page' => '20',
            'order'                  => 'DESC',
            'orderby'                => 'date',
            'cache_results'          => true,
            'update_post_meta_cache' => true,
            'update_post_term_cache' => true,
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>
                    <div class="init-list">
                        <div class="row task-<?php echo get_the_ID(); ?> ">
                        <div class="col-xs-12">
                            <h2><?php the_title(); ?> </h2>
                            <?php the_excerpt(); ?>

                        </div>
                    </div>  
     <?php 
            }
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
    ?>

     
	</div>
</article>

<?php get_footer(); ?>