<main>
<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <post>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </post>
<?php } } ?>
</main>



