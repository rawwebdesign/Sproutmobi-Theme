<?php
/*
Template Name: No Sidebar and No Comments
*/
?>

<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post() ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!--

          <div class="green-hero">
            <div id='topline'><?php the_field('top_line'); ?></div>
            <div id='bottomline'><?php the_field('bottom_line'); ?></div>
          </div>

    -->
        

        <div class='fullwidth greybg'>
              <p>Build a Free Mobile Website in Less than 30 Seconds: <a href='http://srv.mobile-loft.com/register.php' class="btn primary large">Get Started</a></p>
        </div>
      
      <div class='container'>

      <div class='row'>
        <div class='span16'>
          <h2 class="entry-title"><?php the_title(); ?></h2>
   
          <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
          </div><!-- .entry-content -->
        </div>
      </div>

      </div> <!-- /container -->

      <div class='fullwidth greybg'>
              <p>Build a Free Mobile Website in Less than 30 Seconds: <a href='http://srv.mobile-loft.com/register.php' class="btn primary large">Get Started</a></p>
      </div>
                    
    </div><!-- #post-<?php the_ID(); ?> --> 
   
  <?php endwhile; ?>
      
<?php get_footer(); ?>