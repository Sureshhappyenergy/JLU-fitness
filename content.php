<h1> <?php the_title( );?> </h1>

<div class="thumbnail-img"> <?php the_post_thumbnail('medium'); ?></div>


<small> Posted on: <?php the_time( ); ?>, <?php the_category( ); ?></small>
<p> <?php the_content(); ?></p>
