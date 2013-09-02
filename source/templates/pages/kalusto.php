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

<header id="hero-header" class="kalusto-hero">

  <div class="container">
    <hgroup class="hero-title-group">
      <h1 class="hero-title">Kalusto</h1>
    </hgroup>
  </div>
  
</header>

<section id="page">

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
              <th class="col-name">Hinta 1 <a href="#pricing" class="price-link">(?)</a></th>
              <th class="col-name">Hinta 2 <a href="#pricing" class="price-link">(?)</a></th>
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
          <h3 class="row-title">Miten vuokraan kalustoa?</h3>
          <p>Montaasi tarjoaa jäsentensä käyttöön monipuolisen kalustovalikoiman. Jäsenet voivat käyttää kerhohuoneella olevaa kalustoa (projektorit, editointitietokone, leikkauspöydät yms.) maksutta ja vuokrata kameroita, valo- ja äänikalustoa sekä muuta tarpeistoa edullisesti.</p>

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
          <h3 class="row-title">Vuokraushinnasto</h3 class="row-title">
          <p>
            Kalustoa vuokratessa valittavana on kaksi eri hinnoittelumallia, joista <strong>Hinta 1</strong> koostuu pelkästä vuorokausivuokrasta ja on edullisin satunnaiseen tarpeeseen, kun taas <strong>Hinta 2</strong> koostuu vuoden voimassa olevasta 50 € kalustomaksusta ja halvemmista vuorokausivuokrista, ja soveltuu suurempiin tuotantoihin.
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
          <h3 class="row-title">Varauskalenteri</h3 class="row-title">
          <?php echo do_shortcode( '[google-calendar-events id="1" type="ajax" title="Montaasi Events"]' ); ?>
          <ol>
            <li>Tarkista, että kalusto ei ole varattu haluamanasi päivänä.</li>
            <li>Lähetä varauspyyntö sähköpostilla osoitteeseen:</li>
          </ol>
        </div>
      </div>
    </div>
  </article>

</section>

