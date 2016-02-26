<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  <?php get_template_part( 'loop_item' ); ?>
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="pagination index">
			<div class="alignleft">
				<?php previous_posts_link( __( '&larr; Uudemmat uutiser', 'montage' )); ?>
			</div>
			<div class="alignright">
				<?php next_posts_link( __( 'Vanhemmat uutiset &rarr;', 'montage' )); ?>
			</div>
		</div><!--end pagination-->
	<?php else : ?>
<?php endif; ?>