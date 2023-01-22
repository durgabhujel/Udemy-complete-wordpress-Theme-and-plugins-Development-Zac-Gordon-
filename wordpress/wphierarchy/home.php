<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

    <h2> <?php  wp_title('');?></h2>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content','post' ); ?>

      <?php endwhile; else : ?>

       <?php get_template_part( 'template-parts/content', 'none' )?>

      <?php endif; ?>
      <p>Templete: home.php</p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
