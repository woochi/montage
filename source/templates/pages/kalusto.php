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
    "model" => "1014 XL-S",
    "description" => "Videokamera",
    "price" => 20,
    "price2" => 10
  ),
  array(
    "category" => "camera",
    "manufacturer" => "Canon",
    "model" => "WD-H72",
    "description" => "Laajakulmalisäke",
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
    "description" => "Videokamera",
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
    "category" => "camera",
    "manufacturer" => "Canon",
    "model" => "XH A1",
    "description" => "Videokamera",
    "price" => 20,
    "price2" => 10
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

<header id="hero-header">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Kalusto</h1>
    </hgroup>
  </div>
  
</header>

<section id="page">
  <article class="column-row">
    <div class="container col-1 centered">
      <h3 class="row-title">Miten vuokraan kalustoa?</h3>
      <p>Montaasi tarjoaa jäsentensä käyttöön monipuolisen kalustovalikoiman. Jäsenet voivat käyttää kerhohuoneella olevaa kalustoa (projektorit, editointitietokone, leikkauspöydät yms.) maksutta ja vuokrata kameroita, valo- ja äänikalustoa sekä muuta tarpeistoa edullisesti.</p>

      <p>Kaluston varaustilanteen voit tarkistaa <a href="#varauskalenteri">varauskalenterista</a>. Vuokrausasioissa ota yhteyttä kalustovastaava Eero Laurilaan, sähköposti eero.laurila(at)aalto.fi. Ennen vuokrausta tutustu myös vuokrauksen tarkempiin sääntöihin.</p>
      <a class="button" data-overlay="vuokraussaannot">
        <i class="icon-file-text-alt icon-fixed-width"></i>
        Lue kalustonvuokraussäännöt
      </a>
      <a class="button download" target="_blank" href="<?php bloginfo('template_directory'); ?>/images/kalustonvuokraussopimus.pdf">
        <i class="icon-download icon-fixed-width"></i>
        Lataa kalustonvuokraussopimus
      </a>
    </div>
  </article>
</section>
<?php get_footer(); ?>
