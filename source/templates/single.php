<?php get_header(); ?>
<header id="hero-header" class="post-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title"><?php the_title(); ?></h1>
      <p class="single-post-meta">
        <span class="single-post-author"><?php get_the_author(); ?></span> - 
		    <time><?php the_time( __( 'd/m/Y', 'montage' ) ); ?></time>
      </p>
    </hgroup>
  </div>
  
</header>

<section id="page" class="column-row">
  <div class="container col-1">
    <?php get_template_part( 'single_post' ); ?>
  </div>
</section>

<?php get_footer(); ?>