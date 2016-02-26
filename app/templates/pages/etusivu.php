<?php
/*
Template Name: Etuivu
*/
?>

<?php get_header(); ?>

<?php

    $args = array(
      'numberposts' => 3,
      'post_status' => 'publish',
      'post_type' => 'post',
      'suppress_filters' => true );

    $args2 = array(
      'numberposts' => 3,
      'post_status' => 'publish',
      'post_type' => 'event',
      'suppress_filters' => true );

?>

<header id="hero-header" class="etusivu-hero">
  <div class="row">
    <div class="column medium-12">
      <hgroup class="hero-title-group">
        <h1 class="hero-title">Montaasi</h1>
      </hgroup>
    </div>
  </div>
</header>

<section id="content">
  <article id="news-banner" class="featurette">
      <div class="row">
        <div class="column medium-5 medium-offset-1">
        <h5 class="promo-title featurette-title">
          <a href="/?page_id=467" class="primary-link">Montaasi tiedottaa <i class="icon-caret-right"></i></a>
        </h5>
        <?php
          $recent_posts = wp_get_recent_posts($args);
          if (count($recent_posts) > 0) {
            foreach( $recent_posts as $post ){
    		      echo '<a href="' . get_permalink($post["ID"]).'" title="Look '.esc_attr($post["post_title"]).'" >'.$post["post_title"].'</a><br>';
    	  }}
    	  ?>
    	  </div>
    	  <div class="column medium-5 end">
        <h5 class="promo-title">
          <a href="/?page_id=467" class="primary-link">Seuraavat tapahtumat <i class="icon-caret-right"></i></a>
        </h5>
        <?php
          $recent_events = wp_get_recent_posts($args2);
          if (count($recent_events) > 0) {
            foreach( $recent_events as $event ){
    		      echo '<a href="' . get_permalink($event["ID"]) . '" title="Look '.esc_attr($event["post_title"]).'" >'.$event["post_title"].'</a><br>';
    	    }}
    	  ?>
    	</div>
  </article>

  <article class="tinted-featurette">
      <div class="row">
        <div class="column medium-10 medium-centered">
        <h3 class="featurette-title">Yli puoli vuosisataa elokuvakulttuuria</h3>
        <p>Elokuvakerho Montaasi on Aalto-yliopiston ylioppilaskunnan yhteydessä toimiva elokuvatekniikasta ja -taiteesta kiinnostuneiden opiskelijoiden yhdistys. Montaasi järjestää elokuvan tekemistä opettavia kursseja, elokuvanäytöksiä, ekskursioita elokuva-alan kohteisiin sekä muita tapahtumia. Kerho tarjoaa jäsenilleen opastusta, kontakteja ja kalustoa oman elokuvan toteuttamiseen.</p>
        <p>Montaasi perustettiin vuonna 1957. Vuosien varrella kerho on vaikuttanut kotimaiseen elokuvakulttuuriin tekijänä, dokumentoijana ja kommentoijana. Montaasin historia pitää sisällään muun muassa kotimaisen harrastajaelokuvan syntyvuodet, elokuvakerhojen kulta-ajan 1960–1980-luvuilla sekä punk-liikkeen, videotekniikan ja internetin tuomat mullistukset.</p>
        </div>
      </div>
  </article>

  <article class="featurette">
      <div class="row">
        <div class="column medium-10 medium-centered">
          <h3 class="featurette-title">Tekevä elokuvakerho</h3>
          <p>Montaasin toiminta on alusta lähtien perustunut itse tekemiseen ja omaehtoisen elokuvailmaisun kehittämiseen. Monet kerhon jäsenistä ovat sittemmin siirtyneet elokuva- ja audiovisuaalisen alan ammattilaisiksi, heistä tunnetuimpana perustajajäseniin kuulunut elokuvaohjaaja Risto Jarva.</p>

          <p>Montaasissa on tehty vuosien varrella satoja elokuvia, jotka kattavat laajan kirjon ilmaisutapoja abstraktista pohdiskelusta kuvia kumartamattomaan anarkismiin. Elokuviin on taltioitunut joukko eri aikakausien merkittäviä ilmiöitä ja vallitsevia tyylisuuntia. Montaasin elokuvista lisää <a href="/?page_id=450">Elokuvat-sivulla</a>.</p>
        </div>
      </div>
  </article>
</section>

<?php get_footer(); ?>
