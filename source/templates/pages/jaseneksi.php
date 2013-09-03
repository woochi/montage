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

<section id="page">
  <article class="tinted-featurette">
    <div class="container">
      <div class="row">
        <div class="col-10 push-1 pull-1">
          <p class="lead">
            Helpoiten Montaasin toimintaan pääsee mukaan seuraamalla <a href="/ajankohtaista" title="Mene ajankohtaista sivulle">tapahtumakalenteria</a> tai <a href="http://list.ayy.fi/mailman/listinfo/montaasi-lista" title="Liity Montaasin sähköpostilistalle">sähköpostilistaa</a> ja ottamalla osaa tapahtumiin. Esimerkiksi elokuvakurssit ja viikottaiset kerhoillat ovat erinomainen tapa tutustua kerhon toimintaan. Voit myös ottaa suoraan yhteyttä kerhon <a href="mailto:montaasi@list.ayy.fi" title="Lähetä sähköpostia johtokunnalle">johtokuntaan</a>.
          </p>
        </div>
      </div>
    </div>
  </article>

  <article class="featurette">
    <div class="container">
      <div class="row">
        <div class="col-5 push-1">
          <?php echo do_shortcode( '[contact-form-7 id="512" title="Jäsenlomake"]' ); ?>
        </div>
        <div id="join-description" class="col-5">
          <h3 class="row-title">Liity jäseneksi</h3 class="row-title">
          <p>
            Montaasi on kaikille avoin yhdistys. Jäsenkausi on 1.9.–31.8. siten, että heinä- ja elokuussa jäseneksi tulleet saavat myös seuraavan kauden jäsenyyden samalla maksulla. Jäseneksi voit liittyä täyttämällä ohessa olevan lomakkeen ja suorittamalla jäsenmaksun Montaasin pankkitilille.
          </p>
          <p><strong>Saat maksuohjeet ilmoittamaasi sähköpostiosoitteeseen kun olet lähettänyt hakemuksesi.</strong></p>
          <p>
            Jäsenmaksun voi suorittaa myös käteisellä kerhohuoneella esimerkiksi
            kerhoillan yhteydessä.
          </p>
          <h4>Jäsenmaksu vuodelle 2013: <strong>10€</strong></h4>
        </div>
      </div>
    </div>
  </article>
</section>

<?php get_footer(); ?>
