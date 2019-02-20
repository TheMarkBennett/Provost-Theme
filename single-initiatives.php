<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-3 mt-sm-2 mb-3 pb-sm-4">
		<?php the_content(); ?>

	<?php

		// check if the repeater field has rows of data
		if( have_rows('taskforce_tables') ): ?>
			<div class="ucf_members">

			<?php// loop through the rows of data
			while ( have_rows('taskforce_tables') ) : the_row();?>

			<div class="row">
				<h2> <?php	the_sub_field('taskforce_section_title');?>	</h2>
			</div>	

				<?php if( have_rows('taskforce_section_members') ): ?>
				<?php while ( have_rows('taskforce_section_members') ) : the_row();?>
				<div class="row">
					<div class="col-12 col-md-4">
						<?php	the_sub_field('taskforce_member_name');?> 
					</div>
					<div class="col-12 col-md-4">
						<?php	the_sub_field('taskforce_member_position');?>
					</div>	
					<div class="col-12 col-md-4">
						<?php	the_sub_field('taskforce_member_email');?>
					</div>	
				</div>
				<?php endwhile;?>
	

				<?php endif; ?>

			<?php endwhile;?>
			</div>		
		<?php endif; ?>		
	
</article>

<?php get_footer(); ?>