<div class="overlay-container" id="vuokraussaannot">
<article id="saannot" class="overlay-content">
  <h3 class="row-title">Teekkarien elokuvakerho Montaasi ry:n kalustonvuokraussäännöt</h3 class="row-title">
  <time>Päivitetty 22.1.2009</time>

  <h3>Yleiset ehdot</h3>
  <p>
  Kaluston vuokraaminen edellyttää Montaasin jäsenyyttä.
  Vuokralleottaja vuokraa näiden sääntöjen mukaisesti Montaasilta kalustoa, josta sovitaan tapauskohtaisesti erikseen. Osapuolia sitova sopimus kaluston vuokraamisesta syntyy Montaasin hyväksyttyä varauksen ja se vahvistetaan kirjallisesti kalustoa noudettaessa.
  Montaasi voi harkintansa mukaan olla vuokraamatta kalustoa (ts. hyväksymättä varausta).
  Kuluvan jäsenkauden jäsenmaksun ja sovitun vuokra-ajan vuokrahinnan tulee olla maksettuna Montaasin tilille kalustoa noudettaessa. Vuokralleottajan tulee esittää kuitti maksutapahtumasta. Vaihtoehtoisesti vuokrahinta voidaan maksaa käteisellä kalustoa noudettaessa. Vuokralleottajan on pyydettäessä todistettava henkilöllisyytensä kalustoa noudettaessa.
  </p>
  <h3>Vuokran määräytyminen</h3>
  <p>
  Kalustolla on erillisen hinnaston mukainen vuorokausivuokra. Vuokra maksetaan vuokrauspäivältä ja jokaiselta alkavalta vuorokaudelta (vuorokausi alkaa klo 00.00). Alle 24 tunnin vuokrauksista veloitetaan yhden vuorokauden vuokra.
  Vuokra maksetaan sovitulta vuokra-ajalta. Mikäli vuokralleottaja palauttaa kaluston etuajassa, Montaasi ei hyvitä käyttämättä jäävän vuokra-ajan vuokraa.
  </p>
  <h3>Vuokra-aika</h3>
  <p>
  Kalustoa voi varata kerralla korkeintaan seitsemäksi (7) peräkkäiseksi vuorokaudeksi. Pidemmät yhtäjaksoiset varaukset Montaasin hallitus käsittelee erikseen.
  Kaluston käyttöönoton jälkeen kalustonhoitaja voi myöntää vuokra-ajan pidennystä enintään seitsemän (7) vuorokautta kerrallaan, jos muita varauksia ei ole. Vuokra-ajan pidentäminen yli 14 vuorokauteen aloituspäivästä edellyttää kuitenkin hallituksen hyväksyntää.
  Palautuksen viivästyessä sovitusta ajasta tulee vuokralleottajan maksaa jokaiselta alkavalta vuokra-ajan ylittävältä vuorokaudelta viivästymismaksuna kaksinkertainen vuorokausivuokrahinta. Lisäksi Montaasi voi mitätöidä vuokralleottajan vuokrausoikeuden.
  </p>
  <h3>Vuokrauksen peruuntuminen</h3>
  <p>
  Vuokralleottajan peruessa vuokrauksen ennen kaluston noutoa tulee vuokralleottajan maksaa puolet peruuntuneen vuokra-ajan vuokrasta.
  Montaasi voi pakottavasta syystä (esim. kaluston rikkoutuessa) perua vuokrauksen ennen kaluston noutoa. Tässä tapauksessa vuokralleottajalle hyvitetään peruuntuneen vuokra-ajan vuokra. Montaasi ei ole velvollinen korvaamaan vuokralleottajalle varauksen peruuntumisesta aiheutuvia vahinkoja tai kustannuksia.
  </p>
  <h3>Vastaanottotarkastus</h3>
  <p>
  Kalusto annetaan vuokralle ilman erillistä toimivuustakuuta. Vuokralleottajan tulee tarkastaa vuokraamansa kaluston toimivuus kaluston vuokralle oton yhteydessä. Mikäli kalustossa ilmenee tällöin vika tai puute, varaus voidaan perua ilman kustannuksia vuokralleottajalle.
  </p>
  <h3>Kaluston käyttö ja hoito</h3>
  <p>
  Vuokralleottaja sitoutuu käyttämään ja säilyttämään kalustoa huolellisesti ja asianmukaisesti. Kalustoa ei saa luovuttaa kolmannelle osapuolelle ilman Montaasin antamaa lupaa.
  Vuokralleottaja ei saa tehdä kalustoon mitään muutos- tai korjaustöitä ilman Montaasin antamaa erillistä lupaa.
  Kalustoa ei saa viedä Suomesta ilman Montaasin antamaa erillistä lupaa.
  </p>
  <h3>Vahingot ja viat</h3>
  <p>
  Vuokralleottajan tulee ilmoittaa Montaasille kaikki vuokra-aikana kalustossa ilmenneet viat ja kalustolle aiheutuneet vahingot.
  Mikäli vuokralleottaja on aiheuttanut kaluston vahingoittumisen, tulee hänen palauttaa vahingoittunut kalusto mahdollisimman nopeasti ja korvata korjauskulut Montaasille. Mikäli kalusto tai sen osa on tuhoutunut, hävinnyt tai sitä ei muusta syystä voida korjata tai palauttaa Montaasille, vuokralleottajan tulee korvata uuden vastaavan kaluston hankkimisesta aiheutuvat kustannukset.
  Mikäli kalustossa ilmenee vuokra-aikana vika, joka ei johdu vuokralleottajan vastuulla olevasta toiminnasta, vuokralleottajalle hyvitetään käyttämättä jäävän vuokra-ajan vuokra.
  Montaasi ei ole velvollinen korvaamaan kaluston vioista tai puutteista vuokralleottajalle aiheutuvia vahinkoja tai kustannuksia.
  </p>
  <a class="alt-button overlay-close">Sulje</a>
</article>
</div>

<?php get_footer(); ?>
