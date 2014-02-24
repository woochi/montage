<html <?php language_attributes( 'html' ) ?>>
<head>
	<title>Montaasi<?php wp_title(" - "); ?></title>
	<!-- Basic Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="Elokuvakerho Montaasi on Aalto-yliopiston yliopilaskunnan alainen yhdistys elokuvien ystäville.
	Olemme tarjonneet jäsenillemme elokuvaviihdettä ja -koulutusta vuodesta 1957 asti."
	name="description">
	<meta content="width=device-width,initial-scale=1.0" name="viewport">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<!-- WordPress -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body id="<?php echo str_replace(" ", "_", strtolower(get_the_title())); ?>">
  <div id="sidebar">
    <?php wp_nav_menu(array(
      'menu' => 'mobile-menu',
      'menu_class' => 'mobile-menu',
      'container' => '',
      'container_id' => '',
      'items_wrap' => '<ul class="nav-list">%3$s</ul>'
    )); ?>
  </div>
  <section id="page">
    <nav id="header-nav" class="clear">
      <div class="row">
        <div class="column small-12">
          <a id="logo" href="<?php echo home_url(); ?>">Montaasi</a>
          <?php wp_nav_menu(array(
            'menu' => 'header-menu',
            'container' => '',
            'container_id' => '',
            'items_wrap' => '<ul class="nav-list">%3$s</ul>'
          )); ?>
          <a id="mobile-nav-button" class="button"><i class="icon-reorder"></i></a>
        </div>
      </div>
    </nav>
