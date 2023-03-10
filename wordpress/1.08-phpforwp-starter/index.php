<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

      <!-- Display the_title and the_content here -->
      <div class="a"><h1><?php the_title();?></h1>
       <div class="b"><p><?php the_content(); ?></p></div>
      </div>
      <!-- // End while and start else -->
    <?php  endwhile; else:?>
      <!-- Display a 404 message here -->
      <p><?php _e('sorry no content available!', 'phpforwp'); ?></p>
       <!-- End if -->
    <?php endif ?>

  </div>

</body>
</html>
