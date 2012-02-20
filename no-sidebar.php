<?php
/*
Template Name: No Sidebar
*/
?>

<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post() ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class='container index'>

      <div class='row'>
        <div class='span16'>
          <h2 class="entry-title"><?php the_title(); ?></h2>
   
          <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
          </div><!-- .entry-content -->
          <div id='comments'>
            <div id="disqus_thread"></div>
              <script type="text/javascript">
                  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                  var disqus_shortname = 'sproutmobi'; // required: replace example with your forum shortname

                  /* * * DON'T EDIT BELOW THIS LINE * * */
                  (function() {
                      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          </div>
        </div>
      </div>

      </div> <!-- /container -->

      <div class='fullwidth greybg'>
              <p>Build a Free Mobile Website in Less than 30 Seconds: <a href='http://srv.mobile-loft.com/register.php' class="btn primary large">Get Started</a></p>
      </div>
                    
    </div><!-- #post-<?php the_ID(); ?> --> 
   
  <?php endwhile; ?>
      
<?php get_footer(); ?>