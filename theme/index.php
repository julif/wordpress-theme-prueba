<main>
<?php  if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <post>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </post>
<?php } } ?>
</main>



