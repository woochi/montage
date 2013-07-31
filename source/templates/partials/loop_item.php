<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<h3 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			  <?php the_title(); ?>
			</a>
		</h3>
		<div class="post-meta">
		  <span class="post-author"><?php the_author(); ?></span> - 
		  <time><?php the_time( __( 'd/m/Y', 'montage' ) ); ?></time>
		</div>
	</header><!--end post-header-->
	<section class="post-content">
	  <?php the_excerpt(); ?>
	</section>
</article><!--end post-->
