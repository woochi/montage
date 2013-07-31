<article class="event">
  <header class="event-header">
		<h4 class="event-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			  <?php the_title(); ?>
			</a>
		</h4>
		<div class="event-meta">
		  <time><?php the_time( __( 'd/m/Y', 'montage' ) ); ?></time>
		</div>
	</header><!--end event-header-->
	<section class="event-content">
	  <?php the_excerpt(); ?>
	</section>
</article>
