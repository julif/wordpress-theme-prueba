<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog de Prueba</title>
  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css" type="text/css" media="screen" /><!-- hoja de estilos pricipal -->
</head>
<body>
<container>
  <?php get_header() ?> 
  <main>
  <?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
    <post>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php the_content(); ?>
    </post>
  <?php } } ?>
  </main>
  <?php get_footer() ?>
  </container>


</body>

