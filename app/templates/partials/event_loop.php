<?php
  $args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
  $loop = new WP_Query( $args );
?>

<?php if ( $loop->have_posts() ) : ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  	<?php get_template_part( 'event_item' ); ?>
  <?php endwhile; ?>
  <div class="pagination index">
    <div class="alignleft">
      <?php previous_posts_link( __( '&larr; Uudemmat tapahtumat', 'montage' )); ?>
    </div>
    <div class="alignright">
      <?php next_posts_link( __( 'Vanhemmat tapahtumat &rarr;', 'montage' )); ?>
    </div>
  </div><!--end pagination-->
<?php endif; ?>
