<?php get_header(); ?>

<header id="hero-header" class="ajankohtaista-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Ajankohtaista</h1>
    </hgroup>
  </div>
  
</header>

<section id="content" class="featurette">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h5 class="event-col-title">Uutiset</h5>
        <?php get_template_part( 'loop' ); ?>
      </div>
      <div class="container col-6">
        <h5 class="event-col-title">Tulevat tapahtumat</h5>
        <?php get_template_part( 'event_loop' ); ?>
      </div>
    </div>
</section>

<?php get_footer(); ?>
