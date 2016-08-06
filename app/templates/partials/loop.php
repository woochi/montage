<?php
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args = array( 'post_type' => ['post', 'event'], 'posts_per_page' => 10, paged => $paged );
  $loop = new WP_Query( $args );
?>

<?php if ( $loop->have_posts() ) : ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	  <?php get_template_part( 'loop_item' ); ?>
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<div class="pagination index">
		<div class="float-left">
			<?php previous_posts_link( __( '&larr; Uudemmat uutiset ja tapahtumat', 'montage' )); ?>
		</div>
		<div class="float-right">
			<?php next_posts_link( 'Vanhemmat uutiset ja tapahtumat &rarr;', $loop->max_num_pages ); ?>
		</div>
	</div><!--end pagination-->
<?php else : ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
