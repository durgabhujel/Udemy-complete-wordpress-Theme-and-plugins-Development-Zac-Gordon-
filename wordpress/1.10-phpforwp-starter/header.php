<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <?php wp_head();?>
</head>

<!-- it use to add add custom class in  wordpress page -->
<body <?php body_class(); ?>> 
  <header id="masthead">
    <h1><a href="#"><?php bloginfo('name');?></a></h1>
  </header>