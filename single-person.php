<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-3 mt-sm-2 mb-3 pb-sm-4">
        <div class="row">
            <div class="col-md-3">
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium', array( 'class' => 'img-fluid' ));
                    }
                ?>                
            </div>
            <div class="col-md-9">
            <?php if( get_field('person_jobtitle') ): ?>
                <h2 class="h3 mb-3 text-inverse-aw"><?php the_field('person_jobtitle'); ?></h2>               
            <?php endif; ?>
            <?php if( get_field('person_email') ): ?>
                <span class="screen-reader-text">Email: </span>
                <p class="mb-0 font-weight-bold"> <a href="mailto:<?php the_field('person_email');  ?>" class="text-secondary"><?php the_field('person_email'); ?></a></p> 
            <?php endif; ?>      
            <?php if( get_field('person_phone') ): ?>
                <p class="mb-0 font-weight-bold"><a href="tel:<?php the_field('person_phone'); ?>" class="text-secondary"><?php the_field('person_phone'); ?></a></p> 
            <?php endif; ?>
            <div class="faculty-social mt-3">
                <?php if( get_field('person_twitter') ): ?>
                    <a href="https://twitter.com/<?php the_field('person_twitter'); ?>" class="text-decoration-none"> 
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/twitter.png"> 
                    </a>
                <?php endif; ?>
                <?php if( get_field('person_linkedin') ): ?>
                    <a href="<?php the_field('person_linkedin'); ?>" class="text-decoration-none"> 
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/linkedin.png"> 
                    </a>
                <?php endif; ?>
            </div>
             
          </div>
        </div>
        <div class="bio mt-3">
            <?php if( get_field('person_website') && get_field('person_website_url') ): ?>
                <h2>Website</h2>
                <p><a href="<?php the_field('person_website_url'); ?>"><?php the_field('person_website'); ?></a></p>
            <?php endif; ?>
            <?php if( get_field('person_responsibility') ): ?>
                <h2 class="mt-3">Areas of Responsibility</h2>
                <?php the_field('person_responsibility'); ?>
            <?php endif; ?>
            <?php if( get_field('person_biography') ): ?>
                <h2 class="mt-3">Biography</h2>
                <?php the_field('person_biography'); ?>
            <?php endif; ?>
        </div>
	</div>
</article>

<?php get_footer(); ?>
