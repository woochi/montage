<?php
/*
Template Name: Kalusto
*/
?>

<?php
$equipment = array(
  array(
    "category" => "camera",
    "manufacturer" => "Canon",
    "model" => "XH A1",
    "description" => "Videokamera",
    "price" => 20,
    "price2" => 10
  ),
  array(
    "category" => "camera",
    "manufacturer" => "Canon",
    "model" => "WD-H72",
    "description" => "Laajakulmalisäke XH A1 :een",
    "price" => 5,
    "price2" => 2
  ),
  array(
    "category" => "camera",
    "manufacturer" => "Canon",
    "model" => "1014 XL-S",
    "description" => "Super 8 -filmikamera",
    "price" => 5,
    "price2" => 2
  ),
  array(
    "category" => "camera",
    "manufacturer" => "Arriflex",
    "model" => "BL 16",
    "description" => "16 mm filmikamera",
    "price" => 20,
    "price2" => 10
  ),
  array(
    "category" => "camera",
    "manufacturer" => "Manfrotto",
    "model" => "075B",
    "description" => "Jalusta",
    "price" => 6,
    "price2" => 3
  ),
  array(
    "category" => "camera",
    "manufacturer" => "Pentax",
    "model" => "Spotmeter V",
    "description" => "Valotusmittari",
    "price" => 5,
    "price2" => 3
  ),
  array(
    "category" => "camera",
    "model" => "Bluescreen",
    "description" => "Sininen",
    "price" => 10,
    "price2" => 5
  ),

  array(
    "category" => "audio",
    "manufacturer" => "Marantz",
    "model" => "PMD660",
    "description" => "Digitallennin",
    "price" => 6,
    "price2" => 3
  ),
  array(
    "category" => "audio",
    "manufacturer" => "Sennheiser",
    "model" => "ME66",
    "description" => "Suuntamikrofoni",
    "price" => 4,
    "price2" => 2
  ),
  array(
    "category" => "audio",
    "manufacturer" => "K&M",
    "model" => "",
    "description" => "Mikkipuomi",
    "price" => 4,
    "price2" => 2
  ),
  array(
    "category" => "audio",
    "manufacturer" => "Rycote",
    "model" => "S375",
    "description" => "Tuulisuoja",
    "price" => 5,
    "price2" => 2
  ),
  array(
    "category" => "projector",
    "manufacturer" => "Sankyo",
    "model" => "Stereo 800",
    "description" => "Super 8/Single 8 -projektori",
    "price" => 5,
    "price2" => 3
  ),
  array(
    "category" => "projector",
    "manufacturer" => "Kodak",
    "model" => "Sound 8 Model 1E",
    "description" => "Standard8/Double 8 -projektori",
    "price" => 5,
    "price2" => 3
  ),
  array(
    "category" => "projector",
    "manufacturer" => "Eiki",
    "model" => "RT-2A",
    "description" => "16mm projektori",
    "price" => 5,
    "price2" => 3
  ),
  array(
    "category" => "screen",
    "manufacturer" => "Starello",
    "model" => "190x180cm",
    "description" => "Valkokangas jalustalla",
    "price" => 10,
    "price2" => 3
  ),
  array(
    "category" => "light",
    "manufacturer" => "ARRILITE",
    "model" => "AL-2000",
    "description" => "Valaisin jalustalla",
    "price" => 6,
    "price2" => 3
  ),
  array(
    "category" => "light",
    "manufacturer" => "ARRILITE",
    "model" => "AL-800",
    "description" => "2 x Valaisin jalustalla",
    "price" => 8,
    "price2" => 4
  ),
  array(
    "category" => "light",
    "manufacturer" => "Halogeeni",
    "model" => "300W",
    "description" => "Työmaavalo",
    "price" => 2,
    "price2" => 2
  ),
  array(
    "category" => "light",
    "manufacturer" => "Dörr",
    "model" => "80cm",
    "description" => "Reflectori",
    "price" => 6,
    "price2" => 3
  ),
  array(
    "category" => "light",
    "manufacturer" => "",
    "model" => "",
    "description" => "Valaisinsuodinsarja",
    "price" => 4,
    "price2" => 2
  ),
);
?>


<?php get_header(); ?>

<header id="hero-header" class="kalusto-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Kalusto</h1>
    </hgroup>
  </div>
  
</header>

