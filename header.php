<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JLU-fitness 0.1 Theme</title>

  <?php wp_head() ?>
</head>
<?php
  if ( is_home() ) :
      $jlu_classes = array( 'jluawesome-class', 'my-class' );
  else :
      $jlu_classes = array( 'no-jluawesome-class' );
  endif;
 ?>

<body <?php body_class( jlu_classes ); ?>>

  <?php wp_nav_menu ( array('theme_location' => 'primary') );   ?>

  <img src="<?php header_image('small') ; ?>" height="<?php echo get_custom_header() -> height; ?>" width="<?php echo get_custom_header() ->width; ?>" alt="" />
