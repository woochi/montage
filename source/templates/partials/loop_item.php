<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<h4 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			  <?php the_title(); ?>
			</a>
		</h4>
		<div class="post-meta">
		  <time><?php the_time( __( 'j.n.Y', 'montage' ) ); ?></time>
		</div>
	</header><!--end post-header-->
	<section class="post-content">
	  <?php the_excerpt(); ?>
	</section>
</article><!--end post-->