<section id="content">

  <article class="tinted-featurette">
    <div class="container">
      <div class="row">
        <div class="col-8 push-2">
          <p class="lead">Montaasi tarjoaa jäsentensä käyttöön monipuolisen kalustovalikoiman. Jäsenet voivat käyttää kerhohuoneella olevaa kalustoa (projektorit, editointitietokone, leikkauspöydät yms.) maksutta ja vuokrata kameroita, valo- ja äänikalustoa sekä muuta tarpeistoa edullisesti.</p>
        </div>
      </div>
    </div>
  </article>

  <article class="featurette">
    <div class="container">
      <div class="row">
        <div class="col-8 push-2">
          <ul id="equipment-filters" class="clear">
            <li class="filter">
              <a rel="camera">
                <i class="icon-camera"></i><br>Kamerat
              </a></li>
            <li class="filter">
              <a rel="audio">
                <i class="icon-volume-up"></i><br>Ääni
              </a></li>
            <li class="filter">
              <a rel="projector">
                <i class="icon-facetime-video"></i><br>Projektorit
              </a></li>
            <li class="filter">
              <a rel="light">
                <i class="icon-lightbulb"></i><br>Valaisimet
              </a></li>
          </ul>
        </div>
        <div id="table-col" class="col-8 push-2">
          <table id="equipment-table">
            <tr>
              <th class="col-name">Varuste</th>
              <th class="col-name">H1 <a href="#pricing" class="price-link">(?)</a></th>
              <th class="col-name">H2 <a href="#pricing" class="price-link">(?)</a></th>
            </tr>
            <?php foreach ($equipment as $item) {
                echo '<tr class="item" rel="'.$item["category"].'"><td><h5 class="item-name">'.$item["manufacturer"].' '.$item["model"].'</h5><p class="item-description">'.$item["description"].'</p></td><td class="price-1">'.$item["price"].'</td><td class="price-2">'.$item["price2"].'</td></tr>';
            }?>
          </table>
        </div>
      </div>
    </div>
  </article>

  <article class="tinted-featurette">
    <div class="container">
      <div class="row">
        <div class="col-8 push-2">
          <h3 class="featurette-title">Miten vuokraan kalustoa?</h3>

          <p>Kaluston varaustilanteen voit tarkistaa <a href="#varauskalenteri">varauskalenterista</a>. Vuokrausasioissa ota yhteyttä kalustovastaava Eero Laurilaan, sähköposti eero.laurila(at)aalto.fi. Ennen vuokrausta tutustu myös vuokrauksen tarkempiin sääntöihin.</p>
          <a class="alt-button overlay-button" data-overlay="vuokraussaannot">
            <i class="icon-file-text-alt icon-fixed-width"></i>
            Lue vuokraussäännöt
          </a>
          <a class="alt-button download" target="_blank" href="<?php bloginfo('template_directory'); ?>/images/kalustonvuokraussopimus.pdf">
            <i class="icon-download icon-fixed-width"></i>
            Lataa kalustonvuokraussopimus
          </a>
        </div>
      </div>
    </div>
  </article>
  <article class="featurette" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-8 push-2">
          <h3 class="featurette-title">Vuokraushinnasto</h3 class="featurette-title">
          <p>
            Kalustoa vuokratessa valittavana on kaksi eri hinnoittelumallia, joista <strong>Hinta 1 (H1)</strong> koostuu pelkästä vuorokausivuokrasta ja on edullisin satunnaiseen tarpeeseen, kun taas <strong>Hinta 2 (H2)</strong> koostuu vuoden voimassa olevasta 50 € kalustomaksusta ja halvemmista vuorokausivuokrista, ja soveltuu suurempiin tuotantoihin.
          </p>
          <p>
            Kaluston vuokraus maksetaan joko käteisellä tai etukäteen tilisiirtona (FI73 1309 3000 2152 69, viitenumero 30106), jolloin kalustoa noudettaessa tulee olla mukana kuitti tilisiirrosta.
          </p>
        </div>
      </div>
    </div>
  </article>

  <article class="tinted-featurette" id="varauskalenteri">
    <div class="container">
      <div class="row">
        <div class="col-8 push-2">
          <h3 class="featurette-title">Varauskalenteri</h3 class="featurette-title">
          <?php echo do_shortcode( '[google-calendar-events id="1" type="ajax" title="Tapahtumat"]' ); ?>
        </div>
      </div>
    </div>
  </article>

</section>

<?php get_footer(); ?>
