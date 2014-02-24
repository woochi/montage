<?php
  $args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
  	get_template_part( 'event_item' );
  endwhile;
?>
