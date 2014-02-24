<?php get_header(); ?>

<header id="hero-header" class="elokuvat-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title"><?php the_title(); ?></h1>
    </hgroup>
  </div>
  
</header>


<section id="content">
  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

  	<?php endwhile; ?>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
