<?php
/*
Template Name: Etuivu
*/
?>

<?php get_header(); ?>

<?php

    $args = array(
      'numberposts' => 1,
      'post_status' => 'publish',
      'post_type' => 'post',
      'suppress_filters' => true );

    $args2 = array(
      'numberposts' => 1,
      'post_status' => 'publish',
      'post_type' => 'event',
      'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
    $recent_events = wp_get_recent_posts( $args2, $output = ARRAY_A );
?>

<header id="hero-header" class="etusivu-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Elokuvakerho Montaasi</h1>
    </hgroup>
  </div>
  
</header>

<section id="page">
  <article id="news-banner" class="promo-row">
    <div class="container col-1">
      <div class="promo-half">
        <i class="promo-icon icon-asterisk"></i>
        <h5 class="promo-title">Montaasi tiedottaa</h5>
        <?php foreach( $recent_posts as $post ){
    		echo '<a href="' . get_permalink($post["ID"]) . '" title="Look '.esc_attr($post["post_title"]).'" >' .   $post["post_title"].'</a><p class="promo-content">'.$post["post_content"].'</p>';
    	  }?>
  	  </div>
  	  <div class="promo-half">
  	    <i class="promo-icon icon-calendar"></i>
        <h5 class="promo-title">Kalenterissa seuraavaksi</h5>
        <?php foreach( $recent_events as $event ){
    		echo '<a href="' . get_permalink($event["ID"]) . '" title="Look '.esc_attr($event["post_title"]).'" >' .   $event["post_title"].'</a><p class="promo-content">' . $post["post_content"] . '</p>';
    	  }?>
  	  </div>
    </div>
  </article>
  <article class="column-row">
    <div class="container col-1">
      <h3 class="row-title">Yli puoli vuosisataa elokuvakulttuuria</h3>
      <p> Elokuvakerho Montaasi on Aalto-yliopiston ylioppilaskunnan yhteydessä toimiva elokuvatekniikasta ja -taiteesta kiinnostuneiden opiskelijoiden yhdistys. Montaasi järjestää elokuvan tekemistä opettavia kursseja, elokuvanäytöksiä, ekskursioita elokuva-alan kohteisiin sekä muita tapahtumia. Kerho tarjoaa jäsenilleen opastusta, kontakteja ja kalustoa oman elokuvan toteuttamiseen.

        Montaasi perustettiin vuonna 1957. Vuosien varrella kerho on vaikuttanut kotimaiseen elokuvakulttuuriin tekijänä, dokumentoijana ja kommentoijana. Montaasin historia pitää sisällään muun muassa kotimaisen harrastajaelokuvan syntyvuodet, elokuvakerhojen kulta-ajan 1960–1980-luvuilla sekä punk-liikkeen, videotekniikan ja internetin tuomat mullistukset.
      </p>
    </div>
  </article>

  <article class="column-row">
    <div class="container col-1">
    <h3 class="row-title">Tekevä elokuvakerho</h3>
    <p>Montaasin toiminta on alusta lähtien perustunut itse tekemiseen ja omaehtoisen elokuvailmaisun kehittämiseen. Monet kerhon jäsenistä ovat sittemmin siirtyneet elokuva- ja audiovisuaalisen alan ammattilaisiksi, heistä tunnetuimpana perustajajäseniin kuulunut elokuvaohjaaja Risto Jarva.</p>

    <p>Montaasissa on tehty vuosien varrella satoja elokuvia, jotka kattavat laajan kirjon ilmaisutapoja abstraktista pohdiskelusta kuvia kumartamattomaan anarkismiin. Elokuviin on taltioitunut joukko eri aikakausien merkittäviä ilmiöitä ja vallitsevia tyylisuuntia. Montaasin elokuvista lisää <a href="/elokuvat">Elokuvat-sivulla</a>.</p>
    </div>
  </article>
</section>

<?php get_footer(); ?>
