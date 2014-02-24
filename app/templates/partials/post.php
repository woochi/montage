<article id="single-post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-post-header">
		<h3 class="single-post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			  <?php the_title(); ?>
			</a>
		</h3>
		<div class="single-post-meta">
		  <span class="single-post-author"><?php the_author(); ?></span> - 
		  <time><?php the_time( __( 'd/m/Y', 'montage' ) ); ?></time>
		</div>
	</header><!--end post-header-->
	<section class="single-post-content">
	  <?php the_content( __( 'Read more', 'montage' )); ?>
	</section>
	<footer class="single-post-footer">
	</footer><!--end post-footer-->
</div><!--end post-->
