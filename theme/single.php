<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog de Prueba</title>
  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css" type="text/css" media="screen" /><!-- hoja de estilos pricipal -->
</head>
<body>
  <style>

banner_title{
  display:block;
  background-color: #2e384a;
  padding-bottom: 80px;
    padding-top: 80px;
}
banner_title h1{    color: white;
    font-size: 3em;
    text-transform: uppercase;
  }
  </style>
<container>
<?php get_header() ?>
<banner_title>   <h1 style="    margin-left: 10px;
    margin-right: 10px;"> <?php the_title(); ?> </h1>
 
  </banner_title>
<main>
<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

  <post>



    <?php the_content(); ?>
  </post>
<?php } } ?>
</main>
<?php get_footer() ?>
</container>
</body>


