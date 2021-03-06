<?php
/*
Template Name: Jäseneksi
*/
?>

<?php get_header(); ?>

<header id="hero-header" class="jaseneksi-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Jäseneksi</h1>
    </hgroup>
  </div>
  
</header>

<section id="content">
  <article class="tinted-featurette">
      <div class="row">
        <div class="column medium-10 medium-centered">
          <p class="lead">
            Helpoiten Montaasin toimintaan pääsee mukaan seuraamalla <a href="/?page_id=467" title="Mene ajankohtaista sivulle">Ajankohtaista-sivua</a> tai <a href="http://list.ayy.fi/mailman/listinfo/montaasi-lista" title="Liity Montaasin sähköpostilistalle">sähköpostilistaa</a> ja ottamalla osaa tapahtumiin. Esimerkiksi elokuvakurssit ja viikottaiset kerhoillat ovat erinomainen tapa tutustua kerhon toimintaan. Voit myös ottaa suoraan yhteyttä kerhon <a href="mailto:montaasi@list.ayy.fi" title="Lähetä sähköpostia johtokunnalle">johtokuntaan</a>.
          </p>
        </div>
      </div>
  </article>

  <article class="featurette">
    <div class="container">
      <div class="row">
        <div class="column medium-5 medium-offset-1">
          <?php echo do_shortcode( '[contact-form-7 id="512" title="Jäsenlomake"]' ); ?>
        </div>
        <div id="join-description" class="column medium-5 end">
          <h3 class="featurette-title">Liity jäseneksi</h3 class="featurette-title">
          <p>
            Montaasi on kaikille avoin yhdistys. Jäsenkausi on 1.9.–31.8. siten, että heinä- ja elokuussa jäseneksi tulleet saavat myös seuraavan kauden jäsenyyden samalla maksulla. Jäseneksi voit liittyä täyttämällä ohessa olevan lomakkeen ja suorittamalla jäsenmaksun Montaasin pankkitilille.
          </p>
          <p><strong>Saat maksuohjeet ilmoittamaasi sähköpostiosoitteeseen kun jäsenhakemuksesi on vastaanotettu.</strong></p>
          <p>
            Jäsenmaksun voi suorittaa myös käteisellä kerhohuoneella esimerkiksi
            kerhoillan yhteydessä.
          </p>
          <h4>Jäsenmaksu kaudelle 2013&mdash;2014: <strong>10 €</strong></h4>
        </div>
      </div>
    </div>
  </article>
</section>

<?php get_footer(); ?>
