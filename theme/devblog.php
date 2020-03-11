<?php
/*
 * Template Name: devblog
 */
?>
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

  <?php 
     $args = array(
      'cat' => '2' // devBlog
  );
$query = new WP_Query( $args );
     ?>
    <?php $loop = new WP_Query($args); ?>
    <?php if ($loop->have_posts()) : ?>
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php  $thumb_image =get_post_meta(get_the_ID(),'mytheme_featured_image',true);?>
        <!-- loop  -->
        <post>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <span class="cat"><?php the_category(); ?></span>
      <?php the_content(); ?>
    </post>
  
      <?php endwhile; ?>
    <?php endif; ?>




  </main>
  <?php get_footer() ?>
  </container>
  <script>  
  
  document.getElementById("nav-devblog-link").classList.add("active");
  //document.getElementById("nav-blog-link").classList.add("active"); 
</script>

</body>

