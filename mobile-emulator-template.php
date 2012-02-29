<?php
/*
Template Name: Mobile Emulator Template
*/
?>

<?php 
/* something like <?php if (isset($_GET['text'])) ?> */

if (isset($_GET['url'])) {
  $custurl = ($_GET['url']);
}
else {
  $custurl = "No URL Entered";
}
?>

<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post() ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class='container index'>

      <div class='row'>
        <div class='span16'>
   
          <div class="entry-content">
            <h1 class='centered'>Mobile Test Results for <?php echo $custurl ?></h1>
            <div id="transmog_167">
              <script type="text/javascript">
                 var transmog_167 = new TRANSMOG();
                 transmog_167.init({ 
                    key: "5356f5b8e4fb1",
                    container_id: "transmog_167",
                  skin: "iphone4",
                  url: "<?php echo $custurl ?>",
                  display_url: false,
                  background_color: "#FFFFFF",
                  text_color: "#000000",
                  scrollbar_color: "#CCCCCC",
                });
              </script>
            </div>

            <div class='leftsideme'>
              <h3>Potential Website Problems</h3>
              <ul>
                <li>How does <?php echo $custurl ?> look on the iphone?</li>  
                <li>Does the website load fast?  Consider that mobile phones will take much longer to load than on a computer.</li>  
                <li>Is text big enough to read?</li>
                <li>Are buttons and navigation large enough to use?</li>
              </ul>
              <h3>Improve Your Mobile Score!</h3>
                <p><strong>Make a dedicated mobile website for <?php echo $custurl ?> in as little as twenty minutes.</strong></p>  
                <p>Try the <a href='http://www.sproutmobi.com/sign-up.php'>DIY Builder free for 30 days</a> or <a href='http://www.sproutmobi.com/pricing-and-plans.php'>let us build your mobile site for you</a>!</p>
                <a href='http://www.sproutmobi.com/sign-up.php' class="btn primary large">Make <?php echo $custurl ?> Mobile</a>
            </div>



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