<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post() ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class='container index'>

      <div id="sidebar">
        <div class='span4'>
          <?php if ( !function_exists('dynamic_sidebar')
                  || !dynamic_sidebar() ) : ?>
           <div class="title">About</div>
           <p>This is my blog.</p>
           <div class="title">Links</div>
           <ul>
            <li><a href="http://example.com">Example</a></li>
           </ul>
          <?php endif; ?>
        </div>
      </div>

      <div class='row'>
        <div class='span12'>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
   
          <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
          </div><!-- .entry-content -->
        </div>
      </div>

      </div> <!-- /container -->
                    
    </div><!-- #post-<?php the_ID(); ?> --> 
   
  <?php endwhile; ?>
      
<?php get_footer(); ?>