<?php
/*
Template Name: Jäseneksi
*/
?>

<?php get_header(); ?>

<header id="hero-header">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Jäseneksi</h1>
    </hgroup>
  </div>
  
</header>

<section id="page">
  <article class="column-row">
    <div class="container col-1 centered">
      <p class="lead">
        Helpoiten Montaasin toimintaan pääsee mukaan seuraamalla <a href="/ajankohtaista" title="Mene ajankohtaista sivulle">tapahtumakalenteria</a> tai <a href="http://list.ayy.fi/mailman/listinfo/montaasi-lista" title="Liity Montaasin sähköpostilistalle">sähköpostilistaa</a> ja ottamalla osaa tapahtumiin. Esimerkiksi elokuvakurssit ja viikottaiset kerhoillat ovat erinomainen tapa tutustua kerhon toimintaan. Voit myös ottaa suoraan yhteyttä kerhon <a href="#main-footer" title="Katso johtokunnan yhteystiedot">johtokuntaan</a>.
      </p>
    </div>
  </article>

  <article class="column-row">
    <div class="container col-2">
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
    <div class="container col-2">
      <form id="join-form">
        <fieldset>
          <ol class="clean">
            <li>
            <label>Nimi</label>
            <input type="text" placeholder="Nimi (Etunimi Sukunimi)" class="input" required>
            </li>
            <li>
            <label>Sähköpostiosoite</label>
            <input type="text" placeholder="Sähköpostiosoite" class="input" required>
            </li>
            <li>
            <label>Puhelinnumero</label>
            <input type="tel" placeholder="Puhelinnumero" class="input" required>
            </li>
            <li>
            <label>Katuosoite</label>
            <input type="text" placeholder="Katuosoite" class="input" required>
            </li>
            <li>
            <label>Postinumero</label>
            <input type="text" pattern="[0-9]*" placeholder="Postinumero" class="input" required>
            </li>
            <li>
            <label>Postitoimipaikka</label>
            <input type="text" placeholder="Postitoimipaikka" class="input" required>
            </li>
            <li>
            <label>Opiskelupaikka</label>
            <select name="" class="select" required>
              <option>Opiskelupaikka</option>
              <?php
                $schools = array(
                  "Insinööritieteiden korkeakoulu",
                  "Kauppakorkeakoulu",
                  "Kemian tekniikan korkeakoulu",
                  "Perustieteiden korkeakoulu",
                  "Sähkötekniikan korkeakoulu",
                  "Taiteiden ja suunnittelun korkeakoulu",
                  "Jokin muu"
                );
              ?>
              <?php foreach ($schools as $school) : ?>
                <option value="<?php echo $school; ?>"><?php echo $school; ?></options>
              <?php endforeach; ?>
            </select>
            </li>
          </ol>
          <input type="submit" value="Lähetä jäsenhakemus" class="button">
        </fieldset>
      </form>
    </div>
  </article>
</section>

<?php get_footer(); ?>
