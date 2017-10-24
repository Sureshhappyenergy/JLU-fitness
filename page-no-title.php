<?php
/*
        Template Name: Page no title
*/
get_header( ) ; ?>

<?php if ( have_posts( ) ) :
   while ( have_posts( ) ) : the_post (); ?>
      <h1> This is my static title !!! </h1>
      <small> Posted on: <?php the_time( ); ?>, <?php the_category( ); ?></small>
      <p> <?php the_content(); ?></p>
  <?php endwhile;
 endif; ?>
<h1>This is my Index....</h1>

<?php  get_footer( ) ; ?>
