<?php get_header(); ?>
<?php /* The loop */ ?>

<section id="page">
  <?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

  <?php endwhile; ?>
</section>

<?php get_footer(); ?>