<html <?php language_attributes( 'html' ) ?>>
<head>
	<title><?php wp_title(); ?></title>
	<!-- Basic Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<!-- WordPress -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body id="<?php echo str_replace(" ", "_", strtolower(get_the_title())); ?>" <?php body_class(); ?>>
  <nav id="header-nav" class="clear">
    <div class="container">
      <h1 id="logo">
        <a href="<?php echo home_url(); ?>">Montaasi</a>
      </h1>
      <?php wp_nav_menu(array(
        'menu' => 'header-menu',
        'container' => '',
        'container_id' => '',
        'items_wrap' => '<ul class="nav-list">%3$s</ul>'
      )); ?>
    </div>
  </nav>
