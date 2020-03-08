<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog de Prueba</title>
  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css" type="text/css" media="screen" /><!-- hoja de estilos pricipal -->
</head>
<?php get_header() ?>
<main>
<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <post>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </post>
<?php } } ?>
</main>
<?php get_footer() ?>



