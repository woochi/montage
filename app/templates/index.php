<?php get_header(); ?>

<header id="hero-header" class="ajankohtaista-hero">
  <div class="row">
    <div class="column medium-12">
      <hgroup class="hero-title-group">
        <h1 class="hero-title">Ajankohtaista</h1>
      </hgroup>
    </div>
  </div>
</header>

<section id="content" class="featurette">
  <div class="row">
    <div class="column medium-12">
      <h5 class="event-col-title">Uutiset</h5>
      <?php get_template_part( 'loop' ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
