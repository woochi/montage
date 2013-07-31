<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  <?php get_template_part( 'loop_item' ); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-header">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
					  <?php the_title(); ?>
					</a>
				</h2>
				<p><?php the_time( __( 'F jS, Y', 'montage' ) ); ?></p>
				<p><?php the_author(); ?></p>
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php } ?>
			</div><!--end post-header-->
			<div class="entry">
				<?php the_content( __( 'Read more', 'montage' )); ?>
				<?php edit_post_link( __( 'Edit this', 'montage' ), '<p>', '</p>' ); ?>
			</div><!--end entry-->
			<div class="post-footer">
				<p><?php comments_popup_link( __( 'Leave a comment', 'montage' ), __( '1 Comment', 'montage' ), __( '% Comments', 'montage' ) ); ?></p>
			</div><!--end post-footer-->
		</div><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="pagination index">
			<div class="alignleft">
				<?php previous_posts_link( __( '&larr; Newer entries', 'montage' )); ?>
			</div>
			<div class="alignright">
				<?php next_posts_link( __( 'Older entries &rarr;', 'montage' )); ?>
			</div>
		</div><!--end pagination-->
	<?php else : ?>
<?php endif; ?>