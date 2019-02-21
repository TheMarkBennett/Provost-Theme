<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container mt-3 mt-sm-2 mb-3 pb-sm-4">
		<?php the_content(); ?>

		<?php

		// check for rows (parent repeater)
				if( have_rows('taskforce_tables') ): ?>
					<div class="members">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('taskforce_tables') ): the_row(); ?>
						<div class="row">
							<h3><?php the_sub_field('taskforce_section_title'); ?></h3>
						</div>	
							<?php 

							// check for rows (sub repeater)
							if( have_rows('taskforce_section_members') ): ?>
								<div class="row table-responsive">
									<table class="table table-hover initiative-table">
										<thead class="thead-default ">
											<tr>											
											<th>Name</th>
											<th>Department</th>
											<th>Email</th>
											</tr>
										</thead>
										<tbody>
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('taskforce_section_members') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
									<tr>
										<td>
											<?php the_sub_field('taskforce_member_name'); ?>
										</td>
										<td>
											<?php the_sub_field('taskforce_member_position'); ?>
										</td>
										<td>
											<?php the_sub_field('taskforce_member_email'); ?>
										</td>
									</tr>	
									
								<?php endwhile; ?>
								
							<?php endif; //if( get_sub_field('items') ): ?>
									</tbody>
									</table>
								</div>		

					<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>	
	
</article>

<?php get_footer(); ?>