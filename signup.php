<?php
/*
Template Name: Sign Up Page
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
        

        <div class='fullwidth greybg'>
              <p>Try us out FREE for 30 Days <a class="btn primary large">Get Started</a> or <a class="btn large">Take the Tour</a></p>
        </div>
-->
      
      <div class='container greenbg'>

      <div class='row'>
        <div class='span8 whitebg'>
<!--
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
-->
          <div class='mlalert'>
            You're just 30 seconds away from your free trial of Mobile Loft:
          </div>

          <div id="janrainEngageEmbed"></div>

          <h4>Or sign up manually here:</h4>
          <form id="formRegister" name="formRegister" method="post" action="http://srv.mobile-loft.com/register.php">
            <div class="clearfix">
              <label for="xlInput">Your Name:</label>
              <div class="input">
                <input class="xlarge" size="30" type="text" name="FirstName" id="FirstName" value="" />
              </div>
            </div><!-- /clearfix -->
            <div class="clearfix">
              <label for="xlInput">Your Email:</label>
              <div class="input">
                <input class="xlarge" size="30" type="text" name="EMailAddress" id="EMailAddress" value="" />
              </div>
            </div><!-- /clearfix -->
            <div class="clearfix">
              <label for="xlInput">Password:</label>
              <div class="input">
                <input class="xlarge" size="30" type="text" name="Password" id="Password" value="" />
              </div>
            </div><!-- /clearfix -->
            <div class="clearfix">
              <label for="xlInput">Password (again) :</label>
              <div class="input">
                <input class="xlarge" size="30" type="text" name="Password2" id="Password2" value="" />
              </div>
            </div><!-- /clearfix -->
            <div class="clearfix">
              <label for="xlInput">Your Website Name:</label>
              <div class="input">
                <input class="xlarge" size="30" type="text" name="WebsiteName" id="WebsiteName" value="" />
              </div>
            </div><!-- /clearfix -->
            <div class="actions">
            <input type="submit" name="Register" class="btn primary" value="Start 30 Day Free Trial">
            </div>
           </form>

        </div><!-- end span 8 -->

        <div class='span8'>
          <h3>Why You'll Love Mobile Loft</h3>
          <ul>
            <li>Pay As You Go</li>
            <li><strong>No</strong> Contract</li>
            <li><strong>No</strong> Hidden Fees</li>
            <li><strong>No</strong> Surprises</li>
          </ul>
          <h3>30 Day Free Trial</h3>
          <div class='specialquote'>
          Try us free for 30 days and don't pay a penny.  
          </div><!-- end special quote -->
          <h3>100% Satisfaction Guarantee</h3>
          <div class='specialquote'>
          If you aren't fully satisfied, you get a no-hassle refund.  
          </div><!-- end special quote -->
          <h3>Great Customer Service</h3>
          <div class='specialquote'>
          We care about your mobile site!  Get free personal service from a mobile website developer with every account.
          </div><!-- end special quote -->
        
        </div>
      </div><!-- end row -->

      </div> <!-- /container -->
                    
    </div><!-- #post-<?php the_ID(); ?> --> 
   
  <?php endwhile; ?>
      
<?php get_footer(); ?>