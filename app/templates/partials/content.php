<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Montage
 * @since Montage 1.0
 */
?>

<?php

  $hero_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  if (!$hero_url) {
    $style = "";
  } else {
    $style = "background-image: url(".$hero_url.");";
  }

?>

<header id="hero-header" class="single-post-hero" style="<?php echo $style; ?>">
  <div class="row">
    <div class="column small-12 medium-8 medium-centered">
      <div class="single-post-title-group">
        <h1 class="single-post-title"><?php the_title(); ?></h1>
        <br>
        <p class="single-post-meta">
    	    <time><?php the_time( __( 'j.n.Y', 'montage' ) ); ?></time>
        </p>
      </div>
    </div>
  </div>
</header>

<article id="single-post-<?php the_ID(); ?>" <?php post_class("single-post"); ?>>
  <div class="row">
    <div class="column medium-8 medium-centered">
    <?php the_content(); ?>

      <footer class="single-post-footer">
      	<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
      		<?php get_template_part( 'author-bio' ); ?>
      	<?php endif; ?>
      </footer><!-- .single-post-meta -->
    </div>
  </div>
</article><!-- #post -->
