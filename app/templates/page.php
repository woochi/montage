<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : the_post(); ?>

<?php

  $hero_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  if (!$hero_url) {
    $style = "";
  } else {
    $style = "background-image: url(".$hero_url.");";
  }

?>

<header id="hero-header" class="elokuvat-hero" style="<?php echo $style; ?>">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title"><?php the_title(); ?></h1>
    </hgroup>
  </div>
  
</header>


<section id="content">
  

      <?php the_content(); ?>

</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
