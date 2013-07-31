<?php get_header(); ?>

<header id="hero-header" class="ajankohtaista-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Ajankohtaista</h1>
    </hgroup>
  </div>
  
</header>

<section id="page" class="column-row">
  <div class="container col-2">
    <?php get_template_part( 'loop' ); ?>
  </div>
  <div class="container col-2">
    <h5 class="event-col-title">Tulevat tapahtumat</h5>
    <?php get_template_part( 'event_loop' ); ?>
  </div>
</section>

<?php get_footer(); ?>
