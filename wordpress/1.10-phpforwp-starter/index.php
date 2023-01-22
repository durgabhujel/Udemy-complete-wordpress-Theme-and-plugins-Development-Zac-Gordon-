<?php get_header(); ?>

  <div id="content">

<!-- Add any template tags outside of loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Add any post template tags inside of loop -->

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
      <footer>
        <p class="by-line">
         Categories:
          <?php the_category( ', ' ); ?>
          Time:
          <?php the_time('F j, Y'); ?>
          
          Tags:
          <?php the_tags(); ?>
          Author:
          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" ><?php the_author(); ?></a>

        </p>
      </footer>

    <?php endwhile; else: ?>
      <article <?php body_class(); ?>>
        <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
        <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>
      </article>

    <?php endif; ?>

<!-- Add any template tags outside of loop -->

  </div>

<?php get_footer(); ?>
